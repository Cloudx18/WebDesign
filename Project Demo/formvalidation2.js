// Function called when the form is submitted.
// Function validates the form data and returns a Boolean value.
function validateForm() {
    
    // Get references to the form elements:
    var myname = document.getElementById('myname');
	var myemail = document.getElementById('myemail');
		
	
    // Validate!
	//For name field
	var letters = /^[a-zA-Z]+(\s?[a-zA-Z])+?$/; //Contains spaces and letters only
    if (!letters.test(myname.value)) {
        alert('Please ensure your name only contains letters and spaces only!');
        return false;
    }
	
	//For email field
	var emailformat = /^[\w.-]+@[\w-]+(\.[A-Za-z]{2,3}){1,3}$/;
	if (!emailformat.test(myemail.value)){
		alert('Please ensure your email is in the correct format!');
		return false;
	}
	
	

}// End of validateForm() function.



function init() {
    'use strict';
    
    // Confirm that document.getElementById() can be used:
    if (document && document.getElementById) {
        var jobsForm = document.getElementById('jobsForm2');
        jobsForm.onsubmit = validateForm;
		
	}
		
    }
	
} // End of init() function.

// Assign an event listener to the window's load event:
window.onload = init;
