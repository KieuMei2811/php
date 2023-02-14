<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FORM TÍNH TIỀN</title>

    <style>
            .row{
                background-color: pink;
            }
            .table{
                background-color: rgb(162, 222, 162);
            }
    </style>
</head>
<body>
    <?php 
   ini_set("error_reporting", 0);
    $giatla = $_POST["giatla"];
    $ansang = $_POST["ansang"];
    $tamhoi = $_POST["tamhoi"];
    $tienan = $_POST["tienan"];
    $loaiphong = $_POST["loaiphong"];
    $checkin = strtotime($_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $ngay = abs($checkout-$checkin);
    $traphong = floor($ngay / (60*60*24));
    $dichvu = $giatla + $ansang + $tamhoi;
    $total = $tienan+ $dichvu+ $loaiphong  + $traphong;
     
    if ($_POST["loaiphong"]){
        if($_POST["600"]){
            echo "A";
        }elseif ($_POST["500"]){
            echo "B";
        }elseif ($_POST["300"]){
            echo "C";
        }
    }
    ?>
    <form id= "forml" name = "forml" method="post">
    <table width = "400" border="0" align ="center" class="table" cellpadding="2" cellspacing="2">
            <tr class="row">
                <td colspan="3" align="center"><span class="stylel">TÍNH TIỀN</span></td>
            </tr>
            <tr>
                <td><span class="atyle4">Loại phòng: </span></td>
                <td><label for="">
                    <select name="loaiphong">
                        <option value="600">A</option>
                        <option value="500">B</option>
                        <option value="300">C</option>
                    </select> 
                </label></td>
            </tr>
            <tr>
                <td><span class="atyle4">Check in: </span></td>
                <label>
                    <td><input type="datetime-local" name="checkin"></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Check out: </span></td>
                <label>
                    <td><input type="datetime-local" name="checkout"></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Tiền ăn: </span></td>
                <label>
                     <td><input type="text" name="tienan" ></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Dịch vụ: </span></td>
                <label>
                    <td><Input type="checkbox"name="giatla"value="30">Giặt là </br>
                        <Input type="checkbox"name="ansang"value="100">Ăn sáng </br>
                        <Input type="checkbox"name="tamhoi"value="300">Tắm hơi 
                    </td>
                </label>
            </tr>
            <tr>
                <td colspan="2" >
                    <button type="submit" value="ok">Tính</button>
                    <button type="cancel">cancel</button>
                </td>
            </tr>
        </table> 
    </form>
     <br/>  <br/>
    <form id= "forml" name = "forml" method="post">
    <table width = "400" border="0" align ="center" class="table" cellpadding="2" cellspacing="2">
            <tr class="row">
                <td colspan="3" align="center"><span class="stylel">BILL</span></td>
            </tr>
            <tr>
                <td><span class="atyle4">Typeroom: </span></td>
                <label >
                    <td><input type="text" value="<?php echo $loaiphong ?>"></td>
                </label>
            </tr>
            <tr>
                <td><span class="atyle4">Rental House: </span></td>
                <label>
                    <td><input type="text" value="<?php echo $traphong ?>"></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Money for meal: </span></td>
                <label>
                    <td><input type="text" value="<?php echo $tienan ?>"></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Money for services: </span></td>
                <label>
                    <td><input type="text" value="<?php echo $dichvu ?>"></td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Total: </span></td>
                <label>
                    <td><input type="text" value="<?php echo $total ?>"></td>
                </label>
        </table> 
    </form>

</body>
</html>