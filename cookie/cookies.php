<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Cookie</title>
    <style>
      table{
        background:#CC9999;
        width: 400px;
        height:200px;
      }
      button{
        background:#33CC66;
        border:1px #33CC66 ;
      }
    </style>
</head>
<body>
    <?php 
        session_start();
        $flag = 0;
        if (!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["add"]))
        {
            $inform = $_POST["name"]. " - ". $_POST["mail"]." - ". $_POST["add"];
            setcookie("khach_hang", $inform, time()+3600);
            $flag = 1;
        }
    ?>

    <form action="" method="post">
        <table align="center"> <br/>
            <tr class="center"> 
                 <td colspan="2">
                    <p align="center"> THÔNG TIN ĐĂNG NHẬP</p>
                 </td>
            </tr>
            <tr>
                <td>
                    Họ và tên:
                </td>
                <td>
                    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST["name"]; ?>" size="20" />
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST["mail"]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ:
                </td>
                <td>
                    <input type="text" name="add" value="<?php if(isset($_POST['add'])) echo $_POST["add"]; ?>">
                </td>
            </tr>
            <tr class="center">
                <td></td>
                <td colspan="2">
                    <button type="submit">Xác nhận</button>
                </td>
            </tr>
        </table>
    </form>
    </br>
    <font color="#1E50C4" align="center">
        <?php 
            if($flag==1)
            {
                echo "<table align='center'><tr class='center'><td>";
                echo "<font color='#ffffff'>Thông tin khách hàng: </br>";
                echo $_COOKIE["khach_hang"]. "<br>";
                echo "<a href='cookies_doc.php'>Click here!</a>";
                echo "</td></tr></table>";
            }
        ?>
    </font>
</body>
</html>