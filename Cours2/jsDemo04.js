#!/usr/bin/nodejs

// Include
var file = require("fs");
var yaml = require("js-yaml");



// JSON
    // Read file
    var jsonBobInfos = file.readFileSync("bobInfos.json", "utf8");

    // Display
    console.log(`JSON bobInfos : ${jsonBobInfos}`);

    // JSON to array
    var bobInfos = JSON.parse(jsonBobInfos);

    // Display
    console.log(bobInfos);



// YAML
    // Array to YAML
    var yamlBobInfos = yaml.dump(bobInfos);

    // Display
    console.log(`YAML bobInfos :\n${yamlBobInfos}`);

    // Write file
    file.writeFileSync("bobInfos.yaml", yamlBobInfos, "utf8");
