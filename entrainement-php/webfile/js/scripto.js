"use strict";

let test = document.getElementsByClassName("test")[0];
let main = document.querySelector("main");

test.addEventListener("click", () => {
    fetch("https://pokeapi.co/api/v2/pokemon/charizard")
    .then(response => response.json())
    .then((response) => {
        console.log(response.sprites.back_shiny);
        let possible = response.sprites.back;
        let img = new Image();
        img.src = possible
        main.append(img)})
        .catch(err => console.log(err));
})


