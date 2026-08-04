<!DOCTYPE html>
<html>
<head>
    <title>AJAX with PHP</title>
</head>
<body>

<h2>Retrieve Data from TXT File Using XMLHttpRequest</h2>

<button onclick="loadData()">Load Data</button>

<div id="result"></div>

<script>
function loadData() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    };

    xhr.open("GET", "hi.txt", true);
    xhr.send();
}
</script>

</body>
</html>