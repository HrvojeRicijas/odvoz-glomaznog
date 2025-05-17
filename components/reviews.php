<?php
// Include the database connection
include 'db/db.php';

// Fetch approved reviews from the database
$sql = "SELECT id, name, text FROM reviews WHERE approved = 1 ORDER BY id DESC";
$stmt = mysqli_stmt_init($dbc);
$reviews = [];

if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)) {
        $reviews[] = $row;
    }
}

mysqli_close($dbc);
?>

<section class="client_section layout_padding">
<?php if (!empty($reviews)): ?>
    <div class="container">
      <div class="heading_container">
        <h2>
          Što <span>drugi</span> kažu o nama?
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            
          <?php foreach ($reviews as $index => $review): ?>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    <?php echo htmlspecialchars($review['text']); ?>
                  </p>
                </div>
                <div class="client_id">
                  <!--div class="img-box">
                    <img src="images/client-1.png" alt="" class="img-1">
                  </!--div-->
                  <div class="name">
                    <h6>
                      <?php echo htmlspecialchars($review['name']); ?>
                    </h6>
                    <p>
                     
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
            

          </div>
        </div>
      </div>
    </div>
    
  <?php endif; ?>
  </section>


  
  <script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: ['←', '→'], // Custom arrows
      dots: false,          // Remove dots under carousel
      autoplay: true,
      autoplayTimeout: 10000,
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        992: { items: 3 }
      }
    });
  });
</script>