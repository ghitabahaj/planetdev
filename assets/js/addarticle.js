let divtocopy=document.getElementById("listElement");
let emptydiv=document.getElementById("copyarticle");

function elementsMaker(tag,cl=null,name=null,content=null){
    let element = document.createElement(tag);
    if(cl) element.setAttribute('class',cl);
    if(name) element.setAttribute('name',name);
    if(content) element.innerHTML = content;

    return element;
}
let div = elementsMaker('div','form-group');
let textarea = elementsMaker('textarea','form-control','editor1[]','Article Description');
let p = elementsMaker('p','fs-2 fw-bold text-green','','Another Article to add');
textarea.id ='textarea';
div.appendChild(p);
div.appendChild(textarea);

let button = document.getElementById("addnew");

  button.addEventListener("click",function(e){
    e.preventDefault();
    emptydiv.append(divtocopy.cloneNode(true));
    emptydiv.appendChild(div);
    CKEDITOR.replace("textarea");
  });

