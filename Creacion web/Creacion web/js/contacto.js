//formulario

function validate(){

var box = document.getElementById("nombre");
var box2=document.getElementById("apellidos");
var box3 = document.getElementById("email");


if(box.value =="" || box2.value =="" || box3.value ==""){
	alert("Por favor al menos 5 caracteres");
	box.focus(box,box2,box3);
	box.style.border="solid 5px red";
	return false;
}




}
