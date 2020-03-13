//Clousers

function makeMultiplier(multiplier){
	return (
		function (x){
			return multiplier*x;
		}

	);
}

var doubleAll=makeMultiplier(2);
console.log(doubleAll(10));