const coachButtons = document.querySelectorAll(".btnCoach");
const coachSection = document.getElementById('top-rated');
const togglePassword = document.getElementById('toggle-password');
const togglePassword2 = document.getElementById('toggle-password2');
const passwordInput = document.getElementById('password-input');
const passwordInput2 = document.getElementById('password-input2');
const emailInput = document.getElementById('email-sign');
const signBtn = document.getElementById("sign-btn");
// Home page Coach buttons
coachButtons.forEach(btn => {
  btn.addEventListener('click', ()=> {
  coachSection.scrollIntoView({ behavior: "smooth" });
});
});
//eye password
togglePassword.addEventListener('click', ()=> {
  if (passwordInput.getAttribute("type") === "password") {
    passwordInput.setAttribute("type", "text");
  } else {
    passwordInput.setAttribute("type", "password");
  }
});
togglePassword2.addEventListener('click', ()=> {
  if (passwordInput2.getAttribute("type") === "password") {
    passwordInput2.setAttribute("type", "text");
  } else {
    passwordInput2.setAttribute("type", "password");
  }
});
  //Auth0Lock
  var lock = new Auth0Lock('9DglPubtCO6ye0Rttpjyy5pFN3V4d53Y', 'dev-0jx3x4zkcixcnlbl.us.auth0.com', {
    auth: {
      params: { scope: 'openid profile email' } // Specify required scopes
    }
  });
  document.getElementById('loginButton').addEventListener('click', function() {
    lock.show(); // Open the Auth0 Lock widget
  });
  // Listen for the authenticated event
  lock.on('authenticated', function(authResult) {
    // Use authResult to access user data
    console.log(authResult.accessToken);
    if(authResult.accessToken){
      handleAuthenticationSuccess();
    }
  });
  // Assume this code is inside your authentication success callback
function handleAuthenticationSuccess() {
  // Redirect the user to the desired page after successful authentication
  window.location.href = 'https://https-github-com-nourmansour911.github.io/Frontend/'; // Replace '/dashboard' with your desired URL
}
  //validation sign in
//   const anchor = document.createElement("a");
//   anchor.style.color = "white";
//   anchor.setAttribute("href","../../index.html");
//   console.log(anchor);
//   // Regular expression pattern for validating email addresses
//   signBtn.addEventListener('click', ()=> {
//   if(checkEmail() && checkPassword()){
//     anchor.click();
//   }
// });
// function checkEmail() {
//   const email = emailInput.value;
//   if(email){
//     const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
//     // console.log(emailPattern.test(email))
//     if (emailPattern.test(email)) {
//       emailInput.style.border = '2px solid green';
//       return true;
//     } else {
//       emailInput.style.border = '2px solid red';
//     }
//   }else{
//     emailInput.style.border = '2px solid red';
//   }
// }
// function checkPassword() {
//   const pass = passwordInput.value;
//   const hasLetter = /[a-zA-Z0-9.-]/.test(pass);
//   if(pass){
//     if (hasLetter) {
//       passwordInput.style.border = '2px solid green';
//       return true;
//     } else {
//       passwordInput.style.border = '2px solid red';
//     }
//   }else {
//     passwordInput.style.border = '2px solid red';
//   }
// }