<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .stylel{
            background-color:pink;
        }
        table {
            background-color:rgb(162, 222, 162);;
        }
        button{
            
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table align="center">
            <tr class="stylel">
                <td colspan="2" align="center">ĐỔI</td>
            </tr>
            <tr>
                <td>Kilomitores:</td>
                <label>
                    <td><input type="text" name="kilomitores"value="<?php echo $_POST["kilomitores"]  ?>"  ></td>
                    <!-- Lấy giá trị kilomet cho hiển thị lên input -->
                </label> 
            </tr>
            <tr>
               <td>Kq dặm:</td> 
               <label>
                    <td><input type="text" value="<?php echo kilomitores_to_miles($_POST["kilomitores"]) ?>"></td>
                    <!-- Tham trị  -->
                </label> 
            </tr>
            <tr>
                <td><button type="submit">Ok</button></td>
            </tr>
        </table>
    </form>
<?php
   error_reporting(0);
   function kilomitores_to_miles($kilomitores=0){
    $miles_scale = 0.62;
    return $kilomitores * $miles_scale ;
   }

?>
</body>
</html>