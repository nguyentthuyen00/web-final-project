<?php include 'layout/header.php' ?>


<div class="page-title wb">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php
				$connection = mysqli_connect("localhost", "root", "", "web-final-project");
				mysqli_set_charset($connection,"utf8");

        // Nếu người dùng submit form thì thực hiện
				if (isset($_REQUEST['ok'])) 
				{
            // Gán hàm addslashes để chống sql injection
					$search = addslashes($_GET['search']);

            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
					if (empty($search)) {
						echo "Yeu cau nhap du lieu vao o trong";
					} 
					else
					{
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
						$query = "SELECT * FROM subject s INNER JOIN exam e ON s.IdSubject=e.IdSubject WHERE s.NameSubject LIKE '%$search%'";


                // Thực thi câu truy vấn
						$sql = mysqli_query($connection,$query);

                // Đếm số đong trả về trong sql.
						$num = mysqli_num_rows($sql);

						?>
						<h2><?php if ($num > 0 && $search != "") 
						{
                    // Dùng $num để đếm số dòng trả về.
							echo "$num ket qua tra ve voi tu khoa $search" ?></h2>
						</div>
						<!-- end col -->
					</div>
					<!-- end row -->
				</div>
				<!-- end container -->
			</div>
			<!-- end page-title -->
			<div id="main">		
				<div class="container">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Tên bài thi</th>
								<th scope="col">Tên môn học</th>
								<th scope="col"></th>
							</tr>
							<?php while ($row = mysqli_fetch_assoc($sql)): ?>
								<tr>
									<td><?php echo $row['NameExam'] ?></td>
									<td><?php echo $row['NameSubject'] ?></td>
									<td><span class="ml-2 pointer" d-id=345 data-toggle="tooltip" title="Tải xuống">
										<a href="<?php echo $row['Link'] ?>" target="_blank" ><i style = "font-size: 20px;" class="fa fa-download"></i></a>
									</span></td>
								</tr>
							<?php endwhile ?>
						</thead>
					</table>
				</div>
			</div>
			<?php
		}
		else {
			echo "Khong tim thay ket qua!";
		}
	}
}
?>  
 <hr class="invis">
<div class="row">
	<div class="container">
   	<div class="col-md-12">
   		<nav aria-label="Page navigation">
   			<ul class="pagination justify-content-start">
   				<?php
   				$connection = mysqli_connect("localhost", "root", "", "web-final-project");
   				mysqli_set_charset($connection,"utf8");


   				$sql = "SELECT count(IdExam) AS total FROM subject s INNER JOIN exam e ON s.IdSubject=e.IdSubject WHERE s.NameSubject LIKE '%$search%'";
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
   					echo '<li class="page-item"><a class="page-link" href="./page-search.php?page='.($current_page-1).'">Trước</a></li> ';
   				}
   				for ($i = 1; $i <= $total_page; $i++){
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
   					if ($i == $current_page){
   						echo '<li class="page-item"><span class="page-link">'.$i.'</span></li> ';
   					}
   					else{
   						echo '<li class="page-item"><a class="page-link" href="./page-search.php?page='.$i.'">'.$i.'</a></li> ';
   					}
   				}
   				if ($current_page < $total_page && $total_page > 1){
   					echo '<li class="page-item"><a class="page-link" href="./page-search.php?page='.($current_page+1).'">Tiếp theo</a></li> ';
   				}
   				?>
   			</div>
   			<!-- end col -->
   		</div>
   		</div>
   		<!-- end row -->
 		  	
<?php include 'layout/footer.php' ?>