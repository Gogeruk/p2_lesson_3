
// FORM VALUES TO ARRAY AND SEND THEM FOR PHP STUFF
function into_array() {

    // Geting a data for html vals
    form_data = {
        "red1"   : document.getElementById("red1").value,
        "green1" : document.getElementById("green1").value,
        "blue1"  : document.getElementById("blue1").value,
        "red2"   : document.getElementById("red2").value,
        "green2" : document.getElementById("green2").value,
        "blue2"  : document.getElementById("blue2").value,
    };

    // make it json for easy use
    form_data_json = JSON.stringify(form_data);

    // AJAX STUFF. SEND and GET BACK data to form a color in html
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // Resiving json from php color object and decoding it
            finished_json_data = xhttp.responseText;
            finished_data = JSON.parse(finished_json_data);

            // Creting color display
            display = document.createElement("p");
            text_col = document.createTextNode("YOUR MIXED COLOR");
            display.appendChild(text_col);
            display.class = "m-3";
            display.style = "background: rgb("+finished_data["mixed_red"]+", "+finished_data["mixed_green"]+", "+finished_data["mixed_blue"]+");";
            document.getElementById("form").append(display);
        }
    }
    xhttp.open("GET", "mixer.php?q=" + form_data_json, true);
    xhttp.send();
}






















































//
