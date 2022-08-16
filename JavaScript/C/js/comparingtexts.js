function check(){
	email1=document.getElementById('email');
	email2=document.getElementById('repeatedemail');
	if(email1.value!=email2.value){
		alert('Emails are not the same!');
	}
}