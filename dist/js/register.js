const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")
eye.addEventListener("click", function () {
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
})

document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.ripple');
    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            const buttonRect = e.target.getBoundingClientRect();

            const xInside = e.offsetX;
            const yInside = e.offsetY;

            const circle = document.createElement('span');
            circle.classList.add('circle');
            circle.style.width = circle.style.height = Math.max(buttonRect.width, buttonRect.height) + 'px';
            circle.style.top = yInside + 'px';
            circle.style.left = xInside + 'px';

            this.appendChild(circle);
            setTimeout(() => circle.remove(), 400);
        });
    });
});


let currentGroup = 0;
const formGroups = document.querySelectorAll('.input-group');
const form = document.getElementById('myForm');
var p1 = document.getElementById('p1')
var p2 = document.getElementById('p2')
var p3 = document.getElementById('p3')

function changeForm(direction) {
    formGroups[currentGroup].style.display = 'none';
    currentGroup += direction;
    if (currentGroup < 0) {
        currentGroup = 0;
    } else if (currentGroup >= formGroups.length) {
        currentGroup = formGroups.length - 1;
    }
    formGroups[currentGroup].style.display = 'flex';

    1

}

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("myForm");
    const steps = document.querySelectorAll(".step");
    let currentStep = 0;

    function showStep(step) {
        steps.forEach((step, index) => {
            step.classList.remove("active");
        });
        steps[step].classList.add("active");
    }

    function changeForm(stepChange) {
        currentStep += stepChange;
        if (currentStep < 0) {
            currentStep = 0;
        } else if (currentStep >= steps.length) {
            currentStep = steps.length - 1;
        }
        showStep(currentStep);
    }

    document.querySelector(".previous-next-btn[data-direction='previous']").addEventListener("click", function () {
        changeForm(-1);
    });

    document.querySelector(".previous-next-btn[data-direction='next']").addEventListener("click", function () {
        changeForm(1);
    });

    // Optionally, you can handle form submission here
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        // Your form submission logic here
    });

    // Show the initial step
    showStep(currentStep);
});
