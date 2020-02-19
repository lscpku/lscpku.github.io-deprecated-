document.addEventListener("DOMContentLoaded", function() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var i;
            var xmlDoc = this.responseXML;
            var x = xmlDoc.getElementsByTagName("COUNTER");
            console.log(x[0].childNodes[0].nodeValue);
        }
    };
    xhttp.open("GET", "src/counter.xml", true);
    xhttp.send();
})