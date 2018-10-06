var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab1");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("ContentPlaceHolder1_btnsubscribe").style.display = "block";
        document.getElementById("ContentPlaceHolder1_lblfullname").innerHTML = document.getElementById("ContentPlaceHolder1_txtfullname").value;
        document.getElementById("ContentPlaceHolder1_lbldob").innerHTML = document.getElementById("ContentPlaceHolder1_txtdob").value;
        document.getElementById("ContentPlaceHolder1_lblgender").innerHTML = document.getElementById("ContentPlaceHolder1_ddlgender").value;
        document.getElementById("ContentPlaceHolder1_lblnationality").innerHTML = document.getElementById("ContentPlaceHolder1_ddlnationality").value;
        document.getElementById("ContentPlaceHolder1_lblbobox").innerHTML = document.getElementById("ContentPlaceHolder1_txtpobox").value;
        document.getElementById("ContentPlaceHolder1_lblpocountry").innerHTML = document.getElementById("ContentPlaceHolder1_ddlpocountry").value;
        document.getElementById("ContentPlaceHolder1_lblpocity").innerHTML = document.getElementById("ContentPlaceHolder1_ddlpocity").value;
        document.getElementById("ContentPlaceHolder1_lblcountryofbirth").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcountry").value;
        document.getElementById("ContentPlaceHolder1_lblcityofbirth").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcity").value;
        document.getElementById("ContentPlaceHolder1_lblfathername").innerHTML = document.getElementById("ContentPlaceHolder1_txtfathername").value;
        document.getElementById("ContentPlaceHolder1_lblmothername").innerHTML = document.getElementById("ContentPlaceHolder1_txtmothername").value;
        document.getElementById("ContentPlaceHolder1_lblcontactno").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcountrycode").value + document.getElementById("ContentPlaceHolder1_txtcontactno").value;
        document.getElementById("ContentPlaceHolder1_lblemail").innerHTML = document.getElementById("ContentPlaceHolder1_txtemail").value;
        document.getElementById("ContentPlaceHolder1_lblpassportnumber").innerHTML = document.getElementById("ContentPlaceHolder1_txtpassno").value;
        document.getElementById("ContentPlaceHolder1_lblcountryofissue_a").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcountryofissue").value;
        document.getElementById("ContentPlaceHolder1_lblplaceofissue_a").innerHTML = document.getElementById("ContentPlaceHolder1_ddlplaceofissue").value;
        document.getElementById("ContentPlaceHolder1_lbldateofissue_a").innerHTML = document.getElementById("ContentPlaceHolder1_txtdateofissue").value;
        document.getElementById("ContentPlaceHolder1_lbldateofexpiry_a").innerHTML = document.getElementById("ContentPlaceHolder1_txtdateofexpiry").value;
        document.getElementById("ContentPlaceHolder1_lblcitizenby").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcitizen").value;
        document.getElementById("ContentPlaceHolder1_lblgardian").innerHTML = document.getElementById("ContentPlaceHolder1_ddlrelation").value;
        document.getElementById("ContentPlaceHolder1_lblgardianname").innerHTML = document.getElementById("ContentPlaceHolder1_txtgardianfullname").value;
        document.getElementById("ContentPlaceHolder1_lblbcountryofbirth_g").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcountryofbirth_g").value;
        document.getElementById("ContentPlaceHolder1_lblcityofbirth_g").innerHTML = document.getElementById("ContentPlaceHolder1_ddlcityofbirth_g").value;
        document.getElementById("ContentPlaceHolder1_lblgardiandob").innerHTML = document.getElementById("ContentPlaceHolder1_txtgardiandob").value;
        document.getElementById("ContentPlaceHolder1_lblpassportno").innerHTML = document.getElementById("ContentPlaceHolder1_txtgardianpassportno").value;
        
        document.getElementById("ContentPlaceHolder1_lbldateofissue").innerHTML = document.getElementById("ContentPlaceHolder1_txtgardiandateofissue").value;
        document.getElementById("ContentPlaceHolder1_lblauthority").innerHTML = document.getElementById("ContentPlaceHolder1_ddlissuingauthority").value;
        document.getElementById("ContentPlaceHolder1_lblfileno").innerHTML = document.getElementById("ContentPlaceHolder1_txtfileno").value;
        

    } else {
        document.getElementById("nextBtn").style.display = "block";
        document.getElementById("ContentPlaceHolder1_btnsubscribe").style.display = "none";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab1");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab1");
    y = x[currentTab].getElementsByTagName("input");
    z = x[currentTab].getElementsByTagName("select"); 
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    }
    for (i = 0; i < z.length; i++) {
        // If a field is empty...
        if (z[i].value == "") {
            // add an "invalid" class to the field:
            z[i].className += " invalid";
            // and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}