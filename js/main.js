
// ---------------------------------functions for progress -----------------------------
let prog = 0;
let nbrQues = 1;
document.querySelector(".btn-next").addEventListener("click",()=>{
    if(prog <100){
        prog += 4.55;
        nbrQues++;
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = parseInt(nbrQues *100/23) +"%";
    }
})
document.querySelector(".btn-prv").addEventListener("click",()=>{
    if(prog>0){
        prog -= 4.55;
        nbrQues--;
        document.querySelector(".progress-bar").style.width = prog+"%";
        document.querySelector(".nbr-Q").innerHTML = parseInt(nbrQues *100/23)+"%";
    }
})
//---------------------------------- functions for progress -----------------------------