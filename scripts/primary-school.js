document.querySelectorAll("#primary #gw-causes #content #flex .cause").forEach(cause => {
    let toggle = true;
    cause.addEventListener("click", () => {
        if (toggle) {
            cause.querySelector(".info").style.display = "block";
            cause.classList.add("noHover");
        }
        else {
            cause.querySelector(".info").style.display = "none";
            cause.classList.remove("noHover");
        }
        toggle = !toggle;
    });
});
document.querySelectorAll("#character").forEach(character => {
    let toggle = true;
    character.addEventListener("click", () => {
        if (toggle) {
            character.querySelector("#real").style = "transform: scale(1)";
        }
        else {
            character.querySelector("#real").style = "";
        }
        toggle = !toggle;
    });
});