import firebase from 'firebase';

const firebaseConfig = {
    apiKey: "AIzaSyBG_O_U-0B8DTKu3D92kX62lfVhlvk32Rg",
    authDomain: "stonkspizza-5e569.firebaseapp.com",
    projectId: "stonkspizza-5e569",
    storageBucket: "stonkspizza-5e569.appspot.com",
    messagingSenderId: "974911313980",
    appId: "1:974911313980:web:5f09dafab051f6378f0b39",
    measurementId: "G-JM3Z5LX1QT"
};

let app = firebase.initializeApp(firebaseConfig);
export const db = app.database();