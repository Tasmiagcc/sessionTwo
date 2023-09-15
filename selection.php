
 <?php include "partials/header.php";
session_start();
    $age = 19;
    // if($age>20){
    //     echo "you are enocient"
    // } else{
    //     echo "<p class= You are less enocient"
    // }                   
 ?>
 <main>
 <p> Hi My name is <?= $_SESSION["name"] ?> and I am <?php if ($age>20):?>
     <p> young <p> 
        <?php else :?>
<span>enocient</span> <?php endif?>
</p>
</p>
 </p>
   
</main>
<?php include "partials/footer.php";?>