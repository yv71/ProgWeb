
<?php
$c = $_POST["affichage"].$_POST["clavier"];
if (isset($_POST["resultat"])) {
    $r = $_POST["affichage"];
    eval("\$c=$r;");
}
if (isset($_POST["reset"])) {
    $c = "";
}
if (isset($_POST["log10"])) {
    $c = log10( $_POST["affichage"]);
}
if (isset($_POST["pow"])) {
    $c = $_POST["affichage"].="**";
}
if (isset($_POST["exp"])) {
    $c = exp( $_POST["affichage"]);;
}
?>
<html>

<head></head>

<body>
    <p></p>
    <form action="index.php" method="post">
        <input type="text" name="affichage" value="<?php echo $c;?>"/>
        <br />
        <input type="submit" name="clavier" value="7" />
        <input type="submit" name="clavier" value="8" />
        <input type="submit" name="clavier" value="9" />
        <input type="submit" name="clavier" value="+" />
        <br />
        <input type="submit" name="clavier" value="4" />
        <input type="submit" name="clavier" value="5" />
        <input type="submit" name="clavier" value="6" />
        <input type="submit" name="clavier" value="-" />
        <br />
        <input type="submit" name="clavier" value="1" />
        <input type="submit" name="clavier" value="2" />
        <input type="submit" name="clavier" value="3" />
        <input type="submit" name="clavier" value="*" />
        <br />
        <input type="submit" name="reset" value="CE" />
        <input type="submit" name="clavier" value="0" />
        <input type="submit" name="clavier" value="/" />
        <input type="submit" name="resultat" value="=" />
        <br />       
        <input type="submit" name="log10" value="log10" />
        <input type="submit" name="exp" value="exp" />
        <input type="submit" name="pow" value="pow" />

    </form>
</body>

</html>


