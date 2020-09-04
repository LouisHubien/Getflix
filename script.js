//SEARCHBAR

//Attend que le DOM soit loadé avant de lire le script qui lance la fonction timeout
document.addEventListener("DOMContentLoaded", function (event) {
    let input = document.querySelector('#searchInput');
    input.addEventListener('keyup', timeOutSearchBar);
});

//Appelle la fonction searchResults après 1s (et clear le timeout éventuellemnt déjà mis)
function timeOutSearchBar() {
    let timeout;
    clearTimeout(timeout);
    timeout = setTimeout(searchResults, 1000);
}

//Récupère la value de la searchBar et renvoie le résultat de searchResults.php
function searchResults() {
    let input = document.querySelector('#searchInput');
    let search = input.value;
    if (search != "") {
        //
        document.getElementById("searchTitle").innerHTML ="Search results for " + search;
        document.getElementById("searchResults").innerHTML = " ";
    } else {
        //enlève les résultats trouvés si l'utilisateur efface la valeur de la searchbar
        document.getElementById("searchResults").innerHTML = "";
    }
}

//SIGNOUT
signoutbutton.addEventListener('click',signout);

function signout(){
    swal({
        title: "Do you want to sign out ?",
        buttons: {
            cancel: true,
            confirm: "Sign Out",
          },
    })
    .then((goodbye) => {
        if (goodbye) {
            window.location="signout.php";
        };
    });
}
    




