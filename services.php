<!DOCTYPE html>
<html>

  <head>
    <?php include 'components/meta.php'; ?>  
  </head>

  <body class="sub_page">

    <div class="hero_area">
      <!-- header section starts -->
      <header class="header_section">
        <?php include 'components/topbar.php'; ?>
        <?php $currPage="services"; include 'components/header.php'; ?>
      </header>
      <!-- end header section -->
    </div>

    <!-- service section -->

    <?php include 'components/services.php' ?>

    <!-- end service section -->

    <!-- info section -->

    <?php include 'components/footer.php'; ?>

    <!-- end info section -->

  </body>

</html>