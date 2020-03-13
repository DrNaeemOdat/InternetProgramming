//Arrays

// var array= new Array();
// array[0]="Odat";
// array[1]=2012;
// array[2]=function(name){
//    	console.log("Hello "+name);
// };
// array[3]={Uni:" TTU"};

// // console.log(array);
// console.log(array[1]);
// array[2]("Odat");
// console.log(array[3].Uni);

//Short hand array creation
// var names=[
// {name:"Naeem"},
// {name: "Odat"}, 
// "Majdi"
// ];

// var names=[[1,2,3],
// {name:"Naeem"},
// {name: "Odat"}, 
// "Majdi"
// ];
// console.log(names[0][2]);

// var names=["Naeem","Ali","Omar"];
// console.log(names);
// for(var i=0;i<names.length;i++){
// 	console.log("Hello "+names[i]);
// }
// names[100]="Zaid";
// console.log(names.length);
// for(var i=0;i<names.length;i++){
// 	console.log("Hello "+names[i]);
// }


// 
// var myObj={
// 	name:"Naeem",
// 	course:"Internet Programming",
// 	room:"Conference Room"
// };
// for(var prop in myObj){
// 	console.log(prop+" : "+myObj[prop]);
// }
var names2=["Naeem","Ali","Omar",124];

// for(var name in names2){
// 	console.log("Hello "+ names2[name]);
// }
// console.log(names2[4].s);
names2.greeting="hi";//The following for loop will 
//consider this as a data entry. Not a property

for(var name in names2){
	console.log("Hello "+ names2[name]);
}

for(var i=0;i<names2.length;i++){
	console.log(names2[i]);
}
console.log(names2.greeting);

