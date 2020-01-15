document.querySelectorAll("#criteria #wrap .pollutant").forEach(poll => {
    let open = false;
    const img = poll.querySelector("img");
    const para = poll.querySelectorAll("p");
    const h3 = poll.querySelector("h3");
    poll.addEventListener("click", () => {
        if (!open) {
            if (window.matchMedia("screen and (max-width: 768px)").matches) {
                poll.style = "width: 90%; padding: 10px";
                img.style = "width: 30%; float: right; margin: 10px";
            }
            else {
                poll.style = "width: 80%; padding: 20px";
                img.style = "width: 20%; float: right; margin: 20px";
            }
            poll.classList.add("noHover");
            h3.style = "text-align: left";
            para.forEach(p => {
                p.style.display = "block";
            });
            open = !open;
        }
        else {
            poll.style = "";
            poll.classList.remove("noHover");
            h3.style = "";
            para.forEach(p => {
                p.style.display = "none";
            });
            img.style = "";
            open = !open;
        }
    });
});
