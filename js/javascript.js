/*
0 = Index 
1 = Deporte
2 = Policial
3 = Local
4 = Gamer
5 = Mundo

*/
const pages = {name:["index", "deporte", "policial", "local", "gamer", "mundo"]};
var navBarDefaultClass = "container-fluid sticky-top ";
var buttonDefaultClass = "btn btn-width ";

function displayNone(){
    for (let page of pages.name) {
        if (isDisplayActive(page + "-content")){
            let pageColor = page + "-button";
            let pageContent = page + "-content";
            document.getElementById(pageContent).style.display = "none";
            
            console.log(page);
        }
    }
}

function isDisplayActive(parameter){
    if (document.getElementById(parameter) != ""){
        return true;
    } else {
        return false;
    }
}
function content(pagina){
    for (let page of pages.name) {
        if (page === pagina){
            document.getElementById(pagina + "-content").style.display = "";
        }
    }
}

function showPageContent(pagina){
    displayNone();
    content(pagina);
    
    
}
const deportesCards = ["deportes-card-1", "deportes-card-2", "deportes-card-3"]
function test(){
    function integerAleatorio(max) {
        return Math.floor((Math.random() * max.length));
      }
    document.getElementById("novedades-card-2").innerHTML = document.getElementById(deportesCards[integerAleatorio(deportesCards)]).innerHTML;
}