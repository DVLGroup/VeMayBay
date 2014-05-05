<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			
		});
	});
</script>
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
			<div class="col-sm-2 alert-danger">
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
	<!--<?php echo Session::get('total').Session::get('aName').Session::get('codeFlight1').Session::get('hangVe2').Session::get('crypt2');?>
	!-->
	<form class="form-horizontal" action="" method="post" id="management">
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<h3 class="col-sm-12 text-danger"><strong> Thông tin hành trình </strong></h3>
				</div>
			</div>
			<?php if(Session::get('loaiVe') == 1){ ?>
			<div class="col-sm-6">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-info">
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
			</div>
			<div class="col-sm-6">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-info">
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
			</div>
			<?php }else {?>
				<div class="col-sm-offset-2 col-sm-8">
				<table class="table table-responsive table-hover table-striped">
					<tr class="alert alert-info">
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
			</div>
			<?php }?>
		</div>
	</div>
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<h3 class="col-sm-12 text-danger"><strong> Thông tin hành khách </strong></h3>
				</div>
				<hr class="alert-info" />
			<?php
			for($i=1;$i<=Session::get('nguoiLon');$i++){
				?>
				<div class="form-group">
					<label class="col-sm-2 control-label">Ông/Bà:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="nguoiLon<?php echo $i; ?>" value="" />
					</div>
					<label class="col-sm-2 control-label">Ngày Sinh:</label>
					<div class="col-sm-3">
						<input type="date" class="form-control" name="tuoiNguoiLon<?php echo $i; ?>" value="1920-01-01" />
					</div>				
				</div>
				<hr class="alert-info" />
				<?php
			}
			?>
			
			<?php
			for($i=1;$i<=Session::get('treEm');$i++){
				?>
				<div class="form-group">
					<label class="col-sm-2 control-label">Cháu:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="treEm<?php echo $i; ?>" value="" />
					</div>
					<label class="col-sm-2 control-label">Ngày Sinh:</label>
					<div class="col-sm-3">
						<input type="date" class="form-control" name="tuoiTreEm<?php echo $i; ?>" value="2010-01-01" />
					</div>
				</div>
				<hr class="alert-info" />
				<?php
			}
			?>
			
			<?php
			for($i=1;$i<=Session::get('soSinh');$i++){
				?>
				<div class="form-group">
					<label class="col-sm-2 control-label">Bé:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="soSinh<?php echo $i; ?>" value="" />
					</div>
					<label class="col-sm-2 control-label">Ngày Sinh:</label>
					<div class="col-sm-3">
						<input type="date" class="form-control" name="tuoiSoSinh<?php echo $i; ?>" value="2014-01-01" />
					</div>
				</div>
				<hr class="alert-info" />
				<?php
			}
			?>
			
			</div>
		</div>
	</div>
	
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<h3 class="col-sm-12 text-danger"><strong> Thông tin hành lý </strong></h3>
				</div>
				<hr class="alert-info" />
				<?php
				if(Session::get('loaiVe')==1)
				{
				?>
					<div class="form-group">
						<h5 class="col-sm-offset-2 col-sm-10"><strong>Chiều đi</strong></h5>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý xách tay: </p>
						<p class="col-sm-8">Mỗi hành khách được mang theo tối đa 7 Kg hành lý xách tay.</p>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý ký gửi: </p>
						<p class="col-sm-8"><strong><?php echo $this->hanhLyDi[0]['hanh_ly_name'] ?></strong></p>
					</div>
					<hr class="alert-info" />
					<div class="form-group">
						<h5 class="col-sm-offset-2 col-sm-10"><strong>Chiều về</strong></h5>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý xách tay: </p>
						<p class="col-sm-8">Mỗi hành khách được mang theo tối đa 7 Kg hành lý xách tay.</p>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý ký gửi: </p>
						<p class="col-sm-8"><strong><?php echo $this->hanhLyVe[0]['hanh_ly_name'] ?></strong></p>
					</div>
					<hr class="alert-info" />
				<?php
				}else{
				?>
					<div class="form-group">
						<h5 class="col-sm-offset-2 col-sm-10"><strong>Chiều đi</strong></h5>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý xách tay: </p>
						<p class="col-sm-8">Mỗi hành khách được mang theo tối đa 7 Kg hành lý xách tay.</p>
					</div>
					<div class="form-group">
						<p class="col-sm-offset-2 col-sm-2">Hành lý ký gửi: </p>
						<p class="col-sm-8"><strong><?php echo $this->hanhLyDi[0]['hanh_ly_name'] ?></strong></p>
					</div>
					<hr class="alert-info" />
				<?php
				}
				?>
			</div>
		</div>
	</div>
				
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<h3 class="col-sm-12 text-danger"><strong> Thông tin liên hệ </strong></h3>
				</div>
				<hr class="alert-info" />
				<div class="form-group">
					<label class="col-sm-2 control-label">Ông/Bà</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="hoTen" value="" />
					</div>
					<label class="col-sm-2 control-label">Điện thoại</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required number" minlength="9" name="dThoai" value="" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Email</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="email" value="" />
					</div>
					<label class="col-sm-2 control-label">Tỉnh/Thành Phố</label>
					<div class="col-sm-3">
						<select class="form-control" name="tinhThanh">
							<option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
							<option value="Hà Nội">Hà Nội</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Địa chỉ</label>
					<div class="col-sm-3">
						<input type="text" class="form-control required" name="hoTen" value="" />
					</div>
					<label class="col-sm-2 control-label">Quốc gia</label>
					<div class="col-sm-3">
						<select class="form-control" name="quocGia">
							<option value="Việt Nam">Việt Nam</option>
							<option value="Lào">Lào</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<h3 class="col-sm-12 text-danger"><strong> Chọn phương thức thanh toán </strong></h3>
				</div>
				<hr class="alert-info" />
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-2">
						<div class="radio">
							<label>
								<input type="radio" name="chuyenKhoan" checked="checked" value="1" />
								Chuyển khoản.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="chuyenKhoan" value="2" />
								Tại văn phòng.
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="chuyenKhoan" value="3" />
								Thanh toán tại nhà.
							</label>
						</div>
						<hr class="alert-info" />
					</div>
					<div class="col-sm-8">
						<p><strong>Ngân hàng TMCP Ngoại thương Việt Nam</strong></p>
						<p>Tên tài khoản: Công ty CP Đầu Tư – VNA</p>
						<p>Số tài khoản: 0071 00077 6789</p>
						<p>Chi nhánh: TP.HCM</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>