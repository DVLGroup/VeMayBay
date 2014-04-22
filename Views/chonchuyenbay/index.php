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
				<div class="alert-success thumbnail">
					<h5><strong>Vé máy bay chiều:</strong>
						<strong class="lead text-orange"><?php echo Session::get('oriName'); ?></strong> <strong>-</strong> <strong class="lead text-info"><?php echo Session::get('desName'); ?></strong>
					</h5>
					
					<h5>Ngày: <?php echo Session::get('dateGo'); ?></h5>
				</div>
				<div style="height: 250px; overflow: auto" class="table-responsive">
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
								echo "<td>";
								echo $item['name'];
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
								echo "<input type='radio' name='chooseGo' id='chooseGo" . $i . "' />";
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
				<div class="alert-success thumbnail">
					<h5><strong>Vé máy bay chiều:</strong>
						<strong class="lead text-info"><?php echo Session::get('desName'); ?></strong> <strong>-</strong> <strong class="lead text-orange"><?php echo Session::get('oriName'); ?></strong>
					</h5>
					
					<h5>Ngày: <?php echo Session::get('dateBack'); ?></h5>
				</div>
				<div style="height: 250px; overflow: auto" class="table-responsive">
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
								echo "<td>";
								echo $item['name'];
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
								echo "<input type='radio' name='chooseBack' id='chooseBack" . $i . "' />";
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
			</div>
		</div>
	</div>
</div>