// //Oject creation
// var company=new Object();
// company.name="Facebook";
// company.ceo=new Object();
// company.ceo.firstName="Mark";
// company.ceo.favColor="blue";

// //  console.log(company);
// // console.log("Ceo fav color is :"+company.ceo.favColor);
// //Brackets can be used to refer to values
// var stock="stock of company";
// // company."stock of comapny"=110;//not allowed
// // console.log(comapny."stock of comapny");
// // console.log("stock of comapny");
// company[stock]=110;
// // company.stock=stock;
// console.log(company.stock);
// console.log(company);
// // console.log(company["stock of company"]);
// console.log(company["ceo"]["firstName"]);

//Better way for object creation
//Object literal.
var facebook={
	name:"FaceBook",
	ceo:{
		name:"Mark",
		favColor:"blue",
		whatever:{
			ff:20,
			cc:"NN"
		}
	},
	stock:110
};

console.log(facebook);



