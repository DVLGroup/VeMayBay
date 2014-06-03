<script type="text/javascript">
</script>
<input type="hidden" value="<?php echo Session::get('nguoiLon'); ?>" id="nguoiLon" name="nguoiLon"/>
<input type="hidden" value="<?php echo Session::get('treEm'); ?>" id="treEm" name="treEm"/>
<input type="hidden" value="<?php echo Session::get('soSinh'); ?>" id="soSinh" name="soSinh"/>
<input type="hidden" value="<?php echo Session::get('loaiVe'); ?>" id="loaiVe" name="loaiVe"/>
<div class="row">
	<!-- Step by steps -->
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-2 alert-info">
				<a href="<?php echo URL; ?>index"> <h5 class="text-center">Tìm kiếm <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-danger">
				<a href="#"> <h5 class="text-center">Chọn chuyến bay <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#"> <h5 class="text-center">Thông tin khách <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#"> <h5 class="text-center">Xác nhận <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#"> <h5 class="text-center">Hoàn tất <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
		</div>
	</div>
	<!-- Booking items -->
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-9">
				<div class="alert-danger thumbnail">
					<h3 class="text-danger"><strong>Giá vé rẻ nhất</strong></h3>
				</div>
				<div class="table-responsive">
					<strong class="text-danger"><?php echo Session::get('oriName'); ?></strong> 
					<strong class="text-muted"><i class="fa fa-arrow-right"></i></strong> 
					<strong class="text-danger"><?php echo Session::get('desName'); ?></strong>
				<table class="table table-striped table-hover table-responsive alert-danger">
					<tr>
						<th>Hãng</th>
						<th>Khởi hành</th>
						<th>Đến nơi</th>
						<th>Giá</th>
						<th>Hạng vé</th>
						<th>Chuyến bay</th>
						<th>chọn</th>
					</tr>
					<?php
					$i = 1;
					$minCost = null;
					$minName =null;
					$minTime1 = null;
					$minTime2 = null;
					$minType = null;
					$minFlight = null;
					$minCrypt = null;
					if (isset($this -> json) && $this -> json != null) {

						foreach ($this->json as $item) {
							if ($item['trangthai'] == 0) {
								if($minCost == null)
								{
									$minCost = $item['cost'];
									$minName = $item['name'];
									$minTime1 = $item['time1'];
									$minTime2 = $item['time2'];
									$minType = $item['type_journey'];
									$minFlight = $item['codes_flight'];
									$minCrypt = $item['crypt'];
								}
								else {
									if($minCost > $item['cost']){
										$minCost = $item['cost'];
										$minName = $item['name'];
										$minTime1 = $item['time1'];
										$minTime2 = $item['time2'];
										$minType = $item['type_journey'];
										$minFlight = $item['codes_flight'];
										$minCrypt = $item['crypt'];	
									}
								}
								$i++;
							}
						}
						if($minCost!=null)
						{
						echo "<tr>";
						echo "<td style='display: none;'>";
						echo $minName;
						echo "</td>";
						echo "<td>";
						echo "<img src='" . URL . "/public/images/VNairlines_logo.png' />";
						echo "</td>";
						echo "<td>";
						echo $minTime1;
						echo "</td>";
						echo "<td>";
						echo $minTime2;
						echo "</td>";
						echo "<td>";
						echo $minCost;
						echo "</td>";
						echo "<td>";
						echo $minType;
						echo "</td>";
						echo "<td>";
						echo $minFlight;
						echo "</td>";
						echo "<td Style='display: none;'>";
						echo $minCrypt;
						echo "</td>";
						echo "<td>";
						echo "<input type='radio' name='chooseGo' value='" . $minName ."|". $minTime1 ."|". $minTime2 ."|". $minCost ."|". $minType ."|". $minFlight ."|". $minCrypt . "' />";
						echo "</td>";
						echo "</tr>";
						}
					}
					?>
				</table>
				</div>
				<?php
				if(Session::get('loaiVe')==1){
				?>
				<div class="table-responsive">
					<strong class="text-danger"><?php echo Session::get('desName'); ?></strong> 
					<strong class="text-muted"><i class="fa fa-arrow-right"></i></strong> 
					<strong class="text-danger"><?php echo Session::get('oriName'); ?></strong>
				<table class="table table-striped table-hover table-responsive alert-danger">
					<tr>
						<th>Hãng</th>
						<th>Khởi hành</th>
						<th>Đến nơi</th>
						<th>Giá</th>
						<th>Hạng vé</th>
						<th>Chuyến bay</th>
						<th>chọn</th>
					</tr>
					<?php
					$i = 1;
					$minCost = null;
					$minName = null;
					$minTime1 = null;
					$minTime2 = null;
					$minType = null;
					$minFlight = null;
					$minCrypt = null;
					if (isset($this -> json)&& $this -> json != null) {
						foreach ($this->json as $item) {
							if ($item['trangthai'] == 1) {
								if($minCost == null)
								{
									$minCost = $item['cost'];
									$minName = $item['name'];
									$minTime1 = $item['time1'];
									$minTime2 = $item['time2'];
									$minType = $item['type_journey'];
									$minFlight = $item['codes_flight'];
									$minCrypt = $item['crypt'];
								}
								else {
									if($minCost > $item['cost']){
										$minCost = $item['cost'];
										$minName = $item['name'];
										$minTime1 = $item['time1'];
										$minTime2 = $item['time2'];
										$minType = $item['type_journey'];
										$minFlight = $item['codes_flight'];
										$minCrypt = $item['crypt'];	
									}
								}
								$i++;
							}
						}
						if($minCost!=null)
						{
						echo "<tr>";
						echo "<td style='display: none;'>";
						echo $minName;
						echo "</td>";
						echo "<td>";
						echo "<img src='" . URL . "/public/images/VNairlines_logo.png' />";
						echo "</td>";
						echo "<td>";
						echo $minTime1;
						echo "</td>";
						echo "<td>";
						echo $minTime2;
						echo "</td>";
						echo "<td>";
						echo $minCost;
						echo "</td>";
						echo "<td>";
						echo $minType;
						echo "</td>";
						echo "<td>";
						echo $minFlight;
						echo "</td>";
						echo "<td Style='display: none;'>";
						echo $minCrypt;
						echo "</td>";
						echo "<td>";
						echo "<input type='radio' name='chooseBack' value='" . $minName ."|". $minTime1 ."|". $minTime2 ."|". $minCost ."|". $minType ."|". $minFlight ."|". $minCrypt . "' />";
						echo "</td>";
						echo "</tr>";
						}
					}
					?>
				</table>
				</div>
				<?php
				}
				?>
				<div class="alert-success thumbnail">
					<h5 class="text-danger"><strong>Vé máy bay chiều:</strong>
						<strong class=""><?php echo Session::get('oriName'); ?></strong> <strong><i class="fa fa-arrow-right"></i></strong> <strong class=""><?php echo Session::get('desName'); ?></strong>
					</h5>
					
					<h5 class="text-danger">Ngày: <?php echo Session::get('dateGo'); ?></h5>
				</div>
				<div style="height: 450px; overflow: auto" class="table-responsive">
				<table class="table table-striped table-hover table-responsive">
					<tr>
						<th>Hãng</th>
						<th>Khởi hành</th>
						<th>Đến nơi</th>
						<th>Giá</th>
						<th>Hạng vé</th>
						<th>Chuyến bay</th>
						<th>chọn</th>
					</tr>
					<?php
					$i = 1;
					if (isset($this -> json)) {

						foreach ($this->json as $item) {
							if ($item['trangthai'] == 0) {
								echo "<tr>";
								echo "<td style='display: none;'>";
								echo $item['name'];
								echo "</td>";
								echo "<td>";
								echo "<img src='" . URL . "/public/images/VNairlines_logo.png' />";
								echo "</td>";
								echo "<td>";
								echo $item['time1'];
								echo "</td>";
								echo "<td>";
								echo $item['time2'];
								echo "</td>";
								echo "<td>";
								echo $item['cost'];
								echo "</td>";
								echo "<td>";
								echo $item['type_journey'];
								echo "</td>";
								echo "<td>";
								echo $item['codes_flight'];
								echo "</td>";
								echo "<td Style='display: none;'>";
								echo $item['crypt'];
								echo "</td>";
								echo "<td>";
								echo "<input type='radio' name='chooseGo' id='chooseGo" . $i . "' value='" . $item['name'] ."|". $item['time1'] ."|". $item['time2'] ."|". $item['cost'] ."|". $item['type_journey'] ."|". $item['codes_flight'] ."|". $item['crypt'] . "' />";
								echo "</td>";
								echo "</tr>";
								$i++;
								// echo "</br>
								// Tên: " . $item['name'] .
								// " | Loại vé: " . $item['trangthai'] .
								// " | TG bay: " . $item['time1'] .
								// " | Bay đi: " . $item['Origin'] .
								// " | TG bay về: " . $item['time2'] .
								// " | Bay về: " . $item['Destination'] .
								// " | Hạng vé: " . $item['type_journey'] .
								// " | Giá(chưa thuế): " . $item['cost'] .
								// " | Mã chuyến bay: " . $item['codes_flight'] .$item['crypt'] ."</br>";
							}
						}
					}
					?>
				</table>
				</div>
				<?php if(Session::get('loaiVe') == 1){
				?>
				<div class="alert-success thumbnail">
					<h5 class="text-danger"><strong>Vé máy bay chiều:</strong>
						<strong class=""><?php echo Session::get('desName'); ?></strong> <strong><i class="fa fa-arrow-right"></i></strong> <strong class=""><?php echo Session::get('oriName'); ?></strong>
					</h5>
					
					<h5 class="text-danger">Ngày: <?php echo Session::get('dateBack'); ?></h5>
				</div>
				<div style="height: 450px; overflow: auto" class="table-responsive">
				<table class="table table-striped table-hover table-responsive">
					<tr>
						<th>Hãng</th>
						<th>Khởi hành</th>
						<th>Đến nơi</th>
						<th>Giá</th>
						<th>Hạng vé</th>
						<th>Chuyến bay</th>
						<th>chọn</th>
					</tr>
					<?php
					$i = 1;
					if (isset($this -> json)) {
						foreach ($this->json as $item) {
							if ($item['trangthai'] == 1) {
								echo "<tr>";
								echo "<td style='display: none;'>";
								echo $item['name'];
								echo "</td>";
								echo "<td>";
								echo "<img src='" . URL . "/public/images/VNairlines_logo.png' />";
								echo "</td>";
								echo "<td>";
								echo $item['time1'];
								echo "</td>";
								echo "<td>";
								echo $item['time2'];
								echo "</td>";
								echo "<td>";
								echo $item['cost'];
								echo "</td>";
								echo "<td>";
								echo $item['type_journey'];
								echo "</td>";
								echo "<td>";
								echo $item['codes_flight'];
								echo "</td>";
								echo "<td Style='display: none;'>";
								echo $item['crypt'];
								echo "</td>";
								echo "<td>";
								echo "<input type='radio' name='chooseBack' id='chooseBack" . $i . "' value='" . $item['name'] ."|". $item['time1'] ."|". $item['time2'] ."|". $item['cost'] ."|". $item['type_journey'] ."|". $item['codes_flight'] ."|". $item['crypt'] . "' />";
								echo "</td>";
								echo "</tr>";
								$i++;
								// echo "</br>
								// Tên: " . $item['name'] .
								// " | Loại vé: " . $item['trangthai'] .
								// " | TG bay: " . $item['time1'] .
								// " | Bay đi: " . $item['Origin'] .
								// " | TG bay về: " . $item['time2'] .
								// " | Bay về: " . $item['Destination'] .
								// " | Hạng vé: " . $item['type_journey'] .
								// " | Giá(chưa thuế): " . $item['cost'] .
								// " | Mã chuyến bay: " . $item['codes_flight'] .$item['crypt'] ."</br>";
							}
						}
					}
					?>
				</table>
				</div>
				<?php }?>
			</div>
			<div class="col-sm-3">
				<h4 class="text-danger"><i class="fa fa-2x fa-shopping-cart text-muted"></i> Tóm tắt thông tin</h4>
				<?php if(Session::get('loaiVe') == 1)
				{
				?>
				<div class="alert-info thumbnail">
					<button class="btn btn-lg btn-block btn-info" id="submitCart1">
						<i class="fa fa-search"></i>
						Tiếp tục
					</button>
					<br />
					<p class="lead text-danger"><?php echo Session::get('ori'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('des'); ?></p>
					<label>Giá vé: </label>
					<div class="pull-right text-danger" id="giaVe1">0</div>
					<br />
					<label>Thuế và phí: </label>
					<div class="pull-right text-danger" id="thuePhi1">0</div>
					<br />
					<label>Tổng: </label>
					<div class="pull-right text-danger" id="tong1">0</div>
					<br />
					<hr />
					<p class="lead text-danger"><?php echo Session::get('des'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('ori'); ?></p>
					<label>Giá vé: </label>
					<div class="pull-right text-danger" id="giaVe2">0</div>
					<br />
					<label>Thuế và phí: </label>
					<div class="pull-right text-danger" id="thuePhi2">0</div>
					<br />
					<label>Tổng: </label>
					<div class="pull-right text-danger" id="tong2">0</div>
					<hr />
					<form method="post" class="form-horizontal" id="cart" action="<?php echo URL; ?>thongtinkh/getSession">
						<input type="hidden" name="total" id="total" />
						
						<input type="hidden" name="_aName" id="_aName" />
						<input type="hidden" name="_timeGo1" id="_timeGo1" />
						<input type="hidden" name="_timeGo2" id="_timeGo2" />
						<input type="hidden" name="_cost1" id="_cost1" />
						<input type="hidden" name="_hangVe1" id="_hangVe1" />
						<input type="hidden" name="_codeFlight1" id="_codeFlight1" />
						<input type="hidden" name="_crypt1" id="_crypt1" />
						
						<input type="hidden" name="_bName" id="_bName" />
						<input type="hidden" name="_timeBack1" id="_timeBack1" />
						<input type="hidden" name="_timeBack2" id="_timeBack2" />
						<input type="hidden" name="_cost2" id="_cost2" />
						<input type="hidden" name="_hangVe2" id="_hangVe2" />
						<input type="hidden" name="_codeFlight2" id="_codeFlight2" />
						<input type="hidden" name="_crypt2" id="_crypt2" />
						
						<label class="lead">Tổng cộng: </label>
						<div class="pull-right lead text-danger" id="tongCong">0</div>
					</form>
				</div>
				<?php
				}
                ?>
				<?php if(Session::get('loaiVe') == 0)
				{
				?>
				<div class="alert-info thumbnail">
					<button class="btn btn-lg btn-block btn-info" id="submitCart2">
						<i class="fa fa-search"></i>
						Tiếp tục
					</button>
					<br />
					<p class="lead text-danger"><?php echo Session::get('ori'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('des'); ?></p>
					<label>Giá vé: </label>
					<div class="pull-right text-danger" id="giaVe1">0</div>
					<br />
					<label>Thuế và phí: </label>
					<div class="pull-right text-danger" id="thuePhi1">0</div>
					<br />
					<label>Tổng: </label>
					<div class="pull-right text-danger" id="tong1">0</div>
					<hr />
					<form method="post" class="form-horizontal" id="cart" action="<?php echo URL; ?>thongtinkh/getSession">
						<input type="hidden" name="total" id="total" />
						
						<input type="hidden" name="_aName" id="_aName" />
						<input type="hidden" name="_timeGo1" id="_timeGo1" />
						<input type="hidden" name="_timeGo2" id="_timeGo2" />
						<input type="hidden" name="_cost1" id="_cost1" />
						<input type="hidden" name="_hangVe1" id="_hangVe1" />
						<input type="hidden" name="_codeFlight1" id="_codeFlight1" />
						<input type="hidden" name="_crypt1" id="_crypt1" />
						
						<label class="lead">Tổng cộng: </label>
						<div class="pull-right lead text-danger" id="tongCong">0</div>
					</form>
				</div>
				<?php
				}
                ?>
			</div>
		</div>
	</div>
</div>