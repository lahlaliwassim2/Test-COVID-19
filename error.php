<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>

    <?php include './components/header.php'; ?>
    <div class="container-fluid">
        <div class="error_area d-flex flex-column align-items-center">
            <img class="error404 w-50" src="assets/img/error404.svg" alt="" />
            <h3 class="text-primary mt-4 mb-2">Tu Es Perdu</h3>
            <a href="index.html">
                <button class="btn mb-3 text-white bg-primary">
                    Retourner à l'accueil
                </button></a>
            <img class="mb-3" src="assets/img/ministre.svg" alt="" />
        </div>
        <div class="row mt-5">
            <div class="col-2 mt-3 ga">
                <ul>
                    <a class="text-black fw-bold text-decoration-none list-unstyled" href="index.html">
                        <li>Accueil</li>
                    </a>
                    <a class="text-black fw-bold text-decoration-none list-unstyled" href="">
                        <li>Conseil</li>
                    </a>
                </ul>
            </div>
            <div class="col-5 d-flex gap-1 align-items-center flex-column">
                <h5 class="fw-bold text-primary">Contacts utiles</h5>
                <h6>Chiffre économique "Alo épidémie vigilance"</h6>
                <h5 class="phoneNum">080 100 47 47</h5>
                <h6>Aide médicale urgente</h6>
                <h5 class="phoneNum">114</h5>
            </div>
            <div class="col-5">
                <p>
                    Algorithme d'orientation mis à jour sur les recommandations en
                    vigueur au 22/03/2020 à 16h15. Ce site d’information n’est pas un
                    dispositif médical, il ne délivre pas d’avis médical. Projet
                    solidaire d'urgence,financé par l’Alliance Digitale contre le
                    COVID-19 : @maladiecovid19
                </p>
            </div>
        </div>
    </div>
    <div class="footer-line"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>