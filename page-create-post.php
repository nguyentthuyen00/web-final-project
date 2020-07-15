   <?php include 'layout/header.php' ?>
   <div id="main">		
   	<div class="container">
   		<h2>Đăng bài</h2>
   		<br/>
   		<form action="" method="POST">
   			<div class="form-group">
   				<input type="text" class="form-control" name="NameExam" placeholder="Tên bài thi">
   			</div>
   			<div class="form-group">		
   				<select name="NameSubject" id="NameSubject" class="form-control">
   					<optgroup label="Lý luận chính trị">
   						<option value="Những nguyên lý cơ bản của chủ nghĩa Mac Lenin">Những nguyên lý cơ bản của chủ nghĩa Mac-Lenin</option>
   						<option value="Đường lối cách mạng của Đảng CSVN">Đường lối cách mạng của Đảng CSVN</option>
   						<option value="Tư tưởng Hồ Chí Minh">Tư tưởng Hồ Chí Minh</option>
   					</optgroup>
   					<optgroup label="Toán - Khoa Học Tự Nhiên">
   						<option value="Giải tích">Giải tích</option>
   						<option value="Đại số tuyến tính">Đại số tuyến tính</option>
   						<option value="Cấu trúc rời rạc">Cấu trúc rời rạc</option>
   						<option value="Xác suất thống kê">Xác suất thống kê</option>
   					</optgroup>
   					<optgroup label="Môn học khác">
   						<option value="Kỹ năng nghề nghiệp">Kỹ năng nghề nghiệp</option>
   						<option value="Pháp luật đại cương">Pháp luật đại cương</option>
   					</optgroup>
   					<optgroup label="Cơ sở nhóm ngành">
   						<option value="Nhập Môn Lập Trình">Nhập Môn Lập Trình</option>
   						<option value="Lập Trình Hướng Đối Tượng">Lập Trình Hướng Đối Tượng</option>
   						<option value="Cấu Trúc Dữ Liệu Và Giải Thuật">Cấu Trúc Dữ Liệu Và Giải Thuật</option>
   						<option value="Cơ Sở Dữ Liệu">Cơ Sở Dữ Liệu</option>
   						<option value="Nhập Môn Mạng Máy Tính">Nhập Môn Mạng Máy Tính</option>
   						<option value="Giới Thiệu Ngành">Giới Thiệu Ngành</option>
   					</optgroup>
   					<optgroup label="Cơ sở ngành">
   						<option value="Kinh Tế Học Đại Cương">Kinh Tế Học Đại Cương</option>
   						<option value="Tiếp Thị Căn Bản">Tiếp Thị Căn Bản</option>
   						<option value="Phân Tích Thiết Kế Quy Trình Nghiệp Vụ Doanh Nghiệp">Phân Tích Thiết Kế Quy Trình Nghiệp Vụ Doanh Nghiệp</option>
   						<option value="Quản Trị Dự Án TMĐT">Quản Trị Dự Án TMĐT</option>
   						<option value="Thương Mại Điện Tử">Thương Mại Điện Tử</option>
   						<option value="Phát Triển Ứng Dụng Web">Phát Triển Ứng Dụng Web</option>
   						<option value="Khai Thác Dữ Liệu">Khai Thác Dữ Liệu</option>
   					</optgroup>
   					<optgroup label="Chuyên nhành bắt buộc">
   						<option value="Tiếp Thị Trực Tuyến">Tiếp Thị Trực Tuyến</option>
   						<option value="Thiết Kế Hệ Thống TMĐT">Thiết Kế Hệ Thống TMĐT</option>
   						<option value="Quản Trị Quan Hệ Khách Hàng Và Nhà Cung Cấp">Quản Trị Quan Hệ Khách Hàng Và Nhà Cung Cấp</option>
   						<option value="Hệ Thống Thanh Toán Trực Tuyến">Hệ Thống Thanh Toán Trực Tuyến</option>
   						<option value="Hệ Hỗ Trợ Ra Quyết Định">Hệ Hỗ Trợ Ra Quyết Định</option>
   						<option value="Pháp Luật Trong TMĐT">Pháp Luật Trong TMĐT</option>
   						<option value="An Toàn Và Bảo Mật TMĐT">An Toàn Và Bảo Mật TMĐT</option>
   					</optgroup>
   					<optgroup label="Chuyên ngành tự chọn">
   						<option value="Nguyên Lý Kế Toán">Nguyên Lý Kế Toán</option>
   						<option value="Mạng Xã Hội">Mạng Xã Hội</option>
   						<option value="Hoạch Định Nguồn Lực Doanh Nghiệp">Hoạch Định Nguồn Lực Doanh Nghiệp</option>
   						<option value="Quản Trị Bán Hàng">Quản Trị Bán Hàng</option>
   						<option value="Quản Trị Nhân Lực">Quản Trị Nhân Lực</option>
   					</optgroup>

   				</select>
   			</div>
   			<div class="form-group">
   				<input type="text" class="form-control" name="Link" placeholder="Link bài thi">
   			</div>
   			<div class="input-group-btn">
   				<input class="btn btn-danger" type="submit" name="add" value="Thêm" onclick="return confirm('Bạn có thực sự muốn thêm không ?')">
   			</div>
   		</form>
   		<?php 
   		if(isset($_SESSION['admin'])){
   			$connection = mysqli_connect("localhost", "root", "", "web-final-project");
   			mysqli_set_charset($connection,"utf8");

   			if(isset($_POST['add']))
   			{
   				$NameExam = $_POST['NameExam'];
   				$Link = $_POST['Link'];
   				$Name = $_POST['NameSubject'];

   				$sql = "SELECT IdSubject AS Id
   				FROM subject 		
   				WHERE NameSubject = '$Name'
   				GROUP BY IdSubject"; 
   				$result = mysqli_query($connection,$sql);
   				$Row = mysqli_fetch_assoc($result);


   				if(isset($Row['Id']))
   				{
   					$IdSubject=$Row['Id'];
   					$sql1 = "INSERT INTO exam(NameExam,Link,IdSubject) VALUES('$NameExam','$Link','$IdSubject')";
   					if(mysqli_query($connection,$sql1))
   					{
   						echo "<script>alert('Thành công')</script>";
   						echo '<script>window.location.replace("./page-manage-post.php")</script>';
   					}
   					else
   					{
   						echo "<script>alert('Lỗi')</script>";
   					}
   				}
   				else
   				{
   					echo "<script>alert('Nhập sai tên môn học')</script>";
   				}	 
   			}
   		}
   		else
   		{
   			echo '<script>window.location.replace("login/login.php")</script>';
   		}
   		?>
   		<br/>        
   	</div>
   </div>

   <?php include 'layout/footer.php' ?>