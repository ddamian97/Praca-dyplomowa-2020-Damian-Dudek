function findTheWord(word, fileName){
	const fs = require("fs");
	let file = fs.readFileSync(fileName,  "utf8");
	let arr = file.split(/\r?\n/);
	let count = 0;
	arr.forEach((line, idx)=> {
		if(line.includes(word)){
			count++;
		}
	});
	if(!count){
		console.log("No verse found");
	}
	console.log(count);
}

if((process.argv[2]) && (process.argv[3])){
	let word = process.argv[2];
	let fileName = process.argv[3];

	console.log("Argument: " + word + " Plik: " + fileName);
	findTheWord(word, fileName);
}else{
	console.log("No arguments!");
}
