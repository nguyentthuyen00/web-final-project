<?php include('postLogin.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login.css" />
    <!--===============================================================================================-->
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" class="login100-form validate-form">
                    <span class="login100-form-title p-b-48">
							<a href="../index.php"
								><img src="logo.svg " alt=" "
							/></a>
						</span>
                    <a style="font-size: 17px;">Tài khoản</a>
                    <div class="wrap-input100 validate-input" data-validate="Điền tài khoản">
                        <input class="input100" type="text" name="username" value="" />
                        <span data-placeholder="Tài khoản "></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Điền mật khẩu">
                        <a style="font-size: 17px;">Mật khẩu</a>
                        <input class="input100" type="password" name="password" value="" />
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button name="submit" class="login100-form-btn">
									<h3 style="font-family: Roboto;">
										ĐĂNG NHẬP
									</h3>
								</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>