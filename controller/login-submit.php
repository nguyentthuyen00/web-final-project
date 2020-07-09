session_start();
if(isset($_POST['submit'])){
    //nếu có sự kiện click vào nút đăng nhập thì xử lý
    
    $user = $_POST['user'];
    //user là tên của input người dùng nhập vào
    
    $pass = $_POST['pass'];
    //pass là mật khẩu của input người dùng nhập vào
    
    if($user== 'admin' && $pass== '123456'){
        echo 'Bạn đã đăng nhập thành công';
        $_SESSION['us'] = $username;
    }else{
        echo 'Đăng nhập thất bại, tài khoản hoặc mật khẩu chưa chính xác.';
    }