<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krompirjevi oboževalci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-con" href="images/potato.webp">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap');
    </style>
</head>
<body>
<?php include 'includes/navbar.html';?>

   <section class="container-fluid bg-tertiary py-5">
        <article class="container">
            <h1 class="text-center text-secondary fw-bold">NAROČI VREČO KROMPIRJA</h1>
            <hr>
            <form class="container">
                <div class="mb-3">
                    <label for="ime" class="form-label">Ime</label>
                    <input type="text" class="form-control" id="form-name" name="ime">
                </div>
                <div class="mb-3">
                    <label for="priimek" class="form-label">Priimek</label>
                    <input type="text" name="priimek" id="form-surname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="eposta" class="form-label">E-pošta</label>
                    <input type="email" name="eposta" id="form-email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="vsebina" class="form-label">Sporočilo</label>
                    <textarea name="vsebina" id="form-content" rows="10" class="form-control"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success mb-3">Naroči krompir</button>
                </div>
            </form>
        </article>
        
   </section>

   <footer class="container-fluid py-2 bg-success text-center text-light">
        <h2>Dobra stara bajta navdušencev krompirja.</h2>
        <a class="text-decoration-none" href="mailto:potato@spud.si">potato@spud.si</a>
        <p>2024©</p>
   </footer>
</body>
</html>