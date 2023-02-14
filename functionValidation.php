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
            .error{
                color: red;
            }
    </style>
</head>
<body>
    <?php 
    $loaiphongErr = $tienanErr = $checkinErr = $checkoutErr = $traphongErr ="";
    $giatla = $ansang = $tamhoi  = $tienan = $loaiphong = $checkin = $checkout = $ngay = $traphong = $total = $dichvu ="";
    function Validation(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["loaiphong"])){
                $loaiphongErr = "Vui lòng chọn loại phòng";
            }else{
                $loaiphong = $_POST["loaiphong"];
            }
            // if(empty($_POST["checkin"],$_POST["checkout"])){
            //     $checkoutErr = $checkinErr = "Vui lòng điền thông tin";
            //     if(($checkin < $checkout ) && ($checkin not null)){
            //         if($checkin > now()){
            //             echo "Mời bạn nhập lại";
            //         }
            //     }    
            // }else{
            //     $checkin = strtotime($_POST["checkin"]);
            //     $checkout = strtotime($_POST["checkout"]);
            //     $ngay = abs($checkout-$checkin);
            //     $traphong = floor($ngay / (60*60*24));
            // }
        }
    }
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     if (empty($_POST["loaiphong"])) {
    //         $loaiphongErr = "Vui lòng chọn loại phòng";
    //      }
    //      else
    //      {
    //         $loaiphong = test_input($_POST["loaiphong"]);
    //      }
    //      if (empty($_POST["checkin"])){
    //         $checkinErr = "Vui lòng điền đầy đủ";
    //      }
    //      else 
    //      {
    //         $checkin = test_input($_POST["checkin"]);
    //      }
    //      if (empty($_POST["checkout"])){
    //         $checkoutErr = "Vui lòng điền đầy đủ";
    //      }
    //      else 
    //      {
    //         $checkout = test_input($_POST["checkout"]);
    //      }
    //      if (empty($_POST["tienan"])){
    //         $tienanErr = "Bạn muốn quỵt đúng ko ?  ";
    //      }
    //      else 
    //      {
    //         $tienan = test_input($_POST["tienan"]);
    //      }
         
    // }
    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    //  }
    // function validation(){
    //     ini_set("error_reporting", 0);
    //     $giatla = $_POST["giatla"];
    //     $ansang = $_POST["ansang"];
    //     $tamhoi = $_POST["tamhoi"];
    //     $tienan = $_POST["tienan"];
    //     $loaiphong = $_POST["loaiphong"];
    //     $checkin = strtotime($_POST["checkin"]);
    //     $checkout = strtotime($_POST["checkout"]);
    //     $ngay = abs($checkout-$checkin);
    //     $traphong = floor($ngay / (60*60*24));
    //     $dichvu = $giatla + $ansang + $tamhoi;
    //     $total = $tienan+ $dichvu+ $loaiphong  + $traphong;

    //     if ($_POST["loaiphong"]){
    //         if($_POST["A"]){
    //             echo "600";
    //         }elseif ($_POST["B"]){
    //             echo "500";
    //         }elseif ($_POST["C"]){
    //             echo "300";
    //         }
    //     }
    //     if ($checkin < $checkout ) && ($checkin not null){
    //        if($checkin > now()){
    //         echo "Mời bạn nhập lại";
    //        }
    //     }
    //     if ($tienan < 0 && $tienan null){
    //             echo "Vui lòng nhập lại số tiền để thanh toán";
    //         }
    //     else{
    //         $tienan = $_POST["tienan"];
    //     }
    // }
   
    ?>
    <p><span class="error">* các trường bắt buộc.</span></p>
    <form id= "forml" name = "forml" method="post"><?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>
    <table width = "400" border="0" align ="center" class="table" cellpadding="2" cellspacing="2">
            <tr class="row">
                <td colspan="3" align="center"><span class="stylel">TÍNH TIỀN</span></td>
            </tr>
            <tr>
                <td><span class="atyle4">Loại phòng: </span></td>
                <td><label for="">
                    <select name="loaiphong">
                        <option value="">Chọn phòng</option>
                        <option value="600" name="A">A</option>
                        <option value="500" name="B">B</option>
                        <option value="300" name="C">C</option>
                    </select> 
                    <span class="error">*<br/><?php echo  $loaiphongErr  ?></span>
                </label></td>
            </tr>
            <tr>
                <td><span class="atyle4">Check in: </span></td>
                <label>
                    <td><input type="datetime-local" name="checkin">
                        <span class="error">*<br/><?php echo   $checkinErr  ?></span>
                    </td>
                   
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Check out: </span></td>
                <label>
                    <td><input type="datetime-local" name="checkout">
                        <span class="error">*<br/> <?php echo   $checkoutErr  ?></span>
                    </td>
                </label>
            </tr>
            <tr>
                <td> <span class="style4">Tiền ăn: </span></td>
                <label>
                     <td><input type="text" name="tienan" >
                        <span class="error">* <br/><?php echo   $tienanErr   ?></span>
                    </td>
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
                <td><span class="atyle4">Typeroom: </span>
                    &emsp;  &emsp;  &emsp;  &emsp;  &emsp; &nbsp;
                    <?php echo $loaiphong ?>
                </td>
            </tr>
            <tr>
                <td><span class="atyle4">Rental House: </span>
                     &emsp;  &emsp;  &emsp;  &emsp;  &emsp; &nbsp;
                    <?php echo $traphong ?>
                </td>
              
                
            </tr>
            <tr>
                <td> <span class="style4">Money for meal: </span>
                     &emsp;  &emsp;  &emsp;  &nbsp;   &nbsp;
                    <?php echo $tienan ?>
                </td> 
            </tr>
            <tr>
                <td> <span class="style4">Money for services: </span>
                     &emsp;  &emsp;  &emsp;  &emsp;  &emsp; &nbsp;
                    <?php echo $dichvu ?>
                </td>
            </tr>
            <tr>
                <td> <span class="style4">Total: </span>
                    &emsp;  &emsp;  &emsp;  &emsp;  &emsp; &nbsp;
                     <?php echo $total ?>
               </td>
               
        </table> 
    </form>

</body>
</html>