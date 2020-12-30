function countTheLines(fileName){
	const fs = require('fs');
	var text = fs.readFileSync(fileName).toString();
	var lines = text.split('\n');
	var numberOfLines = lines.length - 1;

	console.log(numberOfLines);
}
if((process.argv[2])){
	let fileName = process.argv[2];
	console.log("File name: " + fileName);
	countTheLines(fileName);
}else{
	console.log("No arguments!");
}
