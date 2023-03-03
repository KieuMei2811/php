<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table with="500" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td background-color="#CC0066">
                <?php
                $file=fopen('C:\xampp\htdocs\ltweb_php\file.txt','r',1);
                if (!$file){
                    echo"<br> Không thể mở được file này.<br>";
                    exit;
                }
                else {
                    echo "<p align='center' class='stylel'><font color='#ffffff'";
                    echo "<b></b><br>";

                    while(!feof($file)){
                        $noi_dung=fgets($file);
                        echo n12br($noi_dung);
                    }
                    echo "<br><b> Mở và đọc file thành công!</br>";
                    echo "</font></p>";
                }
                fclose($file);

                ?>

            </td>
        </tr>

    </table>
</body>
</html>