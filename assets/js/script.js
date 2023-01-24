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


  function showinfo(id){
    document.getElementById("id-update").value=id;
    document.getElementById("article-title-update").value=document.getElementById(id).getAttribute("title");
    document.getElementById("article-author-update").value=document.getElementById(id).getAttribute("author");
    CKEDITOR.instances.editor1.setData(document.getElementById(id).getAttribute("text"));
}



document.querySelector('#search-input').addEventListener('input',filterTable);

function filterTable(){
    const search=document.querySelector('#search-input');
    const filter=search.value.toLowerCase();
    let rows=document.querySelectorAll('tbody tr');
    rows.forEach((items)=>{
        let text=items.textContent;
        if(text.toLowerCase().includes(filter.toLowerCase())){
            items.style.display='';
        }else{
            items.style.display='none';
        }
    });}

   


  
function view(id){
    document.getElementById("id-view").value = id;
    document.getElementById("title-view").innerText=document.getElementById(id).getAttribute("title");
    document.getElementById("article-content").innerHTML=document.getElementById(id).getAttribute("text");


}