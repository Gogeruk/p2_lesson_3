
function ran_col() {

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
                display.style = "background: rgb(" + finished_data[0] + ", " + finished_data[1] + ", " + finished_data[2] + ");";
                document.getElementById("form").append(display);
            }
        }
        xhttp.open("GET", "random_col.php", true);
        xhttp.send();
}
