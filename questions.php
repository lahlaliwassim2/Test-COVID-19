<!DOCTYPE html>
<html lang="en">
<?php include './components/head.php'; ?>

<body>

    <?php include './components/header.php'; ?>
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

        <div class="Questions d-flex flex-column gap-5 bg-light">
            <div class="progress">
                <div class="progress-bar btn-primary">
                    <span class="nbr-Q"></span>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel slide h-75" data-bs-interval="false">
                <div class="carousel-inner">

                    <div class="Q-1 carousel-item active  px-5 py-3">
                        <p class="text-center">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours
                            (frissons, sueurs) ?</p>
                        <div class="reponse">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    OUI
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    NON
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=" Q-2 carousel-item px-5 py-3">
                        <p class="text-center">Quelle est votre température corporelle ?</p>
                        <div class="reponse">
                            <input type="number" name="" id="" placeholder="34:39">
                        </div>

                    </div>

                </div>

            </div>
            <div class="button d-flex justify-content-between px-3 pb-3">
                <button class="btn-prv btn btn-primary" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    preview
                </button>
                <button class="btn-next btn btn-primary" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    next
                </button>
            </div>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
</body>

</html>