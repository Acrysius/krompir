<!DOCTYPE html>
<html lang="en">
<head>
    <title>Krompirjevi oboževalci</title>
    <?php include 'includes/head.html';?>
</head>
<body>
<?php include 'includes/navbar.html';?>

   <section class="container-fluid bg-tertiary py-5">
        <article class="container text-center">
            <?php if($_SERVER['REQUEST_METHOD']==='POST'){
                include 'includes/narocilo.php'; 
            } else {
                include 'includes/hitri_log.php';
            }?>
                
        </article>
        
        
    </section>


</body>
</html>