<<!DOCTYPE html>
<html>
<body>

<form action = "myfile.php" method = "POST">
    <input name = "first" id = "first" />
    <input name = "second" id = "second"/>
    <button onvalidate="validate()" value = "submit">
</form>
<script>
    function validate(){
        var first = document.getElementById("first");
        var second = document.getElementById("second");
        var numberReg = new RegExp("[0-9]*");
        return numberReg.test(first) && numberReg.test(second);
    }

<?php
if($_POST['first'] || $_POST['second']){
    $first = $_POST['first'];
    $second = $_POST['second'];
    function factorial($num){
        $res = 1;
        for($i=1;$i<= $num;$i++){
            $res = $res * $i;
        }
    }
    $res = "";
    for($i=$first;$i<=$second;$i++){
        $res = $res . "\n" . factorial($i);
    }
    echo $res
}
?>

</body>
</html>
