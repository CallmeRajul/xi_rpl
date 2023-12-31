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
