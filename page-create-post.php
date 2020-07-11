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
			<input type="text" class="form-control" name="NameSubject" placeholder="Tên môn học" >
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="Link" placeholder="Link bài thi">
		</div>
		<div class="input-group-btn">
			<input class="btn btn-danger" type="submit" name="add" value="Thêm">
		</div>
		</form>
		<?php 
		$connection = mysqli_connect("localhost", "root", "", "web-final-project");
		mysqli_set_charset($connection,"utf8");
		
		if(isset($_POST['add']))
		{
			$NameExam = $_POST['NameExam'];
			$Link = $_POST['Link'];
			$Name = $_POST['NameSubject'];

			$sql = "SELECT s.IdSubject AS Id FROM exam e 
									INNER JOIN subject s ON e.IdSubject = s.IdSubject
									WHERE s.NameSubject = '$Name'
									GROUP BY s.IdSubject"; 
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
		?>
		<br/>        
      </div>
    </div>

   <?php include 'layout/footer.php' ?>