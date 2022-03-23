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


            <div class="progress">
                    <div class="progress-bar" style="width:4.55%;">
                        <span class="nbr-Q">1/23</span>
                    </div>
            </div>
        </div>

        <div class="Questions pt-5 bg-light">
            <div id="carouselExampleControls" class="carousel slide h-75" data-bs-interval="false">
                <div class="carousel-inner">

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
                        </div>
                    </div>


                        <div class="Q-2 carousel-item px-5 py-3">
                            <h4 class="text-center">Quelle est votre température corporelle ?</h4>
                            <div class="reponse d-flex justify-content-center mt-5">
                                <div class="form-check d-flex justify-content-center w-100 mt-5">
                                    <input class="inputAgePoids p-2" type="number" min="20" max="300" placeholder="20-300">
                                    <div class="ansKg p-2 bg-header">degrés</div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="Q-3 carousel-item px-5 py-3">
                            <h4 class="text-center">Ces derniers jours, avez-vous une toux ou une augmentation de votre toux habituelle ?</h4>
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
                            </div>
                        </div>
                    </div>


                        <div class="Q-4 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous eu des courbatures inhabituelles au cours des derniers jours ?</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-5 carousel-item px-5 py-3">
                            <h4 class="text-center">Ces derniers jours, avez-vous un mal de gorge ?</h4>
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
                            </div>
                        </div>
                    </div>


                        <div class="Q-6 carousel-item px-5 py-3">
                            <h4 class="text-center">Ces dernières 24 heures, avez-vous de la diarrhée ? Avec au moins 3 selles molles.</h4>
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
                            </div>
                        </div>
                    </div>

                    <div class="Q-7 carousel-item px-5 py-3">
                        <h4 class="text-center">Ces derniers jours, avez-vous une fatigue inhabituelle qui vous a obligé à vous reposer plus de la moitié de la journée ?</h4>
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
                        </div>
                    </div>

                    <div class="Q-8 carousel-item px-5 py-3">
                        <h4 class="text-center">Avez-vous des difficultés importantes pour vous alimenter ou boire depuis plus de 24h ?</h4>
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
                        </div>
                    </div>

                    <div class="Q-9 carousel-item px-5 py-3">
                        <h4 class="text-center">Dans les dernières 24 heures, avez-vous noté un manque de souffle inhabituel lorsque vous parlez ou faites un petit effort ?</h4>
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
                        </div>
                    </div>

                    <div class="Q-10 carousel-item px-5 py-3">
                        <h4 class="text-center">Actuellement, comment vous vous sentez ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex gap-5">
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-smile"></i>
                                    <span>Bien</span>
                                </div>
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-laugh-beam"></i>
                                    <span>Assez bien</span>
                                </div>
                                <div class="check oui d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="far fa-frown"></i>
                                    <span>Fatigué(e)</span>
                                </div>
                                <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                    <i class="fal fa-tired"></i>
                                    <span>Très fatigué(e)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="Q-11 carousel-item px-5 py-3">
                        <h4 class="text-center">Pensez-vous avoir ou avoir eu de la fièvre ces 10 derniers jours (frissons, sueurs) ?</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex justify-content-center w-100 mt-5">
                                <input class="inputAgePoids p-2" type="number" min="15" max="120" placeholder="15-120">
                                <div class="ansKg p-2 bg-header">ans</div>
                            </div>
                        </div>
                    </div>

                    <div class="Q-12 carousel-item px-5 py-3">
                        <h4 class="text-center">Quel est votre poids ? Afin de calculer l’indice de masse corporelle qui est un facteur influençant le risque de complications de l’infection.</h4>
                        <div class="reponse d-flex justify-content-center mt-5">
                            <div class="form-check d-flex justify-content-center w-100 mt-5">
                                <input class="inputAgePoids p-2" type="number" min="20" max="300" placeholder="20-300">
                                <div class="ansKg p-2 bg-header">Kg</div>
                            </div>
                        </div>
                        <div class="Q-13 carousel-item px-5 py-3">
                            <h4 class="text-center">Quelle est votre taille ? Afin de calculer l’indice de masse corporelle qui est un facteur influençant le risque de complications de l’infection.</h4>
                            <div class="reponse d-flex justify-content-center mt-5">
                                <div class="form-check d-flex gap-5">
                                <div class="reponse d-flex justify-content-center mt-5">
                         <div class="form-check d-flex justify-content-center w-100 mt-5">
                         <input class="inputAgePoids p-2" type="number" min="20" max="300" placeholder="20-300">
                       <div class="ansKg p-2 bg-header">cm</div>
                           </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="Q-14 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous de l’hypertension artérielle mal équilibrée ? Ou avez-vous une maladie cardiaque ou vasculaire ? Ou prenez-vous un traitement à visée cardiologique ?</h4>
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
                            </div>
                        </div>
                        

                        <div class="Q-15 carousel-item px-5 py-3">
                            <h4 class="text-center">Êtes-vous diabétique ?</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-16 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous ou avez-vous eu un cancer ?</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-17 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous une maladie respiratoire ? Ou êtes-vous suivi par un pneumologue ?</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-18 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous une insuffisance rénale chronique dialysée ?
</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-19 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous une maladie chronique du foie ?
</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-20 carousel-item px-5 py-3">
                            <h4 class="text-center">Êtes-vous enceinte ?
</h4>
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
                                            <div class="check non d-flex flex-column gap-2 align-items-center px-4 py-3">
                                            <i class="fas fa-male"></i>
                                            <span>Homme</span>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="Q-21 carousel-item px-5 py-3">
                            <h4 class="text-center">Avez-vous une maladie connue pour diminuer vos défenses immunitaires ?</h4>
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
                            </div>
                        </div>
                    </div>

                        <div class="Q-22 carousel-item px-5 py-3">
                            <h4 class="text-center">Prenez-vous un traitement immunosuppresseur ? C’est un traitement qui diminue vos défenses contre les infections. Voici quelques exemples : corticoïdes, méthotrexate, ciclosporine, tacrolimus, azathioprine, cyclophosphamide (liste non exhaustive).</h4>
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
                            </div>
                        </div>
                        <div class="Q-23 carousel-item px-5 py-3">
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
                            </div>
                        </div>
                </div>


                <div class="button d-flex justify-content-between px-3 pb-3 mt-7">
                    <button class="btn-prv btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        Précedent
                    </button>
                    <button class="btn-next btn btn-primary" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        Suivant
                    </button>
                    <a class="d-none btn-ter btn btn-primary" href="">Terminer le test</a>
                </div>

            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./js/main.js"></script>
</body>

</html>