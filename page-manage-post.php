   <?php include 'layout/header.php' ?>
   <?php
   $connection = mysqli_connect("localhost", "root", "", "web-final-project");
   mysqli_set_charset($connection,"utf8");
   $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
   $limit = 12;
   $start = ($current_page - 1) * $limit;
   $limitn = $start + $limit;

   $sql="SELECT e.NameExam , e.Link, s.NameSubject,e.IdExam 
   FROM subject s INNER JOIN exam e ON s.IdSubject=e.IdSubject 
   LIMIT $start,$limitn;";

   $result = mysqli_query($connection, $sql);
   $row=mysqli_fetch_row($result);
   ?>
   <div id="main">		
   	<div class="container">
   		<h2>Quản lý đề thi</h2>
   		<a href="page-create-post.php" style="cursor: pointer" class="fa fa-pencil">Tạo mới</a>
   		<table class="table">

   			<thead class="thead-dark">
   				<tr>
   					<th scope="col">Tên bài thi</th>
   					<th scope="col">Tên môn học</th>
   					<th scope="col">Link</th>
   					<th scope="col">Xóa</th>
   					<th scope="col">Sửa</th>
   				</tr>
   				<?php while ($row=mysqli_fetch_row($result)): ?> 
   					<tr>
   						<td><?php echo $row[0] ?></td>
   						<td><?php echo $row[2] ?></td>
   						<td><?php echo $row[1] ?></td>
   						<td><a href="?del=<?php echo $row[3] ?>" onclick="return confirm('Bạn có thực sự muốn sửa không ?')"><i class="fa fa-trash"></i>Xóa</a></td>
   						<td><a href="page-edit-post.php?edit=<?php echo $row[3] ?>"><i class="fa fa-edit"></i>Sửa</a></td>
   					</tr>
   				<?php endwhile ?>
   				<?php
   				if(isset($_GET['del']))
   				{
   					$id = $_GET['del'];

   					$sql1="DELETE  FROM exam WHERE IdExam='$id'";
   					if(mysqli_query($connection,$sql1))
   					{
   						echo "<script>alert('Xóa thành công')</script>";
   						echo '<script>window.location.replace("./page-manage-post.php")</script>';
   					}
   					else {
   						echo "<script>alert('Xóa thất bại')</script>";
   					}

   				}

   				?>
   			</thead>
   		</table>
   	</div>

   	<br/>        
   </div>
   <div class="row">
   	<div class="col-md-12">
   		<nav aria-label="Page navigation">
   			<ul class="pagination justify-content-start">

   				<?php
   				$connection = mysqli_connect("localhost", "root", "", "web-final-project");
   				mysqli_set_charset($connection,"utf8");


   				$sql = "SELECT count(IdExam) AS total FROM exam ; ";
   				$resulttotal =  mysqli_query($connection, $sql);
   				$row1 = mysqli_fetch_assoc($resulttotal);

   				$totalrecords = $row1['total'];

                                    //find limit and current page
   				$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
   				$limit = 5;

                                    //find total page and start
   				$total_page = ceil($totalrecords / $limit);
   				if ($current_page > $total_page){
   					$current_page = $total_page;
   				}
   				else if ($current_page < 1){
   					$current_page = 1;
   				}

   				$start = ($current_page - 1) * $limit;



                                    //display page split
   				if ($current_page > 1 && $total_page > 1){
   					echo '<li class="page-item"><a class="page-link" href="./page-manage-post.php?page='.($current_page-1).'">Trước</a></li> ';
   				}
   				for ($i = 1; $i <= $total_page; $i++){
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
   					if ($i == $current_page){
   						echo '<li class="page-item"><span class="page-link">'.$i.'</span></li> ';
   					}
   					else{
   						echo '<li class="page-item"><a class="page-link" href="./page-manage-post.php?page='.$i.'">'.$i.'</a></li> ';
   					}
   				}
   				if ($current_page < $total_page && $total_page > 1){
   					echo '<li class="page-item"><a class="page-link" href="./page-manage-post.php?page='.($current_page+1).'">Tiếp theo</a></li> ';
   				}

   				?>
   			</div>
   			<!-- end col -->
   		</div>
   		<!-- end row -->
   		<?php include 'layout/footer.php' ?>