function registrar(){
    $("#Registro").on("submit", function(event){
        event.preventDefault();
  let Name = document.getElementById("Name").value;
  let Email = document.getElementById("Email").value;
  let Password = document.getElementById("Password").value;

});

}

function search(){

    document.getElementById("title").innerHTML=document.getElementById("Search").value;
}
function Univercidades(){
    let uni="";
    for(let x=0;x<12;x++){
uni+=`<div>
<img src="../img/01.png" alt="" height="200px" width="200px">
<p class="text-center">Universidad de Kent</p>
</div>`;
    }
    document.getElementById("Univercidades").innerHTML=uni;
}