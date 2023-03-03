<?php
    if(isset($_SESSION['product']) && is_array($_SESSION['product'])){
        for($i = 0; $i < sizeof($_SESSION['product']) ; $i++){
            ?>
             <tr>
                <?php echo $i+1 ?>
                <p class="card-img"><?php echo $_SESSION['product'][$i][0] ?></p>
                <p class="card-name"><?php echo $_SESSION['product'][$i][1] ?></p>
                <p class="card-code"><?php echo $_SESSION['product'][$i][2] ?></p>
                <p class="card-price"><?php echo $_SESSION['product'][$i][3] ?></p>
                <form method="post" action="">
                    <input class="card-order" onclick="return confirm('Thank you for your order');" type="submit" value="Đặt mua"/>
                </form>
            </tr>
            <?php
        }
        ?>
        <?php
    }
?>