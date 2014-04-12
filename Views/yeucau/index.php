<div class="row">
	<?php
	Session::init();
	$check = Session::get('check');
	if(isset($check) && $check==1){
	?>
	<script>
		raiseMsg();
	</script>

	<?php
	}
	Session::destroy();
	?>
	<!-- <script type="text/javascript">
    $(document).ready( function () {
        $("#management").submit( function () {
            var formdata = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "submit.php",
                data: formdata,
             });
            return false;
        });
    });
	</script> -->
	<div class="col-sm-offset-2 col-sm-8 col-sm-offset-2 well">
		<h3 class="text-info"><strong>Yêu Cầu Săn Vé</strong></h3>
		<hr class="alert-info" />
		<form class="form-horizontal" action="<?php echo URL; ?>yeucau/send" method="post" id="management">
			<div class="form-group">
				<label class="col-sm-2 control-label">Họ tên (!)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control required" name="hoTen"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email (!)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control required email" name="email" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Điện thoại (!)</label>
				<div class="col-sm-6">
					<input type="text" minlength="9" class="form-control required number" name="dThoai" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Bay đi</label>
				<div class="col-sm-3">
					<select name="ori" class="form-control">
						<option value="HoChiMinh">Hồ Chí Minh</option>
					</select>
				</div>
				<div class="col-sm-3">
					<input type="date" name="ngayDi1" id="ngayDi1" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
				</div>
				<label class="col-sm-1 control-label">đến</label>
				<div class="col-sm-3">
					<input type="date" name="ngayDi2" id="ngayDi2" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Bay về</label>
				<div class="col-sm-3">
					<select name="des" class="form-control">
						<option value="HaNoi">Hà Nội</option>
					</select>
				</div>
				<div class="col-sm-3">
					<input type="date" name="ngayVe1" id="ngayVe1" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
				</div>
				<label class="col-sm-1 control-label">đến</label>
				<div class="col-sm-3">
					<input type="date" name="ngayVe2" id="ngayVe2" class="form-control" value="<?php echo date("Y-m-d"); ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Loại vé</label>
				<div class="col-sm-6">
					<select class="form-control" name="loaiVe">
						<option value="1 chiều">Một chiều</option>
						<option value="khứ hồi" selected="selected">Khứ hồi</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Số lượng</label>
				<div class="col-sm-6">
					<select class="form-control" name="soLuong">
						<option value="1" selected="selected">1</option>
						<option value="2">2</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-2">
					<label class="checkbox-inline">
						<input type="hidden" name="hangBay1" value="VietJetAir" />
						<input type="checkbox" checked="checked" disabled="" />
						VietJetAir </label>
				</div>
				<div class="col-sm-2">
					<label class="checkbox-inline">
						<input type="checkbox" checked="checked" name="hangBay2" value="JetStar" />
						JetStar </label>
				</div>
				<div class="col-sm-2">
					<label class="checkbox-inline">
						<input type="checkbox" checked="checked" name="hangBay3" value="VietNam-Airline" />
						VN-Airline </label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<label class="checkbox-inline">
						<input type="checkbox" checked="checked" name="quaMail" value="1" />
						Gửi yêu cầu qua mail </label>
				</div>
			</div>
			<hr class="alert-info" />
			<div class="form-group">
				<div id="appendYC" class="col-sm-offset-2 col-sm-10">
					<input name="submit" id="submitYC" type="submit" value="Gửi Yêu Cầu" class="btn btn-default" />
					<i id="loadNearButton" class="fa fa-refresh fa-spin fa-lg text-success" style="display: none;"></i>
					<i id="msgNearButton" class="text-success" style="display: none;">
					<span class="fa-stack"> 
						<i class="fa fa-circle fa-stack-2x"></i> 
						<i class="fa fa-check fa-inverse fa-stack-1x"></i> 
					</span> 
					Gửi yêu cầu thành công!
					</i>
				</div>
				<div class="col-sm-offset-2 col-sm-10" id="checkDateYC" style="display: none;">
					<span class="fa-stack"> <i class="fa fa-search fa-stack-1x"></i> <i class="fa fa-ban fa-stack-2x text-danger"></i> </span>
					<strong class="text-danger">Ngày đi phải nhỏ hơn ngày về, Bạn hãy nhập lại!</strong>
				</div>
				<div class="col-sm-offset-2 col-sm-10" id="checkDateDiVeYC" style="display: none;">
					<span class="fa-stack"> <i class="fa fa-search fa-stack-1x"></i> <i class="fa fa-ban fa-stack-2x text-danger"></i> </span>
					<strong class="text-danger">Ngày đi, về không được nhỏ hơn hiện tại, Bạn hãy nhập lại!</strong>
				</div>
			</div>
		</form>
	</div>
</div>