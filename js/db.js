// real-time listener

db.collection('recipes').onSnapshot((snapshot) => {
    console.log(snapshot.docChanges());
});

// upload images on Get quote page

