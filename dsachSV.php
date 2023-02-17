<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>

    </Style>
</head>
<body>
    <?php 
        $SV = array(
            'Danh sách sinh viên' => array(
                'SV01' => array (
                    'Họ tên' => 'Hồ Thị Kiều',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Trị'
                ),
                'SV02' => array (
                    'Họ tên' => 'Đặng Minh Quân',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Nam'
                ),
                'SV03' => array (
                    'Họ tên' => 'Phan Thị Thu Hương',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Bình'
                ),
                'SV04' => array (
                    'Họ tên' => 'Y Múa',
                    'Ngày sinh' => '17/09/2003',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Kon Tum'
                ),
                'SV05' => array (
                    'Họ tên' => 'Đinh Ngọc Sơn',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Trị'
                ),
                'SV06' => array (
                    'Họ tên' => 'Đặng Mùi Nái',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Nam'
                ),
                'SV07' => array (
                    'Họ tên' => 'PNguyễn Thị Út Viên',
                    'Ngày sinh' => '10/11/1998',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Quãng Bình'
                ),
                'SV08' => array (
                    'Họ tên' => 'Hồ Thị Thu Trân',
                    'Ngày sinh' => '17/09/2003',
                    'Lớp'=> 'PNV24A',
                    'Quê quán' => 'Kon Tum'
                )

            )  )
        
    ?>
    <div id="content">
        <?php 
            foreach ($SV as $k => $v){
                ?>
                <h1 align="center" class="list_title"><?php echo $k; ?></h1>
                <table border="1" align="center" class="list_SinhVien">
                    <tr>
                        <th>MaSV</th>
                        <th>Họ Tên</th>
                        <th>Ngày sinh</th>
                        <th>Lớp</th>
                        <th>Quê quán</th>
                    </tr>
                    <?php foreach ($v as $k1 => $v1){   
                        ?>
                        <tr>
                            <td><?php echo $k1; ?></td>
                            <td><?php echo $v1['Họ tên'] ?></td>
                            <td><?php echo $v1['Ngày sinh'] ?></td>
                            <td><?php echo $v1['Lớp'] ?></td>
                            <td><?php echo $v1['Quê quán'] ?></td>
                            <td><button>Xóa</button></td>
                    </tr>
                    <?php   }
                    ?>

                </table>
                <?php 
            }
            ?>
       
    </div>
    <?php 
        var_dump($SV);  
        unset($SV[3]);  
        $SV = array_values($SV);  
        echo '';  
        var_dump($SV); 
    ?>

</body>
</html>