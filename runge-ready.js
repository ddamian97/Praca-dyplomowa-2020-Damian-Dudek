function RungeKutta(t, h, v, g, step, steps){
	let prevV = v;
	let prevH = h;

	for(let i = 0; i < steps; i++){
		h = prevH + prevV * step;
		v = prevV - g * step;
		prevH = h;
		prevV = v;
	}
	return [h, v];
}


if((process.argv[2]) && (process.argv[3]) && (process.argv[4]) && (process.argv[5])){
	let height0 = parseFloat(process.argv[2]);
	let velocity0 = parseFloat(process.argv[3]);
	let precision = process.argv[4];
	let steps = parseFloat(process.argv[5]);
	let g = 9.81;
	let time0 = 0;

	console.log("Height: " + height0 + " Velocity 0: " + velocity0 + " Time 0: " + time0 + " g: " + g + " Precision: " + precision + " Steps: " + steps + "\n");
	let results = RungeKutta(time0, height0, velocity0, g, precision, steps);
	console.log(results);
}else{
	console.log("No arguments!");
}
