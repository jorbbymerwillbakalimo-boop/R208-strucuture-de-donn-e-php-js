#!/usr/bin/nodejs

// Class declaration
class Date2 {
  day;
  month;
  year;

  constructor(d, m, y) {
    this.day = d;
    this.month = m;
    this.year = y;
  }

  toString() {
    var out = "";
    if (this.day < 10) out = out + "0";
    out = out + `${this.day}/`;
    if (this.month < 10) out = out + "0";
    out = out + `${this.month}/${this.year}`;
    return out;
  }

  toLongString() {
    var months = {'1':'janvier', '2':'février', '3':'mars', '4':'avril', '5':'mai', '6':'juin', '7':'juillet', '8':'août', '9':'septembre', '10':'octorbre', '11':'novembre', '12':'décembre'};
    // var months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octorbre', 'novembre', 'décembre'];
    var out = `${this.day}`;
    if (this.day == 1) out = out + "er";
    out = out + ` ${months[this.month]} ${this.year}`;
    // out = out + ` ${months[this.month - 1]} ${this.year}`;
    return out;
  }
}

// Declaration + Initialization
var myDate = new Date2(23, 3, 2026);
var myOtherDate = new Date2(1, 2, 2003);

// Display
console.log(`Aujourd'hui nous sommes le ${myDate}.`);
console.log(`Aujourd'hui nous sommes le ${myDate.toLongString()}.`);
console.log(`Avant nous étions le ${myOtherDate.toLongString()}.`);
