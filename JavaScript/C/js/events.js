function closeMe(){
	x=document.getElementById('demo');
	//option 1
	//x.style.display="none";
	//option 2
	x.className='closed'
}

function openMe(){
	x=document.getElementById('demo');
	//option 1
	//x.style.display="block";
	//option 2
	x.className="open";
}