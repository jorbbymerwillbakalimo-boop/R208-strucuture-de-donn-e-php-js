#!/usr/bin/nodejs

console.log("Mon script JS.");

// var nom = "Bob";
// console.log(`Mon nom est ${nom}.`);

// var colors = ["red", "yellow", "green", "blue"];
// // console.log(colors.toString());
//
// colors.splice(0, 1);
// colors.splice(1, 1);
// colors.push("cyan");
// colors.push("magenta");
//
// for (var i=0 ; i<colors.length ; i++) {
// 	console.log(`${i}: ${colors[i]}`);
// }
//
// // for (color of colors) {
// // 	console.log(`${color}`);
// // }
//
// for (key in colors) {
// 	console.log(`${key}: ${colors[key]}`);
// }



var bob = {'firstName': "Bob", 'lastName': "Marley", 'birthYear': 1945, 'isMale': true};

delete bob['lastName'];
delete bob['isMale']

bob['height'] = 1.68;
bob['cry'] = "One Love";
bob['skills'] = ["Chant", "Guitare", "Composition musicale"];
bob['skills'].push("Militantisme");

console.log(bob);

console.log(`texte et ${bob['skills'][1]}`);

for (key in bob) {
	console.log(`${key}: ${bob[key]}`);
}
