import firebase from 'firebase';

const firebaseConfig = {
    apiKey: "AIzaSyDdQEse09ATeMT5tyfUeDieJV1y60aVo_E",
    authDomain: "fir-2-6d88b.firebaseapp.com",
    projectId: "fir-2-6d88b",
    storageBucket: "fir-2-6d88b.appspot.com",
    messagingSenderId: "263680109502",
    appId: "1:263680109502:web:76f38b6bb152392f0de7ef",
    measurementId: "G-8Y0N5323KB",
    databaseURL: "https://fir-2-6d88b-default-rtdb.firebaseio.com/",
};

if (firebase.apps.length === 0) {
    app = firebase.initializeApp(firebaseConfig);
}
else {
    app= firebase.app()
}
const auth = firebase.auth()
export { auth };

// let app = firebase.initializeApp(firebaseConfig);
// export const db = app.database();