<html>
    <head>
        <title>Konversi Rupiah ke mata uang lain</title>
</head>
<body>
    <h3>Konversi Mata Uang (Rupiah ke Dolar, Won, dan Riyal)</h3>
    <main>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET">
    Rupiah: <input type ="text" name="rupiah" size=10><br>
    <input type="radio" value="dolar" name="scale"> Dolar <br>
    <input type="radio" value="won" name="scale"> Won <br>
    <input type="radio" value="riyal" name="scale"> Riyal <br>
   <br>
    <input type = "submit" name="submit" value="convertion">
</form>

<?php
if (array_key_exists('rupiah',$_GET)){
    $scale = $_GET['scale'];
    $rupiah = $_GET['rupiah'];
    $firstlenght = strlen($_GET['rupiah']);

    if(($firstlenght > 0) && (is_numeric($_GET['rupiah']))){
      if ($scale == "dolar"){
        echo "This is the conversion >>  ";
        echo "Dolar (USA) : ";
        $ok_d= round($rupiah*0.000070, 2);
        echo "$ok_d";
    }
    if ($scale == "won"){
        echo "This is the conversion >>  ";
        echo "Won (Korea) : ";
        $ok_w= round($rupiah*0.082, 2);
        echo "$ok_w";
    }
    if ($scale == "riyal"){
        echo "This is the conversion >>  ";
        echo "Riyal (Saudi) : ";
        $ok_r= round($rupiah*0.00026, 2);
        echo "$ok_r";
    }
}else{
    print "<span style = \"color:red\">*Please Enter A Valid Temperature.</span>";
}
}
?>
</main>
</body>
</html>