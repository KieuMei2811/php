<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $danhSach = array("Cuong", "Nam", "Hoa", "Huong");
   
   $search = $_POST["nhap"];
   if (array_search($search, $danhSach)) {
      $kq = "Tìm thấy ";
   }

   else{
      $kq = "Ko tìm thấy ";
   }

//    array_push($danhSach, "Window");
//    foreach($danhSach as $value)
//    {
//     echo $value. '<br/>'
//    }
   

?> 
<div class="input-group">
	<input type="text" class="form-control" placeholder="Search for..." value="nhap">
      <span class="input-group-btn">
            <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw" value="timkiem"></i>Search</p></button>
      </span>
</div>
<p>Kết quả: <?php echo $search ?></p>
 
</body>
</html>
