/* 
 * Antonis Papaioannou
 * 	2010
 */

bg_timer = 10000;

today=new Date();

function showTime() {
	setInterval("startTime()", 500);
}

function startTime(){
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();
	// add a zero in front of numbers<10
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('time').innerHTML="Current time: "+h+":"+m+":"+s;
	
	var milisec = today.getMilliseconds();
	today.setMilliseconds(milisec+500);
}

function checkTime(i){
if (i<10){
  	i="0" + i;
  	}
return i;
}

