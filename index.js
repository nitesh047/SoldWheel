 document.getElementById('loginForm').addEventListener("submit",(event)=>{
     event.preventDefault();
 })

 document.getElementById('registerForm').addEventListener("submit",(event)=>{
    event.preventDefault();
})




 function login(){
 
     const email = document.getElementById("email").value
     const password = document.getElementById("password").value
     console.log("1");
     firebase.auth().signInWithEmailAndPassword(email, password)
     .then((userCredential) => {
       // Signed in
       console.log("success");
       location.replace('grid-without-sidebar.html');
       // ...
     })
     .catch((error) => {
      console.log("error");
     });
 }

 function register(){
 
    const emaill = document.getElementById("emaill").value
    const passwordd = document.getElementById("passwordd").value
    console.log("1");
    firebase.auth().createUserWithEmailAndPassword(emaill, passwordd)
    .then((userCredential) => {
      // Signed in 
   console.log("yes!")
//    location.replace('')
      // ...
    })
    .catch((error) => {
      console.log(error);
      // ..
    });
  
}

 