<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>

    <?php include './components/header.php'; ?>
    <main class="container">
        <div class="stiper d-flex justify-content-around my-3">
            <div class="Info d-flex flex-column align-items-center">
            <div class="circleSelct rounded-circle">
                    <div class="circle rounded-circle circleSelc"></div>
                </div>
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
                <h5 class="text-primary fw-bold ">Préambule</h5>
                <p class="mb-5">L’application est fournie à titre gratuit, en l’état, uniquement à des fins d’information pour contribuer à fluidifier la prise en charge des personnes par les services d’urgences pendant l’épidémie de Coronavirus COVID-19. L’exhaustivité, l’exactitude, le caractère à jour des informations et contenus mis à disposition dans cette application, ou leur adéquation à des finalités particulières, ne sont pas garantis.</p>
                <p>Cette application ne substitue pas votre médecin qui est plus apte à vous donner plus de précision.
                    Les informations de cette application est le premier niveau de la détection des cas possibles du COVID-19.</p>
            </div>
        </div>
        <div class="d-flex align-items-center flex-column gap-3  mt-4">
            <a href="questions.php"> <button class="btn btn-primary btn-lg border border-secondary border-3 ">Démarrer Le Test</button></a>
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
                    <a class="text-black fw-bold text-decoration-none list-unstyled" href="index.php">
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
    <script src="./js/main.js"></script>
    <script src="test.js"></script>
</body>

</html>
