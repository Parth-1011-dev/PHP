<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest Callback Example</title>
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    myFunction(this);
                }
            };

            xhttp.open("GET", "hi.txt", true);
            xhttp.send();
        }

        function myFunction(xhttp) {
            document.getElementById("demo").innerHTML =
                xhttp.responseText;
        }
    </script>
</head>
<body>

    <h2>Retrieve Data from TXT File</h2>

    <button type="button" onclick="loadDoc()">
        Get Data
    </button>

    <p id="demo"></p>

</body>
</html>