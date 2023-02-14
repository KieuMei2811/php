<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <style>
        .list_title{
            color:red;
           
        }
        th{
            background:#CCCCFF;
        }
        td{
            background:#669966;
        }
    </style>
</head>
<body>
    <?php 
        $schools = array(
            'Student' => array (
                'SV01' => array (
                    'name' => 'Phan Văn Cường',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'Ho Thi Kieu',
                    'birth' => '28/11/2003',
                    'gender' => 'Nữ'
                ),
                'SV03' => array(
                    'name' => 'Phan Thi Thu Huong',
                    'birth' => '05/09/2003',
                    'gender' => 'Nữ'
                ),
                'SV04' => array(
                    'name' => 'Ho Thi Tai',
                    'birth' => '02/02/2003',
                    'gender' => 'Nữ'
                )

            ),
            'Teacher' => array (
                'SV01' => array (
                    'name' => 'Tran Van Khoa',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'Tran Hong Tien',
                    'birth' => '28/11/2003',
                    'gender' => 'Nữ'
                ),
                'SV03' => array(
                    'name' => 'Tran Thi Kieu Chi',
                    'birth' => '05/09/2003',
                    'gender' => 'Nữ'
                ),
                'SV04' => array(
                    'name' => 'Nguyen Thi Phuong Thao',
                    'birth' => '02/02/2003',
                    'gender' => 'Nữ'
                )

            )   
        )
    ?>
    <div id="content">
        <?php 
            foreach ($schools as $k => $v){
                ?>
                <h1 align="center" class="list_title"><?php echo $k; ?></h1>
                <table border="1" align="center" class="list_schools">
                    <tr>
                        <th>MaSV</th>
                        <th>Tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                    </tr>
                    <?php foreach ($v as $k1 => $v1){
                        ?>
                        <tr>
                            <td><?php echo $k1; ?></td>
                            <td><?php echo $v1['name'] ?></td>
                            <td><?php echo $v1['birth'] ?></td>
                            <td><?php echo $v1['gender'] ?></td>
                    </tr>
                    <?php   }
                    ?>

                </table>
                <?php 
            }
            ?>
       
    </div>
</body>
</html>