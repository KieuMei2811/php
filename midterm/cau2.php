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
    <title>Câu 2 Đề B</title>
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



<?php 
        $SP = array(
            'GIÀY DÉP' => array (
                array (
                    'img' => '<img src = "https://cf.shopee.vn/file/dc2b33b8976d02f8d25c6fc19b0a957a" />',
                    'name' => 'San dai nữ cao gót hàn Quốc',
                    'code' => 'G01D',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://bizweb.dktcdn.net/thumb/1024x1024/100/403/511/products/o1cn01jxpczq1ld7rvsggdw0itempi.jpg?v=1620140298187"/>',
                    'name' => 'Giày San da đế xuông 7cm 10790-2B-Đẹp',
                    'code' => 'GX1K',
                    'price' => '3.990.000'
                ),
                array(
                    'img' => '<img src = "https://bizweb.dktcdn.net/thumb/large/100/443/506/products/img-0687.jpg?v=1652847760000"/>',
                    'name' => 'Giày cao gót bịt mũi Tam Mi',
                    'code' => 'GD01K',
                    'price' => '5.690.000'
                )

            ),
            'TÚI SÁCH' => array (
                array (
                    'img' => '<img src = "https://img.websosanh.vn/v2/users/review/images/n2mgu6py0cu25.jpg?compress=85"/>',
                    'name' => 'Túi sách nữ thời trang POKETO',
                    'code' => 'SP-2A1-Da',
                    'price' => '160.000'
                ),
                array(
                    'img' => '<img src = "https://cdn.sablanca.vn/ImageProducts/hb0109/bei/hb0109_bei_1000x1000_4435593461.jpg"/>',
                    'name' => 'Sale hót túi sách nữ da cao cấp ',
                    'code' => 'SP-2A1-Đen',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://cf.shopee.vn/file/96c72648622b1523ac570f58a54040d7"/>',
                    'name' => 'Sale hot túi sách nữ đa cao cấp ',
                    'code' => 'SD02K',
                    'price' => '280.000'
                )

            )   
        )
    ?>

    
    <?php 
        foreach ( $SP as $k => $v){

        rsort( $SP );
            ?>
        
        <div class="container"> <br/> <br/>
            <div class="list_title">*<?php echo $k; ?>*</div>
            <div class="row">
                <?php foreach ($v as $k1 => $v1) {
                    ?>
                    <div class="col-3">
                        <p class="card-img"><?php echo $v1['img'] ?></p>
                        <p class="card-name"></p><?php echo $v1['name'] ?>
                        <p class="card-code"></p><?php echo $v1['code'] ?>
                        <p class="card-price"> <div class="price"><?php echo $v1['price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                        <form method="post" action="">
                            <input class="card-order" onclick="return confirm('Thank you for your order');" type="submit" value="Đặt mua"/>
                        </form>
                
                    </div>
                <?php   
                }
                ?>
            </div>

        </div>

        <?php 
        }
    ?>
</body>
<br><br>
</html>