
 <?php include "partials/header.php";
 session_start();
 $_SESSION["name"]="Tasmia";                        
 $_SESSION["email"]="20260043@myclyde.ac.uk";                        
 ?>
 <main>
   <p>This website belong to <?= $pageTitle ?></p>
   
</main>
<?php include "partials/footer.php";?>