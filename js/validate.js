// vim: set expandtab tabstop=4 shiftwidth=4 autoindent smartindent:
//---------------------------------------------------------
// CAPTAIN  SLOG
//---------------------------------------------------------
//
//	FILE:       validate.js 
//	SYSTEM:     RAMMC new home pages 
//	AUTHOR:     Mark Addinall
//	DATE:       22/01/2014
//	SYNOPSIS:   A teeny amount of Javascript that
//	            validates some input fields on a form
//	            client side.  HTML FORM attributes aren't
//	            QUITE finished as yet!  They only offer
//	            suggestions, so I had to include this
//	            little bit of NATIVE Javascript.
//	            I was hoping to be Javascript free on
//	            this project.  Never mind...
//
//
//



var debug = false;


//-------------------------
function checkAndSubmit() { 

    //  OK, since the HTML5 validation is only fleetingly
    //  implemented, we still need to write a BIT of Javascript
    //  to look at some basic client side validation.  I was trying
    //  to avoid ALL javascript, but still, we aren't loading
    //  any libraries or external frameworks, we are using the
    //  Javascript that comes with the browser.

    if (debug) {
        alert('in check and submit');
    }

    if (isValidForm()) {

        var butt = document.getElementById("submit");
        if (debug) {
            alert('in butt click');
        }

        butt.click();
    }
}


//--------------------------
function validPostcode(code) {

      var postcodeRE = new RegExp(/^[0-9]{4}$/);
    
      return postcodeRE.test(code);
}

//--------------------------
function validEmail(email) {

    // this will sort out email injection security attacks.

      // var emailRE = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/);
      var emailRE = new RegExp(/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}$/);
    
      return emailRE.test(email);
}

//-----------------------
function isValidForm()  {

        
        if (!document.contact_form.username.value)  { 
            alert('Please enter your name.'); 
            document.contact_form.username.focus(); 
            return false; 
        }

//        if (!document.contact_form.address1.value)  { 
//            alert('Please enter your address.'); 
//            document.contact_form.address1.focus(); 
//            return false; 
//        }

        if (!document.contact_form.email.value)  { 
            alert('Please enter your email address.'); 
            document.contact_form.email.focus(); 
            return false; 
        }

        if (validEmail(document.contact_form.email.value) == false) {
            alert('Please enter a VALID email address.'); 
            document.contact_form.email.focus(); 
            return false; 
        }

//        if (!document.contact_form.postcode.value)  { 
//            alert('Please enter your postcode.'); 
//            document.contact_form.postcode.focus(); 
//            return false; 
//        }



    if (debug) {
        alert('about to return true');
    }

    return true; 
}


