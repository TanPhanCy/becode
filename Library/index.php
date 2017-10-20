<!Doctype html>
<html>
<?php $title = 'Home'; ?>
<?php include './includes/header.php'; ?>

<?php

      if(isset($_GET['content'])){
        // J'ai ma variable $GET
        // echo "You are allready on home page but you have params";

        $cnt = $_GET ['content'];

        if($cnt == 'a') {
          include './parts/content_a.php';
        }else if($cnt == 'b'){
          include './parts/content_b.php';
        }else {
          echo "Content not found";
        }

      }else{
        // Pas de variable $GET
        // affiche salut Home
        echo 'You are on home page without params';
      }

?>

<?php include './includes/footer.php'; ?>
</html>
