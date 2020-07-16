<?php include 'layout/header.php' ?>


<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-play bg-blue"></i> Videos học tập <small class="hidden-xs-down hidden-sm-down">Ở đây có Videos học tập</small></h2>
            </div>
            <!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Videos học tập</li>
                </ol>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page-title -->

<?php
if(isset($_SESSION['admin'])){
    $connection = mysqli_connect("localhost", "root", "", "web-final-project");
    mysqli_set_charset($connection,"utf8");

    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 2;
    $start = ($current_page - 1) * $limit;
    $limitn = $start + $limit;

    $sql = "SELECT * FROM video LIMIT $start,$limitn;" ;
    $result = mysqli_query($connection, $sql);
    ?>
    

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="page-wrapper">
                        <div class="blog-video-system">
                            <div class="row">
                                <?php while ($row=mysqli_fetch_row($result)) : ?>
                                    <div class="col-md-12">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe width="560" height="315" src="<?php echo $row[2] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <h4><?php echo $row[1] ?></h4>
                                                <p><?php echo $row[3] ?></p>
                                                <small><a href="page-video.php" title="">Videos học tập</a></small>
                                                <small><a href="#" title="">01/05/2020</a></small>
                                                <small><a href="page-about-us.php" title="">Ecautopass Team</a></small>
                                            </div>
                                            <!-- end meta -->
                                        </div>
                                        <!-- end blog-box -->
                                    </div>
                                <?php endwhile;
                                mysqli_close($connection); ?>
                            </div>
                            <!-- end row -->

                            <hr class="invis3">

                        </div>
                        <!-- end blog-grid-system -->
                    </div>
                    <!-- end page-wrapper -->

                    <hr class="invis3">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <?php
                                    $connection = mysqli_connect("localhost", "root", "", "web-final-project");
                                    mysqli_set_charset($connection,"utf8");
                                    $sql = "SELECT count(IdVideo) AS total FROM video ";
                                    $resulttotal =  mysqli_query($connection, $sql);
                                    $row = mysqli_fetch_assoc($resulttotal);
                                    
                                    $totalrecords = $row['total'];

                                    //find limit and current page
                                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

                                    $limit = 2;

                                    //find total page and start
                                    $total_page = ceil($totalrecords / $limit);
                                    if ($current_page > $total_page)
                                    {
                                        $current_page = $total_page;
                                    }
                                    else if ($current_page < 1)
                                    {
                                        $current_page = 1;
                                    }

                                    $start = ($current_page - 1) * $limit;
                                    if ($current_page > 1 && $total_page > 1)
                                    {
                                        echo '<li class="page-item"><a class="page-link" href="./page-video.php?page='.($current_page-1).'">Trước</a></li>';
                                    }
                                    for ($i = 1; $i <= $total_page; $i++)
                                    {
                                        if ($i == $current_page)
                                        {
                                            echo '<li class="page-item"><a class="page-link" href="">'.$i.'</a></li>';
                                        }
                                        else
                                        {
                                            echo '<li class="page-item"><a class="page-link" href="./page-video.php?page='.$i.'">'.$i.'</a></li>';
                                        }
                                    }
                                    if ($current_page < $total_page && $total_page > 1){
                                        echo '<li class="page-item"><a class="page-link" href="./page-video.php?page='.($current_page+1).'">Tiếp theo</a></li>';
                                    }
                                }
                                else
                                {
                                    echo '<script>window.location.replace("login/login.php")</script>';
                                }
                                ?>              
                            </ul>
                        </nav>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<?php include 'layout/footer.php' ?>