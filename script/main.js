const formbtn = document.querySelectorAll('.act-btn');
const formcont = document.querySelectorAll('.form-container');


// login form display
function openLoginform() {
    const loginForm = document.getElementById('login-form');
    
    
    // Toggle the display of the login form
    if (loginForm.classList.contains('show')) {
        // Hide the form (move it back up and fade out)
        loginForm.classList.remove('show');
        
        
        // Optional: Delay hiding the form completely until after animation
        setTimeout(() => {
            loginForm.style.display = 'none'; // Hide after animation completes
        }, 500); // Delay matches the transition time
    } else {
        // Show the form (move it down and fade in)
        loginForm.style.display = 'block'; // Make it visible first
        setTimeout(() => {
            loginForm.classList.add('show'); // Trigger the animation
        }, 10); // Small timeout to allow CSS to apply the transition
        
    }
        }

// login and signup toggler
formbtn.forEach((btn , index)=>{
    btn.addEventListener('click',()=>{
        formbtn.forEach(btn => btn.classList.remove('active-act'));
        btn.classList.add('active-act');
        formcont.forEach(form => form.classList.remove('active-form'));
        formcont[index].classList.add('active-form');
    })
})