function createCalendar() {

var year = document.getElementById("y").value;

var month = document.getElementById("m").value;

let mon = month - 1; // months in JS are 0..11, not 1..12

let d = new Date(year, mon);

let table = '<table><tr><th>SUN</th><th>MON</th><th>TUE</th> <th>WED</th>
<th>THU</th><th>FRI</th><th>SAT</th></tr><tr>';



for (let i = 0; i < d.getDay(); i++) {
table += '<td></td>';

}


while (d.getMonth() == mon) {

table += '<td>' + d.getDate() + '</td>';

if (d.getDay() % 7 == 6) { 
table += '</tr><tr>';

}

d.setDate(d.getDate() + 1);

}

if (d.getDay() != 0) {

for (let i = d.getDay(); i < 7; i++) {

table += '<td></td>';

}

}


table += '</tr></table>';

document.getElementById("cal").innerHTML = table;

}

