<!DOCTYPE html>
<html lang="en">
<head>
    <title>Krompirjevi oboževalci</title>
    <?php include 'includes/head.html';?>
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
                <div class="row mb-3">
                    <div class="col">
                        <label for="naslov">Naslov</label>
                        <input class="form-control" type="text" name="naslov" id="form-address">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="eposta" class="form-label">E-pošta</label>
                    <input type="email" name="eposta" id="form-email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="vrsta" class="form-label">Vrsta krompirja</label>
                    <select name="vrsta" id="form-vrsta" class="form-select" aria-label="Disabled select example">
                        <option selected>Izberi vrsto krompirja</option>
                        <option value="sladki">Sladki krompir</option>
                        <option value="beli">Beli krompir</option>
                        <option value="russet">Russet krompir</option>
                        <option value="rumeni">Rumeni krompir</option>
                        <option value="mladi">Mladi krompir</option>
                    </select>
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