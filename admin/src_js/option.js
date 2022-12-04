let myform = document.getElementById("myform");
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const mail = document.getElementById('mail');
const num = document.getElementById('num');
const marque = document.getElementById('tva');
var bool = bool1 = bool2 = bool3 = bool4 =  false;

myform.addEventListener("submit" , function(e){
  if (checkinput()==true) {
    checkinput()
  }else{
    e.preventDefault();
  }
  
  
})
function checkinput() {
    const nomvalue = nom.value.trim();
    let regexnom = /^[a-zA-Z-\s]+$/;
    const prenomvalue = prenom.value.trim();
    let regexprenom = /^[a-zA-Z-\s]+$/;
    const emailvalue = mail.value.trim();
    let emailregex = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;
    const numvalue = num.value.trim();
    let numregex = /^[0-9]{10}$/;
    const tvavalue = tva.value.trim();
    let tvaregex = /^FR[0-9]{11}$/;
    
    if (nomvalue === "") {
      nomerreur(nom , "le champs nom est requis");
    }else if (regexnom.test(nomvalue)== false) {
      nomerreurregex(nomvalue,"le nom doit comporter des lettre et des tirets uniquement" );
    }else{
      nombon(nomvalue);
      bool = true;
    }

    if (prenomvalue === "") {
      prenomerreur(prenom , "le champs prenom est requis");
    }else if (regexprenom.test(prenomvalue)== false) {
      prenomerreurregex(prenomvalue,"le prenom doit comporter des lettre et des tirets uniquement" );
    }else{
      prenombon(prenomvalue);
      bool1 = true;
    }
    //controle du champs mail
    if (emailvalue === "") {
      mailerreur(mail , "le champs mail est requis");
    }else if (emailregex.test(emailvalue)== false) {
      mailerreurregex(emailvalue,"mail invalid" );
    }else{
      mailbon(emailvalue);
      bool2 = true;
    }
    //controle du champs num
    if (numvalue === "") {
      numerreur(num , "le champs numero de telephone est requis");
    }else if (numregex.test(numvalue)== false) {
      numerreurregex(emailvalue,"numero de telephone invalid" );
    }else{
      numbon(numvalue);
      bool3 = true;
    }
    if (bool == true && bool1 == true && bool2 == true && bool3 == true) {
      bool4= true
  }else{
      bool4= false
  }
  return bool4;
  //  //controle du champs tva
  //  if (emailvalue === "") {
  //   tvabon(tvavalue);
  // }else if (tvaregex.test(tvavalue)== false) {
  //   tvaerreurregex(emailvalue,"numero de tva" );
  // }else{
  //   tvabon(tvavalue);
  // }
}
//les fonction pour le controle du nom
function nomerreur(input, message) {
  let error = document.getElementById("error");
    error.innerHTML = message;
    nom.style.border = 'solid red';
    error.style.color = 'red';
}
function nomerreurregex(input, message) {
  let error = document.getElementById("error");
        error.innerHTML = message;
        nom.style.border = 'solid red';
        error.style.color = 'red';
}
function nombon(input) {
  nom.style.border = 'solid green';
  let error = document.getElementById("error");
  error.style.display = 'none';
}
//les fonction pour le controle du prenom
function prenomerreur(input, message) {
  let error = document.getElementById("error1");
    error.innerHTML = message;
    prenom.style.border = 'solid red';
    error.style.color = 'red';
}
function prenomerreurregex(input, message) {
  let error = document.getElementById("error1");
        error.innerHTML = message;
        prenom.style.border = 'solid red';
        error.style.color = 'red';
}
function prenombon(input) {
  prenom.style.border = 'solid green';
  let error = document.getElementById("error1");
  error.style.display = 'none';
}
//les fonction pour le controle du mail
function mailerreur(input, message) {
  let error = document.getElementById("error2");
    error.innerHTML = message;
    mail.style.border = 'solid red';
    error.style.color = 'red';
}
function mailerreurregex(input, message) {
  let error = document.getElementById("error2");
        error.innerHTML = message;
        mail.style.border = 'solid red';
        error.style.color = 'red';
}
function mailbon(input) {
  mail.style.border = 'solid green';
  let error = document.getElementById("error2");
  error.style.display = 'none';
}
//les fonction pour le controle du num
function numerreur(input, message) {
  let error = document.getElementById("error3");
    error.innerHTML = message;
    num.style.border = 'solid red';
    error.style.color = 'red';
}
function numerreurregex(input, message) {
  let error = document.getElementById("error3");
        error.innerHTML = message;
        num.style.border = 'solid red';
        error.style.color = 'red';
}
function numbon(input) {
  let error = document.getElementById("error3");
  num.style.border = 'solid green';
  error.style.display = 'none';
}
// //les fonction pour le controle de la tva
// function tvaerreurregex(input, message) {
//   let error = document.getElementById("error4");
//         error.innerHTML = message;
//         tva.style.border = 'solid red';
//         error.style.color = 'red';
// }
// function tvabon(input) {
//   let error = document.getElementById("error4");
//   tva.style.border = 'solid green';
//   error.style.display = 'none';
// }
let x= 6+3+"3";
console.log()