function check()
{
	var name=document.getElementById('name');
	var surname=document.getElementById('surname');
	var year=document.getElementById('year');
	var email=document.getElementById('email');
	var password=document.getElementById('password');
	var ch=0;
	 if(/^[a-zA-Z\d]+$/.test(name.value) && /^[\d]+$/.test(year.value) && /^[a-zA-Z\d]+$/.test(surname.value))
	 {
	 	 ch=1;
	 }
	 if(ch==0)
	 {
	 	alert("name, surname must contain only letters and numbers");
	 }
	 if(password.value=="")
	 {
	 	alert("enter a password");
	 }
	
}