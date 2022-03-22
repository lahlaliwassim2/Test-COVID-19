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
                
                            <!-- Question 1 -->
                            <div class="Q-1 carousel-item active px-5 py-3">
                                <h4 class="text-center">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours (frissons, sueurs) ?</h4>
                                <div class="reponse d-flex justify-content-center mt-5">
                                    <div class="form-check d-flex gap-5">
                                        <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                        <i class="fas fa-check"></i>
                                        <span>oui</span>
                                        </div>
                                        <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                        <i class="fas fa-times"></i>
                                        <span>non</span>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                    </div>
                                </div>
                            </div>

                            <!-- Question 2 -->
                            
                        
                        
                        </div>
            
                </div>
                <div class="button d-flex justify-content-between px-3 pb-3">
                    <button class="btn-prv btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        Précedent
                    </button>
                    <button class="btn-next btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        Suivant
                    </button>
                </div>
            </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
</body>
</html>