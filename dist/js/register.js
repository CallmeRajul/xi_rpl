const passwordInput = document.querySelector("#password")
const eye = document.querySelector("#eye")
eye.addEventListener("click", function () {
    this.classList.toggle("fa-eye-slash")
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
    passwordInput.setAttribute("type", type)
})
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.ripple')
    buttons.forEach(button => {
        button.addEventListener('click', function (e) {
            const x = e.clientX
            const y = e.clientY

            const buttonRect = e.target.getBoundingClientRect()

            const xInside = x - buttonRect.left
            const yInside = y - buttonRect.top

            const circle = document.createElement('span')
            circle.classList.add('circle')
            circle.style.width = circle.style.height = Math.max(buttonRect.width, buttonRect.height) + 'px'
            circle.style.top = yInside + 'px'
            circle.style.left = xInside + 'px'

            this.appendChild(circle)
            setTimeout(() => circle.remove(), 500)
        })
    })
})
const buttons = document.querySelectorAll('.previous-next-btn');

buttons.forEach(button => {
    button.addEventListener('click', function (e) {
        const ripple = document.createElement('span');
        ripple.className = 'ripple';
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        button.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 600);
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
