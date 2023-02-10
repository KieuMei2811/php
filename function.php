<?php
   function add_numbers(){
    echo 1 + 2;
   }
   add_numbers();
?>

<?php
   function display_name($name){
    echo "Hello".$name;
   }
   display_name("Martin");
?>
<?php
   function kilomitores_to_miles($kilomitores=0){
    $miles_scale = 0.62;
    return $kilomitores * $miles_scale ;
   }
   echo kilomitores_to_miles(100);
?>
