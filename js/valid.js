function validateForm(){
		var x=document.forms["myForm"]["fname"].value;
		var y=document.forms["myForm"]["email"].value;
		var z=document.forms["myForm"]["msg"].value;
				
		if (x==null || x==""){
		alert("Duhet plotesuar fusha e emrit");
		return false;
		}
		
		var atpos=y.indexOf("@");
		var dotpos=y.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 ||
		dotpos+2>=y.length){
		alert("Email adresa nuk eshte e vlefshme!");
		return false;
		}
		
		if (z==null || z==""){
		alert("Duhet plotesuar fusha e mesazhit");
		return false;
		}
		
			
		
}
