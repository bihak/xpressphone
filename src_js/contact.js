let myform = document.getElementById("myform");
const nom = document.getElementById('name');
const mail = document.getElementById('mail');
const num = document.getElementById('num');
const marque = document.getElementById('marque');
const model = document.getElementById('model');
const mess = document.getElementById('mess');

myform.addEventListener("submit" , function(e){
  e.preventDefault();
  checkinput();
})
function checkinput() {
  const nomvalue = nom.value.trim();
  let regex = /^[a-zA-Z-\s]+$/;
  const emailvalue = mail.value.trim();
  let emailregex = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;
  const numvalue = num.value.trim();
  let numregex = /^[0-9]{10}$/;
  //controle du champs nom
  const marquevalue = marque.value.trim();
  const modelvalue = model.value.trim();
  const messvalue = mess.value.trim();
  if (nomvalue === "") {
    nomerreur(nom , "le champs nom est requis");
  }else if (regex.test(nomvalue)== false) {
    nomerreurregex(nomvalue,"le nom doit comporter des lettre et des tirets uniquement" );
  }else{
    nombon(nomvalue);
  }
  //controle du champs mail
  if (emailvalue === "") {
    mailerreur(mail , "le champs mail est requis");
  }else if (emailregex.test(emailvalue)== false) {
    mailerreurregex(emailvalue,"mail invalid" );
  }else{
    mailbon(emailvalue);
  }
  //controle du champs num
  if (numvalue === "") {
    numerreur(num , "le champs numero de telephone est requis");
  }else if (numregex.test(numvalue)== false) {
    numerreurregex(emailvalue,"numero de telephone invalid" );
  }else{
    numbon(numvalue);
  }
  //controle du champs marque
  if (marquevalue === "") {
    marqueerreur(marque , "le champs marque est requis");
  }else{
    marquebon(marquevalue);
  }
  //controle du champs marque
  if (modelvalue === "") {
    modelerreur(model , "le champs model est requis");
  }else{
    modelbon(modelvalue);
  }
  //controle du champs marque
  if (messvalue === "") {
    messerreur(mess , "le champs message est requis");
  }else{
    messbon(messvalue);
  }
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
//les fonction pour le controle du mail
function mailerreur(input, message) {
  let error = document.getElementById("error1");
    error.innerHTML = message;
    mail.style.border = 'solid red';
    error.style.color = 'red';
}
function mailerreurregex(input, message) {
  let error = document.getElementById("error1");
        error.innerHTML = message;
        mail.style.border = 'solid red';
        error.style.color = 'red';
}
function mailbon(input) {
  mail.style.border = 'solid green';
  let error = document.getElementById("error1");
  error.style.display = 'none';
}
//les fonction pour le controle du num
function numerreur(input, message) {
  let error = document.getElementById("error2");
    error.innerHTML = message;
    num.style.border = 'solid red';
    error.style.color = 'red';
}
function numerreurregex(input, message) {
  let error = document.getElementById("error2");
        error.innerHTML = message;
        num.style.border = 'solid red';
        error.style.color = 'red';
}
function numbon(input) {
  let error = document.getElementById("error2");
  num.style.border = 'solid green';
  error.style.display = 'none';
}
//les fonction pour le controle de la marque
function marqueerreur(input, message) {
  let error = document.getElementById("error3");
    error.innerHTML = message;
    marque.style.border = 'solid red';
    error.style.color = 'red';
}
function marquebon(input) {
  let error = document.getElementById("error3");
  marque.style.border = 'solid green';
  error.style.display = 'none';
}
//les fonction pour le controle du model
function modelerreur(input, message) {
  let error = document.getElementById("error4");
    error.innerHTML = message;
    model.style.border = 'solid red';
    error.style.color = 'red';
}
function modelbon(input) {
  let error = document.getElementById("error4");
  model.style.border = 'solid green';
  error.style.display = 'none';
}
//les fonction pour le controle du message
function messerreur(input, message) {
  let error = document.getElementById("error5");
    error.innerHTML = message;
    mess.style.border = 'solid red';
    error.style.color = 'red';
}
function messbon(input) {
  let error = document.getElementById("error5");
  mess.style.border = 'solid green';
  error.style.display = 'none';
}
