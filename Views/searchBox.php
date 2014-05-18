<script type="text/javascript">
	$(document).ready(function() {
		$.ajax({
			url : "<?php echo URL; ?>chonchuyenbay/fillComboBox1",
			success : function(data) {
				console.log('Success ' + data);
				$("#Origin1").append(data);
				$("#Origin1 option[value='HAN']").css('display','none');
			}
		});
		$.ajax({
			url : "<?php echo URL; ?>chonchuyenbay/fillComboBox2",
			success : function(data) {
				console.log('Success ' + data);
				$("#Destination1").append(data);
				$("#Destination1 option[value='SGN']").css('display','none');
			}
		});
		$("#Origin1").change(function(e){
			index = $(this).prop("selectedIndex");
			$("#Destination1 option:eq("+index+")").css('display','none').siblings().css('display','block');
		});
		$("#Destination1").change(function(e){
			index = $(this).prop("selectedIndex");
			$("#Origin1 option:eq("+index+")").css('display','none').siblings().css('display','block');
		});
	});
	$(document).on('click', '#submit', function() {
		d = new Date($("#dateDi").val());
		date = d.getDate();
		month = d.getMonth();
		year = d.getFullYear();
		time1 = date + "/" + parseInt(month + 1) + "/" + year;
		// alert(time1);
		d = new Date($("#dateVe").val());
		date = d.getDate();
		month = d.getMonth();
		year = d.getFullYear();
		time2 = date + "/" + parseInt(month + 1) + "/" + year;
		// alert(time1+time2);
		var data = "url=http://vietjetair-nduc1888.rhcloud.com/ajax_VNairlines.php&RoundTrip=" + 
		$("input[name=loaiVe]:checked").val() + "&Origin1=" + 
		$("#Origin1").val() + "&Destination1=" + 
		$("#Destination1").val() + "&_time1=" + time1 + "&_time2=" + time2 + "&traveler=" + 
		$("#People").val() + "&baby=" + $("#Child").val() + "&newborn=" + $("#NewBorn").val();
		// alert(data);
		$("#waiting").fadeIn();
		$()
		$.ajax({
			url : "<?php echo URL; ?>chonchuyenbay/proxy",
			data : data,
			type : "POST",
			success : function(data, textStatus, jqXHR) {
				console.log('Success ' + data);
				// $("#result").html(data);
				$("#storeJson").val(data);
				$("#oriName").val($("#Origin1 option:selected").text());
				$("#desName").val($("#Destination1 option:selected").text());
				$("#ori").val($("#Origin1 option:selected").val());
				$("#des").val($("#Destination1 option:selected").val());
				$("#dateGo").val(time1);
				$("#dateBack").val(time2);
				$("#adult").val($("#People").val());
				$("#kid").val($("#Child").val());
				$("#baby").val($("#NewBorn").val());
				$("#loaiVe").val($("input[name=loaiVe]:checked").val());
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
	<form id="formJson" method="post" action="<?php echo URL; ?>chonchuyenbay/getSession" style="display: none">
		<input type="hidden" value="" name="jsonFile" id="storeJson" />
		<input type="hidden" value="" name="oriName" id="oriName" />
		<input type="hidden" value="" name="desName" id="desName" />
		<input type="hidden" value="" name="ori" id="ori" />
		<input type="hidden" value="" name="des" id="des" />
		<input type="hidden" value="" name="dateGo" id="dateGo" />
		<input type="hidden" value="" name="dateBack" id="dateBack" />
		<input type="hidden" value="" name="adult" id="adult" />
		<input type="hidden" value="" name="kid" id="kid" />
		<input type="hidden" value="" name="baby" id="baby" />
		<input type="hidden" value="" name="ticketType" id="loaiVe" />
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
						<h3 class="col-sm-12 text-info">
							<strong>
								<span class="fa-stack fa">
								<i class="fa fa-ticket fa-stack-2x text-orange"></i>
								<i class="fa fa-search fa-stack-1x"></i>
								</span> Tìm Giá Vé Rẻ Tại Đây 
								<img style="width: 60px; height: 40px" src="<?php echo URL; ?>public/images/paper-plane.png" class="img-circle"/> 
							</strong>
						</h3>
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

							</select>
						</div>
						<div class="col-sm-4">
							<input name="dateDi" id="dateDi" class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>"/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="Destination1" id="Destination1" class="form-control">

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
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
							</select>
						</div>
						<div class="col-sm-4">
							Trẻ nhỏ(2-12)
							<select name="treEm" id="Child" class="form-control">
								<option value="0" selected="selected" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
							</select>
						</div>
						<div class="col-sm-4">
							Sơ sinh(0-2)
							<select name="treSoSinh" id="NewBorn" class="form-control">
								<option value="0" selected="selected" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
								<option value="10" >10</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div id="append" class="col-sm-12">
							<input type="button" id="submit" value="Tìm Kiếm" class="btn btn-info btn" />
							<i class="text-success" id="waiting" style="display: none;"> <i class="fa fa-refresh fa-spin fa-lg"></i> Đang tải vui lòng chờ...</i>
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
							<img src="<?php echo URL; ?>public/images/Vietjetair.jpg" alt="VietJetAir" style="width:100%;height: 406px" />
							<div class="carousel-caption">
								<h2><strong>VietJetAir</strong></h2><h4> Tinh Tế, Nhiệt Tình...</h4>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo URL; ?>public/images/Vietnam_Airlines.jpg" alt="VNA" style="width:100%; height: 406px" />
							<div class="carousel-caption">
								<h2><strong>VietNam Airline</strong></h2><h4> An Toàn, Chất Lượng...</h4>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo URL; ?>public/images/Jetstar.jpg" alt="JetStar" style="width:100%; height: 406px" />
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