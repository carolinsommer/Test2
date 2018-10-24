
<html>
    <head>
        <title>Titel</title>
        <script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>


<body>
    <div >
        <img id="erdbeeren" src="erdbeeren.jpg">
    </div>

    <div id="ananas">
        <img src="ananas.jpg" >
    </div>

    <button onclick="$('#erdbeeren').hide();">Ausblenden</button>
    <button onclick="$('#erdbeeren').fadeToggle();">Einblenden</button>
    <button onclick="$('#erdbeeren').attr('src','ananas.jpg');">Ananas</button>

    <button onclick="$('img').attr('src','burg.jpg');">bessere Burg</button>


<a>Hier sollte die Variable übergeben werden</a>
<?php
$tz= $_GET["eingabe"];
echo $tz;
?>

</body>


</html>