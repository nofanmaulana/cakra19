<?php
  include "administrator/config/config_db.php";
  $data = new configData();
?>
<!DOCTYPE html>
<html>
  <?php include 'template/head.php';?>
  <body>
    <?php include 'template/header.php';?>
    <div class="main-wrapper">
      <main role="main">
        <?php include 'template/banner.php';?>
        <!-- Start Resume -->
        <section id="resume" align="center">
          <section>
          </section>
        <iframe style="min-height:850px;" src="frame-capres.php" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          <?php 
            include 'template/pages/tps.php';
          ?>
        </section>
        <?php 
          include 'template/pages/blog.php';
          include 'template/footer.php';
        ?>
      </main>
    </div>
    <?php include 'template/js.php';?>
  </body>
</html>