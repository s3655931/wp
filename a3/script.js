var movie = ['', '', ''];
var seats = [0, 0, 0, 0, 0, 0];
var cust = ['', '', '', '', ''];
var order = 'order';

var id = 0;
var day = 1;
var hour = 2;

var STA = 0;
var STP = 1;
var STC = 2;
var FCA = 3;
var FCP = 4;
var FCC = 5;

var name = 0;
var email = 1;
var mobile = 2;
var card = 3;
var expiry = 4;

window.onscroll = function ()
{
	var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
	var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
	var n = -1;
	while(n<articles.length - 1 && articles[n+1].offsetTop <= window.scrollY + 10)
	{
		n++;
	}
	for(var a=0; a<navlinks.length; a++)
	{
		navlinks[a].classList.remove('active');
	}
	navlinks[n].classList.add('active');
}

window.onload = function() {
	calculateTotal();
}

function showsynopsis(tempid) {
	var ids = ['Avengers_Synopsis', 'Wedding_Synopsis', 'Dumbo_Synopsis', 'Prince_Synopsis'];

	for (var i = 0; i < 4; i++) {

		var item = document.getElementById(ids[i]);
		if (tempid == ids[i]) {
			item.style.display="block";
		}
		else {
			item.style.display="none";
		}
	}

}

function calculateTotal() {

	var total = 0;
	var day = document.getElementById('movie[day]').value;
	var time = document.getElementById('movie[hour]').value;


	seats[STA] = Number(document.getElementById('seats[STA]').value);
	seats[STP] = Number(document.getElementById('seats[STP]').value);
	seats[STC] = Number(document.getElementById('seats[STC]').value);

	seats[FCA] = Number(document.getElementById('seats[FCA]').value);
	seats[FCP] = Number(document.getElementById('seats[FCP]').value); 
	seats[FCC] = Number(document.getElementById('seats[FCC]').value);

	if ((day == 'MON') || (day == 'WED') || ((time == 'T12') && ((day != 'SAT') || day != 'SUN'))) {
		total += Number(document.getElementById('seats[STA]').value * 14);
		total += Number(document.getElementById('seats[STP]').value * 12.5);
		total += Number(document.getElementById('seats[STC]').value * 11);

		total += Number(document.getElementById('seats[FCA]').value * 24);
		total += Number(document.getElementById('seats[FCP]').value * 22.5);
		total += Number(document.getElementById('seats[FCC]').value * 21);
	}
	else {
		total += Number(document.getElementById('seats[STA]').value) * 19.8;
		total += Number(document.getElementById('seats[STP]').value * 17.5);
		total += Number(document.getElementById('seats[STC]').value * 15.3);

		total += Number(document.getElementById('seats[FCA]').value * 30);
		total += Number(document.getElementById('seats[FCP]').value * 27);
		total += Number(document.getElementById('seats[FCC]').value * 24);
	}

	temp = total.toFixed(2);
	document.getElementById('totalcost').innerHTML = temp;
}

function selectDateTime(input, time, mov, day) {

	var datetime = input.value;
	var title;

	if (mov == 'ACT') {
		title = 'Avengers: Endgame';
	}
	else if (mov == 'RMC') {
		title = 'Top End Wedding';
	}
	else if (mov == 'ANM') {
		title = 'Dumbo';
	}
	else {
		title = 'The Happy Prince';
	}

	document.getElementById('bookTitle').innerHTML = title + ' - ' + datetime;

	document.getElementById('movie[id]').value = mov;
	document.getElementById('movie[hour]').value = time;
	document.getElementById('movie[day]').value = day;

	calculateTotal();

	movie[id] = mov;
	movie[day] = day;
	movie[hour] = time;
}

