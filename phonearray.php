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
    <title>Show products</title>

    <style>
        /* .card-group{
        grid: 25% 25% 25% 25%;
        display: flex;
        gap: 10px;
        
        } */
        /* .card{
            width: 250px;
            height: 500px;
        } */
        img {
            width: 210px;
            height: 260px;
           

        }
        
        .list_title{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            color:#ffff;
            font-size: 34px;
            background-color:#FF6600;
            border-radius: 50px;
        }
        .price{
            color: red;
        }
        .list_title{
        border-radius: 100px;
        }
    </style>
</head>
<body>
    <?php 
        $product = array(
            'NỔI BẬT NHẤT' => array (
                array (
                    'img' => '<img src = "https://images.ctfassets.net/wcfotm6rrl7u/2ndaxeiL1WI3GQBEzHl3Ri/11249b5fba933a55bb8f842518ec6cae/nokia-110_4G-black-front_back-int.png" />',
                    'name' => 'Nokia black future',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://didongviet.vn/pub/media/catalog/product//h/u/huawei-nova-2i-vang-hinh-anh-didongviet.jpg"/>',
                    'name' => 'Huawei Nova 2i',
                    'price' => '3.990.000'
                ),
                array(
                    'img' => '<img src = "https://cdn.tgdd.vn/Products/Images/42/153953/xiaomi-redmi-note-5-blue-600x600.jpg"/>',
                    'name' => 'Xiaomi Redmi Note 5',
                    'price' => '5.690.000'
                ),
                array(
                    'img' => '<img src = "https://images.ctfassets.net/wcfotm6rrl7u/2ndaxeiL1WI3GQBEzHl3Ri/11249b5fba933a55bb8f842518ec6cae/nokia-110_4G-black-front_back-int.png" />',
                    'name' => 'Nokia black future',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://didongviet.vn/pub/media/catalog/product//h/u/huawei-nova-2i-vang-hinh-anh-didongviet.jpg"/>',
                    'name' => 'Huawei Nova 2i',
                    'price' => '3.990.000'
                )

            ),
            'SẢN PHẨM MỚI' => array (
                array (
                    'img' => '<img src = "https://cdn.tgdd.vn/Products/Images/42/146651/itel-it2123-blue-200-org.png"/>',
                    'name' => 'iTel it2123',
                    'price' => '160.000'
                ),
                array(
                    'img' => '<img src = "https://cdn.tgdd.vn/Products/Images/42/153953/xiaomi-redmi-note-5-blue-600x600.jpg"/>',
                    'name' => 'Xiaomi Redmi Note 5',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://didongthongminh.vn/images/products/anhphu/large/128b707a-0588-4eca-8f4c-18d93ce7b9f0.webp?v=1622783131000"/>',
                    'name' => 'Xiaomi Redmi 5 Plus 4GB',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src = "https://images.ctfassets.net/wcfotm6rrl7u/2ndaxeiL1WI3GQBEzHl3Ri/11249b5fba933a55bb8f842518ec6cae/nokia-110_4G-black-front_back-int.png" />',
                    'name' => 'Nokia black future',
                    'price' => '280.000'
                ),
                array(
                    'img' => '<img src ="https://didongthongminh.vn/images/products/anhphu/large/128b707a-0588-4eca-8f4c-18d93ce7b9f0.webp?v=1622783131000" />',
                    'name' => 'Xiaomi Redmi 5 Plus 4GB',
                    'price' => '280.000'
                )

            )   
                )
    ?>


        <?php 
            foreach ($product as $k => $v){
                rsort($product );
                ?>
                
                <div class="container"> <br/> <br/>
                    <div class="list_title">*<?php echo $k; ?>*</div>
                    <div class="row">
                        <?php foreach ($v as $k1 => $v1)
                        {
                            ?>
                            <div class="col-2">
                                <p class="card-img"><?php echo $v1['img'] ?></p>
                                <p class="card-name"></p><?php echo $v1['name'] ?>
                                <p class="card-price"> <div class="price"><?php echo $v1['price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-icon">
                                    <i class="fa fa-star" style=" color: yellow;"></i>
                                    <i class="fa fa-star" style=" color: yellow;"></i>
                                    <i class="fa fa-star" style=" color: yellow;"></i>
                                    <i class="fa fa-star" style=" color: yellow;"></i>
                                    <i class="fa fa-star" style=" color: yellow;"></i>
                                    <span style="font-size:  10px;">900 đánh giá</span>
                                </p>
                                

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
</html>