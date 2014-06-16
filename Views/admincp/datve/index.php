

<h1 align="center">Danh sách khách hàng đặt vé</h1>

<div class="container" style="margin-top: 50px">

	<!-- Bảng dữ liệu -->
	<div>
		<table class="table table-striped table-bordered table-hover" id="table_datve">
			<thead>
				<tr>	
					<th>
						STT
					</th>
					<th>
						Tên khách hàng
					</th>
					<th>
						Số điện thoại
					</th>
					<th>
						Ngày đi
					</th>
					<th>
						Ngày về
					</th>
					<th>
						Điểm đi
					</th>
					<th>
						Điểm đến
					</th>
					<th>
						Tổng số vé
					</th>
					<th>
						Tổng giá
					</th>
				</tr>
			</thead>
			<tbody id="getList_datVe_all">
				
			</tbody>
		</table>
	</div><!--// Bảng dữ liệu -->
</div>

<script>
jQuery(document).ready(function() {       
   App.init();
   TableAdvanced.init();
});
</script>