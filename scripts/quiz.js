let correct = 0;
let rating = 0;
const intro = document.querySelector("#quiz #intro");
const schools = document.querySelectorAll("#quiz #intro .school");
schools.forEach(school => {
    school.addEventListener("click", () => {
        schools.forEach(school => {
            school.disabled = true;
        });
        document.querySelector(`#quiz section#${school.id}`).style.display = "flex";
        intro.style.opacity = "0";
        window.setTimeout(() => {
            intro.style.display = "none";
        }, 1000);
        startQuiz(school.id);
    });
});
function startQuiz(school) {
    let index = 0;
    const slides = document.querySelectorAll(`#quiz section#${school} #slides .slide`);
    const next = document.querySelector(`#quiz section#${school} #buttons #next`);
    const previous = document.querySelector(`#quiz section#${school} #buttons #previous`);
    document.querySelector(`#quiz section#${school} #buttons #previous`).addEventListener("click", () => {
        if (index == slides.length - 1) {
            next.innerHTML = "Next";
        }
        if (index == 1) {
            previous.style.visibility = "hidden";
        }
        if (index != 0) {
            index -= 1;
        }
        slide(slides, index);
    });
    next.addEventListener("click", () => {
        previous.style.visibility = "visible";
        if (index != slides.length - 1) {
            index += 1;
        }
        else {
            if (school == "rating") {
                finRating(slides.length - 1);
            }
            else {
                fin(school, slides.length - 1);
            }
        }
        if (index == slides.length - 1) {
            next.innerHTML = "Finish";
        }
        slide(slides, index);
    });
    document.querySelectorAll(`#quiz section#${school} #slides .slide .answers .answer`).forEach(answer => {
        answer.addEventListener("click", () => {
            if (school == "rating") {
                answeredRating(answer);
            }
            else {
                answered(answer);
            }
        });
    });
}
function slide(slides, index) {
    slides.forEach(slide => {
        slide.style.display = "none";
    });
    slides[index].style.display = "block";
}
function answered(answer) {
    const siblings = answer.parentElement.children;
    for (let i = 0; i < siblings.length; i++) {
        siblings[i].disabled = true;
        if (siblings[i].id == "correct") {
            siblings[i].style.background = "#0F0";
        }
    }
    if (answer.id != "correct") {
        answer.style.background = "#F00";
    }
    else {
        correct++;
    }
}
function fin(school, total) {
    const fin = document.querySelector(`#quiz section#${school} #fin`);
    fin.querySelector("#correct").innerHTML = correct;
    fin.querySelector("#total").innerHTML = total;
    document.querySelector(`#quiz section#${school} #slides`).style.display = "none";
    fin.style.display = "flex";
}
function answeredRating(answer) {
    const siblings = answer.parentElement.children;
    for (let i = 0; i < siblings.length; i++) {
        siblings[i].disabled = true;
    }
    if (answer.id == "high") {
        answer.style.background = "#F00";
        rating += 2;
    }
    else if (answer.id == "medium") {
        answer.style.background = "#FF0";
        rating += 1;
    }
    else if (answer.id == "low") {
        answer.style.background = "#0F0";
        rating += 0;
    }
}
function finRating(slideNum) {
    const fin = document.querySelector("#quiz section#rating #fin");
    if (rating < (slideNum * 2) / 3) {
        fin.querySelector("#low").style.display = "block";
    }
    else if (rating > ((slideNum * 2) / 3) * 2) {
        fin.querySelector("#high").style.display = "block";
    }
    else {
        fin.querySelector("#medium").style.display = "block";
    }
    fin.style.display = "flex";
}