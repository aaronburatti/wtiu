<?php include "includes/header.php" ?>
    <div class="main">
      <?php
      /* check for the source attribute in the URL*/
            if(isset($_GET['source'])) {

              $source = $_GET['source'];
            } else {
              $source = '';
            }
      /*creates the basis for the SPA experience. Below are the different pages, each with its own function*/
            switch ($source) {
              case 'vjs';
                include 'includes/vjs.php';
              break;

              case 'vue';
                include 'includes/vue.php';
                break;

              default: 'rdb';
                include "includes/rdb.php";
                break;
            }
      ?>
    </div>
  </body>
</html>
