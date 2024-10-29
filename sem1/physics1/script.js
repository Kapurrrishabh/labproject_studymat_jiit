// Select the elements
const showsContainer = document.querySelector('.shows');
const backButton = document.querySelector('.back');
const forwardButton = document.querySelector('.forward');

// Set the scroll amount
const scrollAmount = 200; // Adjust this value based on your needs

// Function to shift content left
function shiftLeft() {
    showsContainer.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth' // Smooth scrolling effect
    });
}

// Function to shift content right
function shiftRight() {
    showsContainer.scrollBy({
        left: scrollAmount,
        behavior: 'smooth' // Smooth scrolling effect
    });
}

// Event listeners for buttons
backButton.addEventListener('click', shiftLeft);
forwardButton.addEventListener('click', shiftRight);