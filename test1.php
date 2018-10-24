<html>
<head>
    <title>Titel</title>

    <style>
        #aussen{
            position: relative;
            width: 190px;
            height: 190px;
            left: 300px;
            border: blue;
        }

        #innen{
            position: relative;
            border yellow;
        }
    </style>

</head>
<body>
<div id="aussen">
    <div id="innen">
        Text
    </div>
</div>

<form action="test3.php" method="get" >
    <input type="text" name="eingabe">
<button>Abschicken</button>


    <?php

$a="Hans";
$b="33";
echo "<a href='test3.php?name=$a&alter=$b' >Link</a>";
?>

    
</form>
</body>
</html>