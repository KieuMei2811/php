<?php setcookie ("user_name", "Guu99", time()+10, '/') ;
 echo 'the cookie has set for 10 seconds'."<br/>";
 // Muốn tái sử dụng lại tên cookie
 echo $_COOKIE['user_name'];
?>