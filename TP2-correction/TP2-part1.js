#!/usr/bin/nodejs

// Includes
var file = require("fs");
var yaml = require("js-yaml");



// Load file "people.yaml"
var yamlPeoples = file.readFileSync("peoples.yaml", "utf8");

// Convert YAML to JS
var peoples = yaml.loadAll(yamlPeoples);

// Display
console.log(peoples);

// Build JSON file
	// Convert peoples to JSON
	var jsonPeoples = JSON.stringify(peoples);
	
	// Write file
	file.writeFileSync("peoples.json", jsonPeoples, "utf8");
	console.log("Write file peoples.json");

// Build YAML files
	// Foreach people
	for (people of peoples) {
		// Generate fileName
		var fileName = people['firstName'] + people['lastName'] + ".yaml";

		// Convert people to YAML
		var yamlPeople = yaml.dump(people);

		// Write file
		file.writeFileSync(fileName, yamlPeople, "utf8");
		console.log(`Write file ${fileName}`);
	}
