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
            		<td><a href="?del=<?php echo $row[3] ?>"><i class="fa fa-trash"></i>Xóa</a></td>
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
<?php include 'layout/footer.php' ?>