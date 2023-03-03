<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Câu 1 Đề B</title>
    <style>
        table{
        background:#CC9999;
        width: 400px;
        height:200px;
        border-radius:15px 15px 15px 15px;
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
        if (!empty($_POST["email"]) && !empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["pass"])) 
        {
            $_SESSION["email"] = $_POST['email'];
            $_SESSION["fname"] = $_POST['fname'];
            $_SESSION["lname"] = $_POST['lname'];
            $_SESSION["pass"] = $_POST['pass'];
        }
    ?>
    <?php 
        function Validation(){
            if(!empty($_POST['submit'])){
                if (empty( $_SESSION["email"])){
                    $errors['email'] = 'Ban chua nhap Email';
                }
                 
                if (empty($_SESSION["fname"])){
                    $errors['fname'] = 'Ban chua nhap frist name';
                }
                 
                if (empty($_SESSION["lname"])){
                    $errors['lname'] = 'Ban chua nhap last name';
                }
                if (empty( $_SESSION["pass"])){
                    $errors['pass'] = 'Ban chua nhap password';
                }

            }
            //  Nếu dữ liệu hợp lệ thì thực hiện thao tác update thông tin
            if (empty($errors)){
                updateStudent($_SESSION["email"], $_SESSION["fname"],  $_SESSION["lname"],  $_SESSION["pass"]);
                header("Location:cau1.php");
            }
        };
              
    
    ?>
   
    <form action="" method="post">
        <table align="center"> <br/>
            <tr class="center"> 
                 <td colspan="2">
                    <p align="center"> FORM SIGN UP</p>
                 </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" name="email" placeholder="Work Emal" value="<?php if(isset($_POST['email'])) echo $_POST["email"]; ?>" size="46" />
                    <?php echo !empty($errors['email']) ? $errors['email'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Frist Name" value="<?php if(isset($_POST['fname'])) echo $_POST["fname"]; ?>">
                    <?php echo !empty($errors['fname']) ? $errors['fname'] : ''; ?>
                </td>
                <td>
                    <input type="text" name="lname" placeholder="Last Name" value="<?php if(isset($_POST['lname'])) echo $_POST["lname"]; ?>">
                    <?php echo !empty($errors['lname']) ? $errors['lname'] : ''; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="pass" name="pass" placeholder="Password" value="<?php if(isset($_POST['pass'])) echo $_POST["pass"]; ?>" size="46" />
                    <?php echo !empty($errors['pass']) ? $errors['pass'] : ''; ?>
                </td>
            </tr>
            <tr class="center">
                <td></td>
                <td colspan="2">
                    <button type="submit" name="submit"  value="<?php if(isset($_POST['submit'])) echo $_POST["submit"]; ?>">Sign Up</button>
                </td>
            </tr>
        </table>
    </form>
    </br>
    <font color="#1E50C4" align="center">
        <?php 
            if(isset($_POST['submit']))
            {
                echo "<table align='center'><tr class='center'><td>";
                echo "<font color='#ffffff'>Thông tin khách hàng </br>";
                echo "<p>Email ".$_SESSION["email"].  "<br>";
                echo "<p>Name:  ".$_SESSION["fname"].$_SESSION["lname"].  "<br>";
                echo "<p>Password:  ".$_SESSION["pass"].  "<br>";
                echo "</td></tr></table>";
            }
        ?>
    </font>
</body>
</html>