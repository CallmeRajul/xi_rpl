document.addEventListener('DOMContentLoaded', function () {
    const navToggle = document.getElementById('nav-toggle');
    const navToggleBurger = document.getElementById('nav-toggle-burger');
    const mainContent = document.getElementById('main-content');

    // Add click event listener to navToggle
    navToggle.addEventListener('click', function () {
        // Toggle styles for #main-content when navToggle is clicked
        if (navToggle.checked) {
            mainContent.style.width = '93.5vw';
            mainContent.style.left = '5.5vw';
        } else {
            // Add default styles if navToggle is not checked
            mainContent.style.width = '';
            mainContent.style.left = '';
        }
    });

    // Add click event listener to navToggleBurger
    navToggleBurger.addEventListener('click', function () {
        // Toggle styles for #main-content when navToggleBurger is clicked
        if (navToggle.checked) {
            mainContent.style.width = '84vw';
            mainContent.style.left = '15vw';
        } else {
            // Add default styles if navToggle is not checked
            mainContent.style.width = '';
            mainContent.style.left = '';
        }
    });
});
