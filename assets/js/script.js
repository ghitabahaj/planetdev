

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