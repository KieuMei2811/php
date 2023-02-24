<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <title>Cookies_doc</title>
    <style>
        .photo {
            width: 500px;
            height: 300px;
        }

        i {
            color: blue;
        }
        .title{
            position:relative;
            right:600px;
            
        }
       
       

       
    </style>
</head>

<body>
    <table>
        <tr >
            <th>
                <img class='photo'
                    src='https://luatduonggia.vn/wp-content/uploads/2022/11/ong-gia-noel-la-ai-dieu-thu-vi-ve-ong-gia-noel-santa-claus.jpeg'>
                <br />
            </th>
            <th class="title">
                <?php
                echo "<p class='click'> Kết quả sau khi nhấn <i>Click here!</i> Trang session</p>";
                echo "<p class='kq'>Xin chào!</p>" . $_COOKIE["khach_hang"] . "<br>" . "<br>";
                echo "<a href='cookies.php'>Quay về trang đăng nhập</a> ";
                ?>
            </th>
        </tr>

        <tr>
            <th>
                <img class='imge'
                    src='https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2022/02/anh-ong-gia-noel-1.jpg?ssl=1'>
            </th>

        </tr>

    </table>

</body>

</html>