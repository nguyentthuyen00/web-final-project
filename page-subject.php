   <?php include 'layout/header.php' ?>

        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <?php
                                $connection = mysqli_connect("localhost", "root", "", "web-final-project");
                                mysqli_set_charset($connection,"utf8");
                                $monhoc = "js";
                                if(isset($_GET['subject'])){
                                    $monhoc = $_GET['subject'];
                                }

                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $limit = 2;
                                $start = ($current_page - 1) * $limit;
                                $limitn = $start + $limit;

                                $sql="SELECT s.IdSubject,e.NameExam , e.Link, s.NameSubject 
                                FROM subject s INNER JOIN exam e ON s.IdSubject=e.IdSubject 
                                WHERE s.IdSubject = '$monhoc'
                                LIMIT $start,$limitn;";

                                $result = mysqli_query($connection, $sql);
                                $result1 = mysqli_query($connection, $sql);
                                $row=mysqli_fetch_row($result);
                                ?>
                        <h2><i class="fa fa-book"></i><?php echo $row[3] ?> <small class="hidden-xs-down hidden-sm-down"> Ở đây có tài liệu môn học </small></h2>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="./page-subject?subject=$monhoc"><?php echo $row[3] ?></a></li>
                        </ol>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="page-wrapper">
                            <div class="portfolio row">
                                <?php while ($row=mysqli_fetch_row($result1)): ?> 
                                    <div class="pitem item-w1 item-h1">
                                        <div class="blog-box">
                                            <h3><?php echo "$row[1]" ?></h3>
                                            <span class="ml-2 pointer" d-id=345 data-toggle="tooltip" title="Tải xuống">
                                                <a href="<?php echo "$row[2]" ?>" target="_blank" ><i style = "font-size: 20px;" class="fa fa-download"></i></a>
                                            </span>
                                            <!-- end meta -->

                                        </div>
                                        <!-- end blog-box -->
                                    </div>
                                <?php endwhile;
                                mysqli_close($connection); ?>
                                <!--  end col -->
                            </div>
                            <!-- end portfolio -->
                        </div>
                        <!-- end page-wrapper -->

                        <hr class="invis">

                       <!--  <div class="row">
                           <div class="col-md-12">
                               <nav aria-label="Page navigation">
                                   <ul class="pagination justify-content-start"> -->
                        
                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "web-final-project");
                                mysqli_set_charset($connection,"utf8");
                                $monhoc = "js";
                                if(isset($_GET['subject'])){
                                    $monhoc = $_GET['subject'];
                                }
                    
                    $sql = "SELECT count(IdExam) AS total FROM exam WHERE IdSubject='$monhoc'; ";
                    $resulttotal =  mysqli_query($connection, $sql);
                    $row1 = mysqli_fetch_assoc($resulttotal);
                    
                    $totalrecords = $row1['total'];

                                    //find limit and current page
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $limit = 2;

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
                        echo '<a href="./page-subject.php?subject='.$monhoc.'&page='.($current_page-1).'">Prev</a> | ';
                    }
                    for ($i = 1; $i <= $total_page; $i++){
                                        // Nếu là trang hiện tại thì hiển thị thẻ span
                                        // ngược lại hiển thị thẻ a
                        if ($i == $current_page){
                            echo '<span>'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="./page-subject.php?subject='.$monhoc.'&page='.$i.'">'.$i.'</a> | ';
                        }
                    }
                    if ($current_page < $total_page && $total_page > 1){
                        echo '<a href="./page-subject.php?subject='.$monhoc.'&page='.($current_page+1).'">Next</a> | ';
                    }
                    
                    ?>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>


        <?php include 'layout/footer.php' ?>