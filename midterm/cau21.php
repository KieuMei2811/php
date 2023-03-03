<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    img {
            width: 300px;
            height: 300px;
           
           

        }
        
        .list_title{
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: bold;
            color:#FF9900;
            font-size: 28px;
            border: 1px solid #FFCC99 ;
            width: 980px;

        }
        .price{
            color: red;
        }
        .card-order{
            background:#FF9900;
            border:0px ;
        }
        .col-3{
            border:1px solid #FFCC99 ;
        }
     
    </style>
    
</head>
<body> 
    <br><br>
    <form action="welcome.php" method="post" align="center";>
        Img: <input type="file" name="fileupload" /> <br> <br>
        Name: <input type="text" name="name" /> <br> <br>
        Code: <input type="text" name="code" /> <br> <br>
        Price: <input type="number" name="price" /> <br> <br>
    <button name="submit">Add</button>
    </form>

    <?php
    session_start();
    if(!isset($_SESSION['product'])){
        $_SESSION['product']= array();
    }
    if(isset($_POST['submit'])){
        $img = $_POST['fileupload'];
        $name = $_POST['name'];
        $code = $_POST['code'];
        $price = $_POST['price'];
       

        if (isset($_SESSION['product']) && is_array($_SESSION['product'])){
            $bien = [$img, $name,$code, $price];
            $_SESSION['product'][] = $bien;
            header("location: cau2show.php");
        }
    }
   
?>


</body>
</html>