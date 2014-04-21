<div class="row">
	<!-- Step by steps -->
	<div class="col-sm-12 well">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-2 alert-info">
				<a href="<?php echo URL;?>index">
					<h5 class="text-center">Tìm kiếm 
						<i class="fa fa-arrow-right"></i>
					</h5>
				</a>
			</div>
			<div class="col-sm-2 alert-danger">
				<a href="#">
					<h5 class="text-center">Chọn chuyến bay
						<i class="fa fa-arrow-right"></i>
					</h5>
				</a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#">
					<h5 class="text-center">Thông tin khách
						<i class="fa fa-arrow-right"></i>
					</h5>
				</a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#">
					<h5 class="text-center">Xác nhận
						<i class="fa fa-arrow-right"></i>
					</h5>
				</a>
			</div>
			<div class="col-sm-2 alert-info">
				<a href="#">
					<h5 class="text-center">Hoàn tất
						<i class="fa fa-arrow-right"></i>
					</h5>
				</a>
			</div>
		</div>
	</div>
	<!-- Booking items -->
	<div class="col-sm-12 well">
		<?php
		foreach ($this->json as $item) {
			echo "</br>
			Tên: " . $item['name'] . 
			" | Loại vé: " . $item['trangthai'] . 
			" | TG bay: " . $item['time1'] . 
			" | Bay đi: " . $item['Origin'] . 
			" | TG bay về: " . $item['time2'] . 
			" | Bay về: " . $item['Destination'] . 
			" | Hạng vé: " . $item['type_journey'] . 
			" | Giá(chưa thuế): " . $item['cost'] . 
			" | Mã chuyến bay: " . $item['codes_flight'] .$item['crypt'] ."</br>";
		}
		?>
	</div>
</div>