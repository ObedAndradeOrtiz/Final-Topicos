    
    // Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyBPrmdnCY1QJep0aDk3EsmhLAlQgpj5e9M",
    authDomain: "fotagora-6e9a8.firebaseapp.com",
    projectId: "fotagora-6e9a8",
    storageBucket: "fotagora-6e9a8.appspot.com",
    messagingSenderId: "144181596746",
    appId: "1:144181596746:web:b2f2d931b932fd21450cb3",
    measurementId: "G-SCXD4PZL09"
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  document.getElementById('file').addEventListener('change', (event) => {
      const file = event.target.files[0];
      const storageRef = firebase.storage().ref('usuario/' + file.name);
      storageRef.put(file).on('state_changed', (snapshot) => {
          const progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
          console.log(progress);
          const progressBar = document.getElementById('progress_bar');
          progressBar.value = progress;
      });
      storageRef.getDownloadURL().then(function(url){
          var image = document.getElementById('file');
          console.log('firebase',url);//'firebase',url value
          image.src = url;
          document.getElementById('filev').value = url;
          console.log(document.getElementById('filev'));
      });
  });