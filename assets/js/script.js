function checkStuff() {
    var email = document.form1.email;
    var password = document.form1.pass;
    var msg = document.getElementById('msg');
    
    if (email.value == "") {
      msg.style.display = 'block';
      msg.innerHTML = "Please enter your email";
      email.focus();
      return false;
    } else {
      msg.innerHTML = "";
    }
    
     if (password.value == "") {
      msg.innerHTML = "Please enter your password";
      password.focus();
      return false;
    } else {
      msg.innerHTML = "";
    }
     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email.value)) {
      msg.innerHTML = "Please enter a valid email";
      email.focus();
      return false;
    } else {
      msg.innerHTML = "";
    }
  }

  let content=document.getElementById("content");


function addArticle(){
    content.innerHTML+='<textarea name="editor1"></textarea><script>CKEDITOR.replace( "editor1" );</script>';

    
  }