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
function openfav() {
    const favtab = document.getElementById('favourite-tab');


    // Toggle the display of the login form
    if (favtab.classList.contains('show')) {
        // Hide the form (move it back up and fade out)
        favtab.classList.remove('show');
        document.body.style.overflowY = 'auto';


        // Optional: Delay hiding the form completely until after animation
        setTimeout(() => {
            favtab.style.display = 'none'; // Hide after animation completes
        }, 500); // Delay matches the transition time
    } else {
        // Show the form (move it down and fade in)
        favtab.style.display = 'block'; // Make it visible first
        document.body.style.overflowY = 'hidden';
        setTimeout(() => {
            favtab.classList.add('show'); // Trigger the animation
        }, 10); // Small timeout to allow CSS to apply the transition

    }
}
function opencart() {
    const cartTab = document.getElementById('cart-tab');


    // Toggle the display of the login form
    if (cartTab.classList.contains('show')) {
        // Hide the form (move it back up and fade out)
        cartTab.classList.remove('show');
        document.body.style.overflowY = 'auto';


        // Optional: Delay hiding the form completely until after animation
        setTimeout(() => {
            cartTab.style.display = 'none'; // Hide after animation completes
        }, 500); // Delay matches the transition time
    } else {
        // Show the form (move it down and fade in)
        cartTab.style.display = 'block'; // Make it visible first
        document.body.style.overflowY = 'hidden';
        setTimeout(() => {
            cartTab.classList.add('show'); // Trigger the animation
        }, 10); // Small timeout to allow CSS to apply the transition

    }
}

function opensearch() {
    const cartTab = document.getElementById('search-tab');


    // Toggle the display of the login form
    if (cartTab.classList.contains('show')) {
        // Hide the form (move it back up and fade out)
        cartTab.classList.remove('show');
        


        // Optional: Delay hiding the form completely until after animation
        setTimeout(() => {
            cartTab.style.display = 'none'; // Hide after animation completes
        }, 500); // Delay matches the transition time
    } else {
        // Show the form (move it down and fade in)
        cartTab.style.display = 'block'; // Make it visible first
        
        setTimeout(() => {
            cartTab.classList.add('show'); // Trigger the animation
        }, 10); // Small timeout to allow CSS to apply the transition

    }
}


// login and signup toggler
formbtn.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        formbtn.forEach(btn => btn.classList.remove('active-act'));
        btn.classList.add('active-act');
        formcont.forEach(form => form.classList.remove('active-form'));
        formcont[index].classList.add('active-form');
    })
})
function showSign(){
    formbtn.forEach(btn=>btn.classList.remove('active-act'));
    formbtn[1].classList.add('active-act');
    formcont.forEach(form => form.classList.remove('active-form'));
    formcont[1].classList.add('active-form');
}

// Open the form when the 'Book Reservation' button is clicked
document.getElementById('bookBtn').addEventListener('click', function() {
    var form = document.getElementById('reservationForm');
    form.classList.add('show-form');
  });
  
  // Close the form when the 'Close' button is clicked
  document.getElementById('closeBtn').addEventListener('click', function() {
    var form = document.getElementById('reservationForm');
    form.classList.remove('show-form');
  });

  function closelogout(){
    document.getElementById('background-darker').style.display='none';
    document.getElementById('log-out-ask-wrapper').style.display='none';
  }
  function showlogout(){
    document.getElementById('background-darker').style.display='block';
    document.getElementById('log-out-ask-wrapper').style.display='flex';
  }
  function directCart(){
    const cartTab = document.getElementById('cart-tab');
    cartTab.style.display = 'block'; // Make it visible first    
    cartTab.classList.add('show'); // Trigger the animation
        
  }