<?php
$title = "Kontakt - Armin Sešek";
include ("head.php") ?>
<body class="contact">
<?php include ("header.php") ?>

<main>

<!-- Contact Section -->
<div class="container">
    <h1 class="bio-headline">Kontakt</h1>
    <!-- Poruka -->
    <div class="alert alert-success" style="display: none;">
        <img src="img/miroslav/check-marks.svg" alt="Check sign" class="img-responsive center-block">
        <strong>Vaše sporočilo je vspešno poslano!</strong>
    </div>
    <!-- Forma -->
    <form action="_send-email.php" method="post" id="contact-form" class="col-md-8 col-lg-8 col-md-offset-2">
        <div class="form-group">
            <label for="SenderName">Ime</label>
            <input type="text" name="SenderName" class="form-control" id="SenderName" required>
        </div>
        <div class="form-group">
            <label for="SenderEmail">E-mail</label>
            <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
        </div>
        <div class="form-group">
            <label for="SenderMessage">Sporočilo</label>
            <textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
        </div>
        <button class="btn btn-primary col-md-8 col-lg-8">POŠLJI</button>
    </form>
</div>
<!-- Contact Section END -->

</main>

<?php include ("footer.php") ?>
