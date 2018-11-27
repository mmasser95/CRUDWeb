function validar(form) {
  console.log("aixo va");
  if(form.campo1.value=="" || form.campo1.value==""){
    alert("Tienes que llenar todos los campos");
    return false;
  }else{
    if(isNAN(form.campo1.value)){
      alert("El primer campo tiene que ser numerico");
      return false;
    }else{
      return true;
    }
  }
}
