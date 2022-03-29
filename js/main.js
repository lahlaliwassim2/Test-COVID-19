
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
        if(reponse == "" ){
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

function validTemp(temp){
    if(temp >= 34 && temp <=42){
        reponse = temp;
        btnNext.removeAttribute("disabled","");
        document.querySelector(".errorTemp").innerHTML = "";
    }
    else{
        document.querySelector(".errorTemp").innerHTML = "entrer votre vrais temperature ";
        btnNext.setAttribute("disabled","");
    }
}

function validAge(age){
    if(age >= 15 && age <=120){
        reponse =  age;
        btnNext.removeAttribute("disabled","");
        document.querySelector(".errorAge").innerHTML = "";
    }
    else{
        document.querySelector(".errorAge").innerHTML = "entrer votre vrais temperature ";
        btnNext.setAttribute("disabled","");
    }
}

function validPoid(poid){
    if(poid >= 20 && poid <=300){
        reponse =  poid;
        btnNext.removeAttribute("disabled","");
        document.querySelector(".errorPoid").innerHTML = "";
    }
    else{
        document.querySelector(".errorPoid").innerHTML = "entrer votre vrais Poid ";
        btnNext.setAttribute("disabled","");
    }
}

function validCm(cm){
    if(cm >= 40 && cm<=250){
        reponse =  cm;
        btnNext.removeAttribute("disabled","");
        document.querySelector(".errorCm").innerHTML = "";
    }
    else{
        document.querySelector(".errorCm").innerHTML = "entrer votre vrais taille ";
        btnNext.setAttribute("disabled","");
    }
}


// ----------------------------inputs -----------------------------------
let inputs = document.querySelectorAll(".inputAgePoids");
// let inputcheck = document.getElementById('inputcheck').addEventListener('keydown', function(){
//     if(inputcheck.value.length >= 3){
//             btnNext.setAttribute("disabled");
//     }
// })

inputs.forEach(input => {
    input.addEventListener("mouseout",()=>{

        const inputTemp = document.querySelector(".temp");
        const inputAge = document.querySelector(".inputAns")
        const inputPoid = document.querySelector(".inputPoid");
        const inputCm = document.querySelector(".inputCm");

        if(nbrQues == 2){
            validTemp(inputTemp.value);
        }
        else if (nbrQues == 11){
            validAge(inputAge.value);
        }
        else if(nbrQues == 12){
            validPoid(inputPoid.value);
        }
        else if(nbrQues == 13){
            validCm(inputCm.value);
        }
    })
});
let btn_ter = document.querySelector(".btn-ter");
btn_ter.addEventListener("click", function () {
    let localstorage = window.localStorage;
    localstorage.setItem('Questions', JSON.stringify(Questions))
    window.location.href = "./resultat.php";
    console.log(typeOf(localstorage));


})
///////////////////////////FONCTION DE VALIDATION DE INPUT D AGE

