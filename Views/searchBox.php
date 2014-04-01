<div class="row">
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-6 text-center" style="">
				<form class="form-horizontal" action="">
					<div class="form-group">
						<h3 class="col-sm-12 text-info"><strong> Tìm Giá Vé Tại Đây </strong></h3>
					</div>
					<hr class="alert-info" />
					<div class="form-group">
						<div class="col-md-12">
							<div class="radio-inline">
								<label>
									<input type="radio" name="loaiVe" value="1" checked="checked"/>
									Khứ Hồi </label>

							</div>
							<div class="radio-inline">
								<label>
									<input type="radio" name="loaiVe" value="0" />
									Một Chiều </label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="origin" class="form-control">
								<option value="HoChiMinh">Hồ Chí Minh</option>
							</select>
						</div>
						<div class="col-sm-4">
							<input name="dateDi" class="form-control" type="datetime-local" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-8">
							<select name="destination" class="form-control">
								<option value="HaNoi">Hà Nội</option>
							</select>
						</div>
						<div class="col-sm-4">
							<input name="dateVe" class="form-control" type="datetime-local" />
						</div>
					</div>
					<hr class="alert-info" />
					<div class="form-group">
						<div class="col-sm-4">
							Người lớn
							<select name="nguoiLon" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
						<div class="col-sm-4">
							Trẻ nhỏ(2-12)
							<select name="treEm" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
						<div class="col-sm-4">
							Sơ sinh(0-2)
							<select name="treSoSinh" class="form-control">
								<option value="1" >1</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="submit" value="Tìm Kiếm" class="btn btn-info" />
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
							<img src="public/images/Vietjetair.jpg" alt="VietJetAir" style="width:100%;height: 386px" />
							<div class="carousel-caption">
								<h2><strong>VietJetAir</strong></h2><h4> Tinh Tế, Nhiệt Tình...</h4>
							</div>
						</div>
						<div class="item">
							<img src="public/images/Vietnam_Airlines.jpg" alt="VNA" style="width:100%; height: 386px" />
							<div class="carousel-caption">
								<h2><strong>VietNam Airline</strong></h2><h4> An Toàn, Chất Lượng...</h4>
							</div>
						</div>
						<div class="item">
							<img src="public/images/Jetstar.jpg" alt="JetStar" style="width:100%; height: 386px" />
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