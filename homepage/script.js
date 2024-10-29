var heading = document.querySelector(".intro p");
var text = heading.textContent; 

function typeEffect(text, index) {
    if (index < text.length) {
        heading.textContent += text[index]; 
        setTimeout(function() {
            typeEffect(text, index + 1);
        }, 150); 
    }
    else {
    setTimeout(clearHeading, 500); 
                    }
}
function clearHeading() {
         heading.textContent = ""; 
         typeEffect(text,0); 
          }
  typeEffect(text, 0);
  document.querySelectorAll('.subcontainer').forEach(container => {
    const subcontainer = container.querySelector('.subjects');
    const backbtn = container.querySelector('.backbtn .btn');  
    const forbtn = container.querySelector('.backbtn .btn2');  
    const scrollAmount = 200; 
    function slideleft() {
        subcontainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    }
    function slideright() {
        subcontainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
    backbtn.addEventListener('click', slideleft);
    forbtn.addEventListener('click', slideright);
});
document.querySelectorAll('.coursedisc').forEach(container => {
    const subcontainer = container.querySelector('.Allsubjects');
    const upbtn = container.querySelector('.upbtn');    // Button to scroll up
    const downbtn = container.querySelector('.upbtn2'); // Button to scroll down
    const scrollAmount = 250; // Amount to scroll in pixels

    // Function to scroll up
    function slideUp() {
        subcontainer.scrollBy({ top: -scrollAmount, behavior: 'smooth' });
    }

    // Function to scroll down
    function slideDown() {
        subcontainer.scrollBy({ top: scrollAmount, behavior: 'smooth' });
    }

    // Add event listeners for the buttons
    upbtn.addEventListener('click', slideUp);
    downbtn.addEventListener('click', slideDown);
});
