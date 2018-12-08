<?php
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<html>
<body>
Đăng nhập thành công !
</body>
</html>