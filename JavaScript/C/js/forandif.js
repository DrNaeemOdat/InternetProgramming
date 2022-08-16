function findAverage(){
	var info=[1, 2, , , 3, 4, , , , 7, 10];
	var sum=0;
	var cnt=0
	for (var i =0; i<info.length; i++) {
		if(info[i]!=undefined){
			sum+=info[i];
			cnt++;
		}
	}
	document.getElementById('here').innerHTML=sum/cnt;
}
