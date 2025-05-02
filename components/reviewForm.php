<section class="contact_section layout_padding-bottom" style="margin-top:2rem">
    <div class="container-fluid">
        <div class="col-lg-8 col-md-8 offset-md-1" style="margin:auto">
            <div class="heading_container">
                <h2>Biti će nam drago ako nam ostavite recenziju!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 offset-md-1" style="margin:auto">
                <div class="form_container">
                    <form action="db/review.php" method="post"> <!-- Ensure this points to the correct path -->
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="Ime" oninvalid="this.setCustomValidity('Molimo Vas unesite ime')" oninput="this.setCustomValidity('')" required />
                        </div>
                        <div>
                            <input type="text" name="review" class="message-box form-control" placeholder="Recenzija" oninvalid="this.setCustomValidity('Molimo Vas unesite recenziju')" oninput="this.setCustomValidity('')" required />
                        </div>
                        <div class="col-md-12 text-center">
                            <button id="formsubmit" type="submit">Pošalji</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>