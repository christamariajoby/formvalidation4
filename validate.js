function validate() {
    var name = document.form.name.value;
    if (name == null || name == "") {
      alert("Name cannot be blank");
      return false;
    }
  
    var email = document.form.email.value;
    if (email == null || email == "") {
      alert("Email cannot be blank");
      return false;
    }
  
    var phno = document.form.phoneno.value;
    if (phno == null || phno == "") {
      alert("Phone number cannot be blank");
      return false;
    } else if (phno.length != 10) {
      alert("Invalid phone number");
      return false;
    }
  
    var password = document.form.password.value;
    var firstpassword = document.form.password.value;
    var secondpassword = document.form.re_password.value;
    var hasNumber = /\d/;
    var hasCapitalLetter = /[A-Z]/;
    var hasLowerCaseLetter = /[a-z]/;
    var hasSpecialChar = /[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/;
    if (password == null || password == "") {
      alert("Password cannot be blank");
      return false;
    } else if (firstpassword.length < 8) {
      alert("Password must be at least 8 characters long");
      return false;
    } else if (!hasNumber.test(password)) {
      alert("Password must contain at least one number");
      return false;
    } else if (!hasCapitalLetter.test(password)) {
      alert("Password must contain at least one capital letter");
      return false;
    } else if (!hasLowerCaseLetter.test(password)) {
      alert("Password must contain at least one lowercase letter");
      return false;
    } else if (!hasSpecialChar.test(password)) {
      alert("Password must contain at least one special character");
      return false;
    } else if (firstpassword != secondpassword) {
      alert("Passwords do not match");
      return false;
    } else {
      return true;
    }
  }
  