function validform() {

        var a = document.forms["my-form"]["phone_number"].value;
       
        if (a==null || a=="")
        {
            alert("Enter proper phone number");
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