const $ = _ => document.querySelector(_)

const $c = _ => document.createElement(_)

String.prototype.pad = function(size){
	let s = String(this)
	while (s.length < (size || 2)) {s = "0" + s}
	return s
}



const time = () => {
	const date = new Date();
	$('#clock').innerHTML = `${date.getHours().toString().pad(2)}:${date.getMinutes().toString().pad(2)}`
	setTimeout( time, 5000 )
}

time()