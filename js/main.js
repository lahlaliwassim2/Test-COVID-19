
// -----------------------functions for progress and nbr questions ---------------------
let prog = 4.34;
let nbrQues = 1;
const btnNext = document.querySelector(".btn-next");
const btnPrev = document.querySelector(".btn-prv");

if(nbrQues == 1){
    document.querySelector(".btn-prv").style.visibility = "hidden";
}

btnNext.addEventListener("click",()=>{
    if(prog <100){
        prog += 4.34;
        nbrQues++;
        if(nbrQues == 23){
            document.querySelector(".btn-next").classList.add("d-none");
            document.querySelector(".btn-ter").classList.remove("d-none");
        }
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = nbrQues +"/23";
        document.querySelector(".btn-prv").style.visibility = "visible";

        // -------push reponse in object----------
        Questions["Q"+Q] = reponse;
        Q++;
        reponse = "";
        if(reponse == ""){
            btnNext.setAttribute("disabled","");
        }

        console.log(Questions);
    }
})

btnPrev.addEventListener("click",()=>{
    Q--;
    if(prog>0){
        nbrQues--;
        prog -= 4.34;
        if(nbrQues == 1){
            document.querySelector(".btn-prv").style.visibility = "hidden";
        }
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = nbrQues+"/23";

        document.querySelector(".btn-next").classList.remove("d-none");
            document.querySelector(".btn-ter").classList.add("d-none");
    }
})

// -----------------------functions for progress and nbr questions ---------------------


//---------------------------------- functions for check button -----------------------------
let btnOui = document.querySelectorAll(".oui");
let btnNon = document.querySelectorAll(".non");

btnOui.forEach(btn=> {
    btn.addEventListener("click",function(){
        btn.classList.toggle("active-check");
    })
});

btnNon.forEach(btn=> {
    btn.addEventListener("click",function(){
        btn.classList.toggle("active-check");
    })
});

//---------------------------------- functions for check button -----------------------------

// -----------------------create object---------------------
let Q = 1;
let Questions = new Object();
// -----------------------object---------------------


// ----------------------------checked oui ou non -----------------------------------
const checked = document.querySelectorAll(".check");
let reponse = "";
btnNext.setAttribute("disabled","");
checked.forEach(btn => {
    btn.addEventListener("click",()=>{
        reponse = btn.children[1].innerHTML;
        btnNext.removeAttribute("disabled","");
        console.log(reponse);
    })
});


// ----------------------------inputs -----------------------------------
let inputs = document.querySelectorAll(".inputAgePoids");
inputs.forEach(input => {
    input.addEventListener("mouseout",()=>{
        if(input.value != ""){
            reponse = input.value;
            btnNext.removeAttribute("disabled","");
        }
    })
});

// -------------------function for calcul maladie----------------------------
function malad_calcul(){
    let mal = 0;
    for (let i = 14; i < 23; i++) {
        if(Questions["Q"+i] == "oui"){
            mal++;
        }
    }
    return mal;
}
function situation2(){
    if (Questions.Q1 == 'oui' && Questions.Q3 == 'oui'){
       if(malad_calcul() == 0){
          console.log('tasl b tabib aw sir 3ndo ');
       }else if (Gravite_Majeur() == 0 || Gravite_Mineur() == 1){
        console.log('tasl btabib aw zyara');
       }else if (Gravite_Mineur() > 1){
          console.log('tasl b 141');
       }
    }
 }
 
function Gravite_Mineur(){
    let GMn = 0;
    if(Questions.Q1 == "oui"){
        GMn++;
    }
    if(Questions.Q7 == "oui"){
        GMn++; 
    }
    if(Questions.Q2 >= 39){
        GMn++;
    }
    return GMn;  
}

function Gravite_Majeur(){
    let GMj = 0;
    if(Questions.Q9 == "oui"){
        GMj++;
    }
    if(Questions.Q8 == "oui"){
        GMj++;
    }
    if(Questions.Q1 == "oui"){
        GMj++;
    }
    if(Questions.Q2 <= 35.4){
        GMj++;
    }
    return GMj; 
}


function situation1(){
    if(Questions.Q1 == "oui" || Questions.Q3 == "oui" 
        && Questions.Q5 == "oui" || Questions.Q3 == "oui"
        && Questions.Q6 == "oui"){
            if(malad_calcul() == 0){
                if(Questions.Q11 <50){
                    console.log("b9a fdark otasl b tbib");
                }
                else if(Questions.Q11 >= 50 && Questions.Q11 <= 69){
                    console.log("tasl b tbib osir 3ndo");
                }
            }
            else if(malad_calcul()>=1 && Gravite_Majeur() == 0 && Gravite_Mineur() == 0 || Gravite_Mineur() == 1){
                console.log("tasl b tbib osir 3ndo");
            }
            else if(Gravite_Majeur() >=1 || Gravite_Mineur() >=2){
                console.log("tasl b 141");
            }
    }
}



let btn_ter = document.querySelector(".btn-ter");
btn_ter.addEventListener("click",()=>{
    situation1();
    situation2();
    situation3();
    situation4();
    console.log("gravite mineur " + Gravite_Mineur());
    console.log("gravite majeur " + Gravite_Majeur());
})
///////////////////////////Situation numero trois/////////////////////////////////
function situation3() {
    if(Questions.Q1 =="oui" || Questions.Q3 == "oui" ||Questions.Q5 == "oui" || Questions.Q4 == "oui"){
        if( Gravite_Majeur() == 0 && Gravite_Mineur() == 0){
            console.log("sir ltbib");
        }
        else if( Gravite_Majeur() >= 1 || Gravite_Mineur() >= 1 || malad_calcul() >=1){
            console.log("appeler 141");
        }
    }
}
/////////////////////Situation numero quatre/////////////////////////
function situation4() {
    if( malad_calcul() ===0 && Gravite_Majeur() === 0 && Gravite_Mineur() ==0){
        console.log("Votre situation ne relève probablement pas du Covid-19");
    }
}