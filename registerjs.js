function validform() {

        var a = document.forms["my-form"]["full_name"].value;
        var b = document.forms["my-form"]["email_address"].value;
        var c = document.forms["my-form"]["user_name"].value;
        var d = document.forms["my-form"]["phone_number"].value;
        var e = document.forms["my-form"]["pass"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }
		
		//Email Validation
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(b) == false) 
            {
            //document.getElementById("demo").style.color = "red";
            //    document.getElementById("demo").innerHTML ="Invalid EMail ->"+ email;
                alert('Invalid Email Address ->'+b);
                return false;
            }
			
		//Mobile No. validation
         if (/^\d{10}$/.test(d) ) {
			// value is ok, use it
			}else if((d[0]!=9 || d[0]!=8 || d[0]!=7)){
				alert("Invalid Mobile Number");
				return false;
			} 
			else {
			alert("Mobile Number Must be 10 digits");
			return false;
			}

    }