let localstorage = window.localStorage
let Questions = JSON.parse(localstorage.getItem('Questions'));
console.log(Questions)
// -------------------function for calcul maladie----------------------------
function malad_calcul() {
    let mal = 0;
    for (let i = 14; i < 23; i++) {
        if (Questions["Q" + i] == "oui") {
            mal++;
        }
    }
    return mal;
}
function Gravite_Mineur() {
    let GMn = 0;
    if (Questions.Q1 == "oui") {
        GMn++;
    }
    if (Questions.Q7 == "oui") {
        GMn++;
    }
    if (Questions.Q2 >= 39) {
        GMn++;
    }
    return GMn;
}

function Gravite_Majeur() {
    let GMj = 0;
    if (Questions.Q9 == "oui") {
        GMj++;
    }
    if (Questions.Q8 == "oui") {
        GMj++;
    }
    if (Questions.Q1 == "oui") {
        GMj++;
    }
    if (Questions.Q2 <= 35.4) {
        GMj++;
    }
    return GMj;
}

///////////////////////////Situation numero un/////////////////////////////////
function situation1() {
    if (Questions.Q1 == "oui" || Questions.Q3 == "oui"
        && Questions.Q5 == "oui" || Questions.Q3 == "oui"
        && Questions.Q6 == "oui") {
        if (malad_calcul() == 0) {
            if (Questions.Q11 < 50) {
                document.getElementById("resteMaison").classList.remove("d-none");
            }
            else if (Questions.Q11 >= 50 && Questions.Q11 <= 69) {
                document.getElementById("appelMedecin").classList.remove("d-none");
            }
        }
        else if (malad_calcul() >= 1 && Gravite_Majeur() == 0 && Gravite_Mineur() == 0 || Gravite_Mineur() == 1) {
            document.getElementById("appelMedecin").classList.remove("d-none");
        }
        else if (Gravite_Majeur() >= 1 || Gravite_Mineur() >= 2) {
            document.getElementById("appel141").classList.remove("d-none");
        }
    }
}
///////////////////////////Situation numero deux/////////////////////////////////
function situation2() {
    if (Questions.Q1 == 'oui' && Questions.Q3 == 'oui') {
        if (malad_calcul() == 0 ) {
            document.getElementById("appelMedecin").classList.remove("d-none");
        } else if (Gravite_Majeur() == 0 || Gravite_Mineur() == 1) {
            document.getElementById("appelMedecin").classList.remove("d-none");
        } else if (Gravite_Mineur() > 1) {
            document.getElementById("appel141").classlist.remove("d-none");
        }
    }
}
///////////////////////////Situation numero trois/////////////////////////////////
function situation3() {
    if (Questions.Q1 == "oui" || Questions.Q3 == "oui" || Questions.Q5 == "oui" || Questions.Q4 == "oui") {
        if (Gravite_Majeur() == 0 && Gravite_Mineur() == 0) {
            console.log("sir ltbib");
        }
        else if (Gravite_Majeur() >= 1 || Gravite_Mineur() >= 1 || malad_calcul() >= 1) {
            console.log("appeler 141");
        }
    }
}
/////////////////////Situation numero quatre/////////////////////////
function situation4() {
    if (malad_calcul() === 0 && Gravite_Majeur() === 0 && Gravite_Mineur() == 0) {
        console.log("Votre situation ne relève probablement pas du Covid-19");
    }
}
situation1();
situation2();
situation3();
situation4();
    // console.log("gravite mineur " + Gravite_Mineur());
    // console.log("gravite majeur " + Gravite_Majeur());
