function promotion(année) {
    var image;
    if (année == 2023) {
        image = "promotion 2023.jpg";
    } else if (année == 2022) {
        image = "promotion 2022.jpg";
    } else if (année == 2021) {
        image = "promotion 2021.jpg";
    } else if (année == 2024) {
        image = "promotion 2024.jpg";
    }
    document.getElementById('monImage').src = image;
}

function AffichageTexte(){
    document.getElementById("myfooterJS").innerHTML = "L'ENSIBS devient la 5eme Ecole associer au résaux polytech !";
}

function AffichageTexte2(){
    document.getElementById("myfooterJS2").style.fontSize = "20px";
    document.getElementById("myfooterJS2").style.color = "black";
    document.getElementById("myfooterJS2").style.backgroundColor = "whightgray"
    document.getElementById("myfooterJS2").innerHTML = "Adresse: 17 Bd Flandres Dunkerque, 56100 Lorient";
}