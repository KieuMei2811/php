<?php 
/* Associative array(Mảng kết hợp)==> Lưu chỉ số vào giá trị  */
    // $ages = array("Peter"=> 22,
    //               "Clark"=>32,
    //               "John"=>28) ;
//  or
    // $ages ["Peter"] = "22";
    // $ages ["Clark"] = "32";
    // $ages ["John"] = "28";
    // foreach($ages as $key=>$value) {
    //     echo $key." năm nay ".$value. " tuổi "."<br>";
    // }

// Index array(Mảng 1 chiều)==> Xác định 1 chỉ mục mảng
// $php = array("khoai", "sắn", "ngô");
// for($i=0; $i < count($ages); $i++){
//         echo $ages[$i];
//     }
// foreach($array as $key => $value){
//     echo "key là ". $key. " value là ". $value;
// }
// Mảng đa chiều

$student = array(
    array("012234","Ho Thi Kieu"),
    array("098763","Phan Thi Thu Huong"),
    array("012688","Nguyen Ut Vien"),
    array("098123","Ho Thi Bich")
);
$length = count($student); // Lấy chiều dài mảng
for($i = 0; $i < $length; $i++) {
    $length_stud = count($student[0]); // Lấy chiều dài mảng con
    for($j = 0; $j < $length_stud; $j++) {
        echo $student[$i][$j]." ";
    }
    echo '
    <tr>
    <th>STT</th>
    <th>MSV</th>
    <th>TÊN</th>';
    
}
?>
