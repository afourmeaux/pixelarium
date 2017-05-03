document.addEventListener('DOMContentLoaded', function(){
	var daysList = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
	var monthsList = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

	var date = new Date();
	var dayNumber = date.getDay();
	var dayName = daysList[dayNumber];
	var monthNumber = date.getMonth();
	var monthName = monthsList[monthNumber];
	var year = date.getFullYear();

	if(dayNumber < 10){
		dayNumber = '0' + dayNumber;
	}

	document.getElementById('day-number').innerHTML = dayNumber;
	document.getElementById('day-name').innerHTML = dayName;
	document.getElementById('month-name').innerHTML = monthName;
	document.getElementById('year').innerHTML = year;
});