<!DOCTYPE html>
<html>

  <head>
    <?php include 'components/meta.php'; ?>  
  </head>

  <body>

    <div class="hero_area">
      <header class="header_section">
        <?php include 'components/topbar.php'; ?>
        <?php $currPage="index"; include 'components/header.php'; ?>
      </header>

      <!-- end header section -->

      <!-- slider section -->

      <?php include 'components/slider.php'; ?>
      
      <!-- end slider section -->
    </div>


    <!-- service section -->

    <?php include 'components/services.php' ?>

    <!-- end service section -->


    <!-- about section -->

    <?php include 'components/about.php' ?>
    
    <!-- end about section -->


    <!-- track section -->

    <?php include 'components/whyUs.php' ?>

    <!-- end track section -->


    <!-- client section -->

    <?php include 'components/reviews.php' ?>

    <!-- end client section -->


    <!-- contact section -->
  
    <?php include 'components/contact.php'; ?>

    <!-- end contact section -->


    <!-- info section -->

    <?php include 'components/footer.php'; ?>

    <!-- end info section -->


  </body>

</html>