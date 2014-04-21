<?php
Session::init();
Session::destroy();
?>
<script type="text/javascript">
	$(document).on('click', '#submit', function(){
			d = new Date($("#dateDi").val());
			date = d.getDate();
			month = d.getMonth();
			year = d.getFullYear();
			time1 = date+"/"+parseInt(month+1)+"/"+year;
			// alert(time1);
			d = new Date($("#dateVe").val());
			date = d.getDate();
			month = d.getMonth();
			year = d.getFullYear();
			time2 = date+"/"+parseInt(month+1)+"/"+year;
			// alert(time1+time2);
			var data = "url=http://vietjetair-nduc1888.rhcloud.com/ajax_VNairlines.php&RoundTrip=" + $("#RoundTrip").val() + 
			"&Origin1=" + $("#Origin1").val() + "&Destination1=" + $("#Destination1").val() + 
			"&_time1=" + time1 + "&_time2=" + time2 + 
			"&traveler=" + $("#People").val() + "&baby=" + $("#Child").val() + "&newborn=" + $("#NewBorn").val();
			// alert(data);
			$("#waiting").fadeIn();
			$.ajax({
				url : "chonchuyenbay/proxy",
				data : data,
				type : "POST",
				success : function(data, textStatus, jqXHR) {
					console.log('Success ' + data);
					// $("#result").html(data);
					$("#storeJson").val(data);
					// var a = data;
					// alert(a);
					$("#formJson").submit();
					return false;
				},
				error : function(jqXHR, textStatus, errorThrown) {
					console.log('Error ' + jqXHR);
					return false;
				}
			});
	}); 
</script>

<div class="row">
	<form id="formJson" method="post" action="chonchuyenbay/index" style="display: none">
		<input type="hidden" value="" name="jsonFile" id="storeJson" />
	</form>
	<div class="col-sm-offset-5 col-sm-2 text-center" id="loading" style="display: none;margin-bottom: 20px;">
		<i class="fa fa-refresh fa-3x fa-spin text-primary"></i>
	</div>
	<div class="col-sm-offset-4 col-sm-4 thumbnail alert-success" id="messageBox" style="display: none;">
		<h5 class="text-center"><span class="fa-stack"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-check fa-inverse fa-stack-1x"></i> </span> Gửi yêu cầu thành công!</h5>
	</div>
	<div class="col-sm-12 well">
		
		<div class="row">
			<div class="col-sm-6" style="">
				<form class="form-horizontal" action="">
					<div class="form-group">
						<h3 class="col-sm-12 text-info"><strong> Tìm Giá Vé Tại Đây </strong></h3>
					</div>
					<hr class="alert-info" />
					<div class="form-group">
						<div class="col-md-12">
							<div class="radio-inline">
								<label>
									<input type="radio" name="loaiVe" id="RoundTrip" value="1" checked="checked"/>
									Khứ Hồi </label>

							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="loaiVe" id="RoundTrip" value="0" />
									Một Chiều </label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="Origin1" id="Origin1" class="form-control">
								<option value="SGN">Hồ Chí Minh</option>
							</select>
						</div>
						<div class="col-sm-4">
							<input name="dateDi" id="dateDi" class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="Destination1" id="Destination1" class="form-control">
								<option value="HAN">Hà Nội</option>
							</select>
						</div>
						<div class="col-sm-4">
							<input name="dateVe" id="dateVe" class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>"/>
						</div>
					</div>
					<hr class="alert-info" />
					<div class="form-group">
						<div class="col-sm-4">
							Người lớn
							<select name="nguoiLon" id="People" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
						<div class="col-sm-4">
							Trẻ nhỏ(2-12)
							<select name="treEm" id="Child" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
						<div class="col-sm-4">
							Sơ sinh(0-2)
							<select name="treSoSinh" id="NewBorn" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div id="append" class="col-sm-12">
							<input type="button" id="submit" value="Tìm Kiếm" class="btn btn-info" />
							<i class="text-success" id="waiting" style="display: none;"><i class="fa fa-refresh fa-spin fa-lg"></i> Đang tải...</i>
						</div>
						<div class="col-sm-12" id="checkDate" style="display: none;">
							<span class="fa-stack"> <i class="fa fa-search fa-stack-1x"></i> <i class="fa fa-ban fa-stack-2x text-danger"></i> </span>
							<strong class="text-danger">Ngày đi phải nhỏ hơn ngày về, Bạn hãy nhập lại!</strong>
						</div>
						<div class="col-sm-12" id="checkDateDiVe" style="display: none;">
							<span class="fa-stack"> <i class="fa fa-search fa-stack-1x"></i> <i class="fa fa-ban fa-stack-2x text-danger"></i> </span>
							<strong class="text-danger">Ngày đi, về không được nhỏ hơn hiện tại, Bạn hãy nhập lại!</strong>
						</div>
					</div>
				</form>
			</div>

			<div class="col-sm-6" style="border-radius: 0px">
				<div id="carousel-slide" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="carousel-slide" data-slide-to="0" class="active"></li>
						<li data-target="carousel-slide" data-slide-to="1"></li>
						<li data-target="carousel-slide" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo URL; ?>public/images/Vietjetair.jpg" alt="VietJetAir" style="width:100%;height: 386px" />
							<div class="carousel-caption">
								<h2><strong>VietJetAir</strong></h2><h4> Tinh Tế, Nhiệt Tình...</h4>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo URL; ?>public/images/Vietnam_Airlines.jpg" alt="VNA" style="width:100%; height: 386px" />
							<div class="carousel-caption">
								<h2><strong>VietNam Airline</strong></h2><h4> An Toàn, Chất Lượng...</h4>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo URL; ?>public/images/Jetstar.jpg" alt="JetStar" style="width:100%; height: 386px" />
							<div class="carousel-caption">
								<h2><strong>JetStar</strong></h2><h4> Hợp Lý, Tận Tình...</h4>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-slide" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-slide" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>