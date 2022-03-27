<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>

<body>

    <?php include 'components/header.php'; ?>
    <main class="container w-75">
        <div class="stiper d-flex justify-content-around my-3">
            <div class="Info d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Informations</p>
            </div>
            <div class="Ques d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Questionnaire</p>
            </div>
            <div class="Res d-flex flex-column align-items-center">
                <span class=" circle rounded-circle"></span>
                <p>Résulats</p>
            </div>
        </div>
        <div class="information-area p-5 ">
            <div class="info-content d-flex align-items-center flex-column">
                <h5 class="text-primary fw-bold">Resultat de Test</h5>
                <p class="m-5 display-1 text-danger d-none" id="appel141"> APPELER 141 </p>
                <p class="m-5 text-center display-6 textColor d-none" id="appelMedecin">Téléconsultation ou médecin généraliste ou visite à domicile</p>
                <p class="m-4 text-center h3 textColor d-none" id="resteMaison"> nous vous conseillons de rester à votre domicile et
                    de contacter votre médecin en cas d’apparition de nouveaux symptômes. Vous pourrez
                    aussi utiliser à nouveau l’application pour réévaluer vos symptômes</p>
                <hr class="w-100">
                <p class="textColor h4">Restez chez vous au maximum en attendant que les symptômes disparaissent.
                    Prenez votre température deux fois par jour. Rappel des mesures d’hygiène.
                </p>
            </div>
        </div>
        <div class="d-flex align-items-center flex-column gap-3  mt-4">
            <a href="questions.php"> <button class="btn btn-primary btn-lg border border-secondary border-3 ">Recommencer le test</button></a>
            <img src="assets/img/ministre.svg" alt="">
        </div>
        <div class="footer-section row mt-5   ">
            <div class="col-12 col-md-6 col-xl-8 d-flex gap-1 align-items-center flex-column">
                <h5 class="text-primary fw-bold">Contacts utiles</h5>
                <h6 class="fw-bold">Numéro économique - Allo veille épidémiologique</h6>
                <h5 class="phoneNum fw-bold">080 100 47 47</h5>
                <H6 class="fw-bold">Aide médicale urgente - Allo SAMU</H6>
                <h5 class="phoneNum fw-bold">141</h5>
                <h6 class="fw-bold">la plateforme téléphonique- Allo 300</h6>
                <h5 class="phoneNum fw-bold">300</h5>
            </div>
            <div class="col-12 col-md-4    ">
                <ul class="d-flex align-items-center flex-column">
                    <a class="text-black fw-bold text-decoration-none list-unstyled" href="index.html">
                        <li>Accueil</li>
                    </a>
                    <hr class="line">
                    <a class="text-black fw-bold text-decoration-none list-unstyled" href="conseils.php">
                        <li>Conseil</li>
                    </a>
                    <hr class="line">
                </ul>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./js/result.js"></script>
</body>

</html>