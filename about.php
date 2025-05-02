<!DOCTYPE html>
<html>

  <head>
    <?php include 'components/meta.php'; ?>  
  </head>

  <body class="sub_page">

    <div class="hero_area">
      <!-- header section strats -->

      <header class="header_section">
        <?php include 'components/topbar.php'; ?>
        <?php $currPage="about"; include 'components/header.php'; ?>
      </header>

      <!-- end header section -->
    </div>

    <!-- about section -->

    <?php include 'components/about.php' ?>

    <!-- end about section -->


    <!-- info section -->

    <?php include 'components/footer.php'; ?>

    <!-- end info section -->
  </body>

</html>