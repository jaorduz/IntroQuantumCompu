var context = new AudioContext()
var o;
var isOn =0;

function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
function playNote(note) {

//var context = new AudioContext()
o = context.createOscillator()
o.type = "square";
o.connect(context.destination);
var t = context.currentTime;





var value=[
[82, 82, 87, 82, 73, 87, 82],
[4186, 6272, 5588, 6272, 6272, 5588, 4186],
[523, 784, 698, 784, 587, 698, 659]
];
var durations = [
[0.5, 0.5, 0.5, 0.5, 0.5, 0.5, 0.5],
[0.5, 1, 0.5, 0.5, 0.5, 0.5, 1],
[0.5, 1, 0.5, 0.5, 0.5, 0.5, 0.5]
];

for(i=0;i<14;i++){

	index = i%7;
	o.frequency.value = value[note][index];
	if(i==0){
		o.start(0);	
		//isOn = 1;
	}
	t +=  durations[note][index]; 
	sleep(durations[note][index]*1000);
}
o.stop(t);	

}
 
function stop(){
	o.stop();
}


function playmyfile(tune){ 
	let dom = String(document.location);
	var url = dom.substring(0, dom.length - 2);//dom.replace("#", "");
	url = url+"music/Quantune"+tune+".mp3";
	var audio = new Audio(url);
	audio.play();

}
