

var canvas = document.getElementById('canvas');
canvas.height = 400;
canvas.width = 1020;

var ctx = canvas.getContext("2d");


var datapoint = [
	{label : "Client", value: 30},
	{label : "Freelancer", value: 40},
	{label : "Job", value: 25},
	{label : "Contract", value: 22},
	{label : "visits", value: 48},
	{label : "propsal", value: 40},
	{label : "feedback", value: 22},
	{label : "ADJ", value: 10},
	{label : "Question", value: 43}
];
console.log(datapoint);
var maxdatapoint = Math.max(datapoint[0].value, datapoint[1].value, datapoint[2].value, datapoint[3].value, datapoint[4].value);
var colors = new Array(datapoint.length);
for(var i = 0 ; i < datapoint.length;i++){
	colors[i] = Math.random() * 360;
}

function grahtitle(title) {
	'use strict';
	ctx.textAlign = "center";
	ctx.font = "bold 40px arial";
	ctx.fillText(title, 520, 50);

}

function graphlines() {
	'use strict';
	var y = 50;
	for (var i = 0;i <= 250 ;i += 50)
	{
		ctx.beginPath();
		ctx.moveTo(30, 100  + i);
		ctx.lineTo(1020, 100 + i);
		ctx.stroke();
		ctx.font = " 12px arial";
		ctx.textBaseline = "middle";
		ctx.fillText( y , 10 , 100 + i);
		y -= 10;
	}
	/*
	اختصرت الكود الطويل ب for loop
	// length of x-axis 550 & I want designe five column
	// 550/5 = 110;
	// every column width = 60 & margin-left = 25 & margin-right = 25 
	*/
}

function graphchart() {	
	var numrect = datapoint.length;
	// 10 = -50 in graph
	// 15 = ?
	// ? = 15 * -50 / 10
	// لحمد لله فيه فكرة جامدة
	for(i = 0 ; i < numrect ;i++){
		//var color = Math.random() * 360;
		//ctx.fillStyle = "hsl(" + color + ",60%,50%)";
	}
}

function charanimation()
{
	var times = 0;
	var timer = setInterval(function(){
		var x = 0;
		for(var i = 0 ;i<datapoint.length;i++){
			if(times <= datapoint[i].value){
				//to change color while drop up
				var color = Math.random() * 360;
				//ctx.fillStyle = "hsl(" + color + ",60%,50%)";
				
				
				ctx.fillStyle ="#333";
				ctx.fillText(datapoint[i].label,85 + x,360);
				// to make constant
				ctx.fillStyle = "hsl(" + colors[i] + ",60%,50%)";
				ctx.fillRect(55 + x ,350,68,- times * 50 / 10);
			}
			x+= 110;
		}	
		times++;
		if(times > maxdatapoint)
			clearInterval(timer);
	
	},170); // put variable to controll times of run 
}


grahtitle("Grahic Chart");
graphlines();
graphchart();
charanimation();