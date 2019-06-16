function clic2(evt)
{
	var svg = document.getElementById('svgElement');

	var pt = svg.createSVGPoint();

		//pt.x = evt.clientX; 
	var x = event.clientX;     // Get the horizontal coordinate
	var y = event.clientY; 
	pt.x = x;
	pt.y = y;
	alert("Coordenadas: " + pt.x +" , " + pt.y);
/*
	pt.y = evt.clientY;
var x = pt.x;
var y = pt.y;
alert(x);
alert(y);

*/


}
