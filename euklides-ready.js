function euclidean(a, b) {
	if(b != 0){
		let c = a % b;
		return euclidean(b, c);
	}
	return a;
}
function operateEuclidean(a, b, limit){
	let results = 0;

	for(let i = 1; i <= limit; i++){
		let newA = a * i;
		let newB = b * i;
		let results = euclidean(newA, newB);
	}
}
if((process.argv[2]) && (process.argv[3]) && (process.argv[4])){
	let arg1 = process.argv[2];
	let arg2 = process.argv[3];
	let limit = process.argv[4];
	console.log("Argumenty: " + arg1 + ' ' + arg2 + ' Limit: '+limit);
	operateEuclidean(arg1, arg2, limit);

}else{
	console.log("No arguments!");
}
