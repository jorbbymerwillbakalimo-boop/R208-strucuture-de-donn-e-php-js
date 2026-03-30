#!/usr/bin/nodejs


// Declarations
var login = "Betty";
var songs = ["Three Little Birds", "No Woman No Cry", "One Love", "Get Up Stand Up"];
var bobInfos = {'firstName':"Bob", 'lastName':"Marley", 'birthYear':1945, 'height':1.68, 'skills':["Guitare", "Chant", "Ecriture"]};
var otherSongs = ["Redemption Song", "Jaming"];
var bobCoordinates = {'firstName':"Bobounet", 'address':"1 place des Palmistes", 'zipCode':"97300", 'city':"Cayenne", 'phone':"0694112233"};

// Access
login = "Beth";
songs[0] = "Three Big Birds";
bobInfos['firstName'] = "Boby";
bobInfos['skills'][2] = "Composition";

// Update
songs.splice(2, 1);
delete bobInfos['height'];
songs[2] = "Two Loves";
songs[18] = "The Unknown Song";
songs.push("The Last Song");
bobInfos['isMan'] = true;
allSongs = songs.concat(otherSongs);

// Display
console.log(`Bonjour ${login}, comment vas-tu ?`);
console.log(songs);
console.log(bobInfos);
console.log(allSongs);
console.log(`Ma première chanson est ${songs[0]}.`);
console.log(`Mon nom est ${bobInfos['lastName']}.`);

// Display array with 'holes'
for (var i=0 ; i<songs.length ; i++) {
  console.log(`${i} : ${songs[i]}`);
}

// Foreach
for (var val of songs) {
  console.log(`${val}`);
}
for (var key in bobInfos) {
  console.log(`${key} : ${bobInfos[key]}`);
}




