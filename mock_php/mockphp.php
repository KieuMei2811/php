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
    $curl = curl_init();
    curl_setopt_array($curl, [
       CURLOPT_URL => 'https://63a5720d318b23efa793a600.mockapi.io/api/products'
    ]);
    $data = curl_exec($curl);
    var_dump($data);
    curl_close($curl);
    
    ?>
</body>
</html>