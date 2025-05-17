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
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Recenzije
            </h2>
        </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($reviews)): ?>
                <?php foreach ($reviews as $index => $review): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 mx-auto">
                                    <div class="box">
                                        <div class="detail-box">
                                            <div class="client_info">
                                                <div class="client_name">
                                                    <h5>
                                                        <?php echo htmlspecialchars($review['name']); ?>
                                                    </h5>
                                                </div>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                            </div>
                                            <p>
                                                <?php echo htmlspecialchars($review['text']); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Nema dostupnih recenzija.
                                                </h5>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Trenutno nema recenzija. Molimo provjerite kasnije.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i < count($reviews); $i++): ?>
                <li data-target="#customCarousel2" data-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></li>
            <?php endfor; ?>
        </ol>
    </div>
</section>
