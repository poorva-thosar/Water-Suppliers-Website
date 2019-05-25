function validform() {

        var a = document.forms["my-form"]["phone_number"].value;
        var b = document.forms["my-form"]["email_address"].value;
        var c = document.forms["my-form"]["pass"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Mobile No.");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Password");
            return false;
        }
		
		//Email Validation
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(b) == false) 
            {
                alert('Invalid Email Address ->'+b);
                return false;
            }
			
		//Mobile No. validation
         if (/^\d{10}$/.test(a) ) {
			// value is ok, use it
			}else if((a[0]!=9 || a[0]!=8 || a[0]!=7)){
				alert("Invalid Mobile Number");
				return false;
			} 
			else {
			alert("Mobile Number Must be 10 digits");
			return false;
			}		
			
}