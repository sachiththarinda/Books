function checkForm2(form)
  {
    if(form.uname.value == "") {
      alert("Error: Username cannot be blank!");
      form.uname.focus();
      return false;
    }
    else{
      return true;
    }
  }