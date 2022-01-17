 
const firebaseConfig = {
  apiKey: "AIzaSyDAmnvjdX6VrU18apg36I3j8aGmRwHiQLI",
  authDomain: "soldwheel-cda16.firebaseapp.com",
  projectId: "soldwheel-cda16",
  storageBucket: "soldwheel-cda16.appspot.com",
  messagingSenderId: "895753465539",
  appId: "1:895753465539:web:14670ef43d4151c1087c76",
  measurementId: "G-TKV0JJQ3TR"
};

console.log("2");
firebase.initializeApp(firebaseConfig);
console.log("3");
firebase.analytics();