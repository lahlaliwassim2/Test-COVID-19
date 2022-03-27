let localstorage = window.localStorage
let Questions = JSON.parse(localstorage.getItem('Questions'));
console.log(Questions)
function situation2() {
    if (Questions.Q1 == 'oui' && Questions.Q3 == 'oui') {
        if (malad_calcul() == 0) {
            console.log('tasl b tabib aw sir 3ndo ');
            document.getElementById("appelMedecin").classList.remove('d-none');
        } else if (Gravite_Majeur() == 0 || Gravite_Mineur() == 1) {
            console.log('tasl btabib aw zyara');
        } else if (Gravite_Mineur() > 1) {
            console.log('tasl b 141');
        }
    }
}
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


function situation1() {
    if (Questions.Q1 == "oui" || Questions.Q3 == "oui"
        && Questions.Q5 == "oui" || Questions.Q3 == "oui"
        && Questions.Q6 == "oui") {
        if (malad_calcul() == 0) {
            if (Questions.Q11 < 50) {
                console.log("b9a fdark otasl b tbib");
            }
            else if (Questions.Q11 >= 50 && Questions.Q11 <= 69) {
                console.log("tasl b tbib osir 3ndo");
            }
        }
        else if (malad_calcul() >= 1 && Gravite_Majeur() == 0 && Gravite_Mineur() == 0 || Gravite_Mineur() == 1) {
            console.log("tasl b tbib osir 3ndo");
        }
        else if (Gravite_Majeur() >= 1 || Gravite_Mineur() >= 2) {
            console.log("tasl b 141");
        }
    }
}
situation1();
situation2();
    // // situation3();
    // // situation4();
    // console.log("gravite mineur " + Gravite_Mineur());
    // console.log("gravite majeur " + Gravite_Majeur());
