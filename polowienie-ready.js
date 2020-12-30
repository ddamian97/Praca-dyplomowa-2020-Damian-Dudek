function cosFunc(x, multiplier) {
    return Math.cos(multiplier * x) - x;
}
function bisectionMethod(a, b, i, epsilon) {
    if(cosFunc(a, i) == 0){
        return a;
    }
    if(cosFunc(b, i) == 0){
        return b;
    }

    while (b - a > epsilon) {
        let middle = (a + b) / 2;
        if (cosFunc(middle, i) == 0) {
            return middle;
        }
        if (cosFunc(a, i) * cosFunc(middle, i) < 0) {
            b = middle;
        } else {
            a = middle;
        }
    }
    return ((a + b) / 2);
}
function operateBisection(b, epsilon, size){
    let result = b;
    let a = 0;

    for (let i = 1; i <= size; i++) {
        result = bisectionMethod(a, b, i, epsilon);
        b = result;
    }

    return result;
}



if((process.argv[2]) && (process.argv[3])){
    let size = process.argv[2];
    let epsilon = process.argv[3];
    let b = Math.PI;
    operateBisection(b, epsilon, size)
}else{
    console.log("No arguments!");
}
