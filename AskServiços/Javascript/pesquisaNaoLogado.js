var pesquisa = document.getElementById("input-pesquisa");

pesquisa.addEventListener("keydown", function(event){
    if(event.key === "Enter"){
        pesquisar_dados();
    }
});

function pesquisar_dados(){
    window.location = "inicioNaoLogado.php?search="+pesquisa.value;
}