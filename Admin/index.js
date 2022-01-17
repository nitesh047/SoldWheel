
 


document.getElementById('loginForm').addEventListener("submit",(event)=>{
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
      location.replace('Home.php');
      // ...
    })
    .catch((error) => {
     console.log("error");
    });
}

function logout(){
    firebase.auth().signOut().then(function() {
        console.log('Signed Out');
      }, function(error) {
        console.error('Sign Out Error', error);
      });
}

