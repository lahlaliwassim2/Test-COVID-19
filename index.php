<!DOCTYPE html>
<html lang="en">

<?php
include('components/head.php');
?>

<body>
    <?php
    include('components/header.php');
    ?>
    <div class="bg-warning text-center p-3">
        <p class="fw-bold w-h4 h4">LA DERNIÈRE INFO MÉDICALE</p>
        <p>
            La prise d'anti-inflammatoires (ibuprofène, cortisone ...) pourrait être un facteur
            d'aggravation de l’infection.En cas de fièvre, prenez du paracétamol.
            N'arrêtez pas votre traitement ! Consultez votre médecin ou votre pharmacien.
        </p>
    </div>
    <div class="d-flex flex-column flex-md-row flex-revers flex-md-row-reverse mt-3">
        <div class="col-12 col-md-6 text-center">
            <img src="assets/img/doctor.png" class="w-75" alt="doctors">
        </div>
        <div class="col-12 col-md-6 d-flex flex-column align-items-center">
            <p class="text-center h5 w-h4">
                Vous pensez avoir été exposé au <br>
                Coronavirus COVID-19 et avez des symptômes ? </p>
            <img src="assets/img/Mask.svg" class="" alt="maskFace">
            <p class="fw-bold fs-4 opacity-75">Je reste vigilant ? </p>
            <p class="fw-bold fs-4 text-center opacity-75">Je programme une téléconsultation ?</p>
            <p class="fw-bold fs-4 opacity-75">J'appelle le 15 ?</p>
            <p class="fw-bold fs-5 text-center opacity-75">Faites le test pour répondre en citoyen
                éclairé selon vos symptômes.</p>
            <a href="ready.php"><div class="btn btn-primary w-75">Demarer le test</div></a>
        </div>
    </div>
    <?php
    include('components/footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>