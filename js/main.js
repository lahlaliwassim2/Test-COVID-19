
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