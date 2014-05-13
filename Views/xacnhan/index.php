<div class="row">
	<!-- Step by steps -->
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-2 alert-info">
				<a href="<?php echo URL; ?>index"> <h5 class="text-center">Tìm kiếm <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="<?php echo URL; ?>chonchuyenbay/index"> <h5 class="text-center">Chọn chuyến bay <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="<?php echo URL; ?>thongtinkh/index"> <h5 class="text-center">Thông tin khách <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-danger">
				<a href="#"> <h5 class="text-center">Xác nhận <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#"> <h5 class="text-center">Hoàn tất <i class="fa fa-arrow-right"></i></h5> </a>
			</div>
		</div>
	</div>
	<div class="col-sm-12 well">
		<div class="row">
		<div class="col-sm-offset-1 col-sm-10 thumbnail" style="padding: 30px;">
		<div class="row">
			<h3 class="col-sm-12 text-orange"><strong> Thông tin hành trình </strong></h3>
			<?php if(Session::get('loaiVe') == 1){ ?>
			<div class="col-sm-6">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-success">
						<th>Chiều đi</th>
						<th colspan="2"><?php echo Session::get('oriName')?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('desName'); ?></th>
					</tr>
					<tr>
						<td><img src="<?php echo URL; ?>/public/images/VNairlines_logo.png" /></td>
						<td><strong><?php echo Session::get('timeGo1'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('timeGo2'); ?></strong></td>
						<td>Ngày: <strong><?php echo Session::get('dateGo'); ?></strong></td>				
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Số chuyến bay: <strong><?php echo Session::get('codeFlight1'); ?></strong></td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<hr class="alert-info" />
			</div>
			<div class="col-sm-6">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-success">
						<th>Chiều về</th>
						<th colspan="2"><?php echo Session::get('desName')?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('oriName'); ?></th>
					</tr>
					<tr>
						<td><img src="<?php echo URL; ?>/public/images/VNairlines_logo.png" /></td>
						<td><strong><?php echo Session::get('timeBack1'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('timeBack2'); ?></strong></td>
						<td>Ngày: <strong><?php echo Session::get('dateBack'); ?></strong></td>				
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Số chuyến bay: <strong><?php echo Session::get('codeFlight2'); ?></strong></td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<hr class="alert-info" />
				<br />
			</div>
			<?php }else { ?>
				<div class="col-sm-offset-1 col-sm-10">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-success">
						<th>Chuyến bay</th>
						<th colspan="2"><?php echo Session::get('oriName')?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('desName'); ?></th>
					</tr>
					<tr>
						<td><img src="<?php echo URL; ?>/public/images/VNairlines_logo.png" /></td>
						<td><strong><?php echo Session::get('timeGo1'); ?> <i class="fa fa-arrow-right"></i> <?php echo Session::get('timeGo2'); ?></strong></td>
						<td>Ngày: <strong><?php echo Session::get('dateGo'); ?></strong></td>				
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>Số chuyến bay: <strong><?php echo Session::get('codeFlight1'); ?></strong></td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<hr class="alert-info" />
				<br />
			</div>
			<?php } ?>
			<div class="col-sm-6">
				<div class="row">
				<h3 class="col-sm-12 text-orange"><strong> Thông tin hành khách </strong></h3>
					<div class="col-sm-12 ">
						<table class="table table-responsive table-hover table-striped">
							<tr class="alert alert-success">
								<th>Họ tên</th>
								<th>Ngày sinh</th>
							</tr>
					<?php
					for($i=1;$i<=Session::get('nguoiLon');$i++){
						?>
						<tr>
							<td><?php echo Session::get("nguoiLon" . $i); ?></td>
							<td><?php echo Session::get("tuoiNguoiLon" . $i); ?></td>
						</tr>
						<?php
						}
					?>
			
					<?php
					for($i=1;$i<=Session::get('treEm');$i++){
						?>
						<tr>
							<td><?php echo Session::get("treEm" . $i); ?></td>
							<td><?php echo Session::get("tuoiTreEm" . $i); ?></td>
						</tr>
						<?php
						}
					?>
			
					<?php
					for($i=1;$i<=Session::get('soSinh');$i++){
						?>
						<tr>
							<td><?php echo Session::get("soSinh" . $i); ?></td>
							<td><?php echo Session::get("tuoiSoSinh" . $i); ?></td>
						</tr>
						<?php
						}
					?>
						</table>
						<hr class="alert-info" />
						<br />
					</div>
					<div class="col-sm-12">
						<div class="row">
							<h3 class="col-sm-12 text-orange"><strong> Thông tin liên lạc </strong></h3>
							<label class="col-sm-3">Ông/Bà:</label>
							<p class="col-sm-9"><?php echo Session::get('hoTen'); ?></p>
							<label class="col-sm-3">Số ĐT:</label>
							<p class="col-sm-9"><?php echo Session::get('dThoai'); ?></p>
							<label class="col-sm-3">Email:</label>
							<p class="col-sm-9"><?php echo Session::get('email'); ?></p>
							<label class="col-sm-3">Địa Chỉ:</label>
							<p class="col-sm-9">
								<?php echo Session::get('dChi'); ?>, <?php echo Session::get('tinhThanh'); ?>, <?php echo Session::get('quocGia'); ?>								
							</p>		
						</div>	
						<hr class="alert-info" />
						<br />
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
				<h3 class="col-sm-12 text-orange"><strong> Thông tin thanh toán </strong></h3>
				<div class="col-sm-12">
					<p>NH TMCP Vietcom Bank</p> 
					<p>Tên tài khoản Giám Đốc: Đỗ Duy Thanh</p>
					<p>Số tài khoản: <strong class="text-danger" >0461. 0004. 67483</strong></p>
					<p>Chi nhánh: <strong class="text-danger">Hồ Chí Minh</strong></p>
					<br />
					<i class="text-muted">Sau khi thực hiện chuyển khoản vui lòng gọi hoặc nhắn tin để xác thực:</i> 
					<br />
					<b>(08) 7301 5888 - 0909 68 3438</b>
				</div>
				</div>
				<hr class="alert-info" />
				<br />
			</div>
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<h3 class="col-sm-12 text-orange"><strong> Chi tiết giá </strong></h3>
							<label class="col-sm-8"><?php echo Session::get('nguoiLon'); ?> X Người lớn, 
							<?php
							if (Session::get('treEm') != 0) {
								echo Session::get('treEm') . " X Trẻ em";
							}
							if (Session::get('soSinh') != 0) {
								echo " ," . Session::get('treEm') . " X Bé sơ sinh";
							}
							?>
							</label>
							<p class="col-sm-4 text-success"><?php echo Session::get('total') . " Vnđ"; ?></p>
							<label class="col-sm-8">Hành lý ký gửi</label>
							<?php if(Session::get('loaiVe')==0){?>
								<p class="col-sm-4 text-success"><?php echo Session::get('giaHanhLyDi') . " Vnđ"; ?></p>
							<?php }else{ ?>
								<p class="col-sm-4 text-success"><?php echo Session::get('giaHanhLyDi') + Session::get('giaHanhLyVe') . " Vnđ"; ?></p>
							<?php } ?>
							<label class="col-sm-8 text-danger">Tổng cộng</label>
							<?php if(Session::get('loaiVe')==0){?>
								<p class="col-sm-4 text-success"><strong><?php echo Session::get('total') + Session::get('giaHanhLyDi') . " Vnđ"; ?></strong></p>
							<?php }else{ ?>
								<p class="col-sm-4 text-success"><strong><?php echo Session::get('total') + Session::get('giaHanhLyDi') + Session::get('giaHanhLyVe') . " Vnđ"; ?></strong></p>
							<?php } ?>
						</div>
						<hr class="alert-info" />
						<br />
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<a href="<?php echo URL; ?>hoantat/hoantat" class="btn btn-lg btn-block btn-info"><i class="fa fa-search"></i>Tiếp tục</a>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>