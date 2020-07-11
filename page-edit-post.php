   <?php include 'layout/header.php' ?>
	<?php
	$connection = mysqli_connect("localhost", "root", "", "web-final-project");
                mysqli_set_charset($connection,"utf8");
   if(isset($_GET['edit']))
    	{
    		$id = $_GET['edit'];

    		$sql ="SELECT * FROM exam WHERE IdExam=$id";

    		$result = mysqli_query($connection,$sql);

    		$row=mysqli_fetch_row($result);
    	}
    		?>
    		<div id="main">		
			   	<div class="container">
			   		<h2>Đăng bài</h2>
			   		<br/>
			   		<form action="" method="POST">
			   			<div class="form-group">
			   				<input type="text" class="form-control" name="NameExam" value="<?php echo $row[1] ?>">
			   			</div>
			   			<div class="form-group">
			   				<input type="text" class="form-control" name="Link" value="<?php echo $row[2] ?>">
			   			</div>
			   			<div class="input-group-btn">
			   				<input class="btn btn-danger" type="submit" name="editsave" value="Sửa" onclick="return confirm('Bạn có thực sự muốn sửa không?')">
			   			</div>
			   		</form>
			   		<br/>        
			   	</div>
			   </div>
    		<?php
    		if(isset($_POST['editsave']))
    		{
    			$id1 = $_GET['edit'];
    			$NameExam = $_POST['NameExam'];
    			$Link = $_POST['Link'];

    			$sql3 = "UPDATE exam SET NameExam ='$NameExam',Link = '$Link' WHERE IdExam='$id1'";

    			if(mysqli_query($connection,$sql3))
    				{
    					echo "<script>alert('Sửa thành công')</script>";
    					echo '<script>window.location.replace("./page-manage-post.php")</script>';
    				}
    				else 
    				{
    				echo "<script>alert('Sửa thất bại')</script>";
    				}
    		}
   			 ?>

   

   <?php include 'layout/footer.php' ?>