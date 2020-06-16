var forms = document.getElementsByTagName("section");
var btnAtras = document.getElementById("atras");
var btnAdelante = document.getElementById("adelante");
var indexForm = 0;

btnAtras.addEventListener("click", function () {
  if (indexForm >= 0 && indexForm <= forms.length) {
    indexForm--;
    console.log(indexForm);
    forms[indexForm].style.display = "none";
    forms[indexForm - 1].style.display = "block";
  } else {
    console.log("paila ñiño");
  }
});
btnAdelante.addEventListener("click", function () {
  if (indexForm >= 0 && indexForm <= forms.length) {
    indexForm++;
    console.log(indexForm);
    forms[indexForm - 1].style.display = "none";
    forms[indexForm - 1].style.display = "block";
  } else {
    console.log("paila ñiño");
  }
});
