const infos = document.querySelectorAll("#impacts #environment #info .category");
document.querySelectorAll("#impacts #environment #images .image").forEach(img => {
    img.addEventListener("click", () => {
        infos.forEach(info => {
            if (info.id == img.id) {
                info.style.display = "block";
            }
            else {
                info.style.display = "none";
            }
        });
    });
});

const imgs = document.querySelectorAll("#impacts #anatomy #images div:not(#center) > img");
imgs.forEach(img => {
    let toggle = true;
    img.addEventListener("click", () => {
        if (toggle) {
            imgs.forEach(img => {
                if (img.nextElementSibling.style.display == "block") {
                    img.dispatchEvent(new Event("click"));
                }
            });
            img.nextElementSibling.style.display = "block";
        }
        else {
            img.nextElementSibling.style.display = "none";
        }
        toggle = !toggle;
    });
});