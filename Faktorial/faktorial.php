<?php
function faktorial($n){
    $hasil = 1;
    for($i = $n; $i >0; $i--){
        $hasil = $hasil * $i; 
    }
    return $hasil;
}
?>

<form method ="post">
    <input type="number" name = "nilai" required>
    <button type ="submit" name="Hitung"> Hitung Angka</button>
</form>

<?php

if(isset($_POST['Hitung'])){
    $n = $_POST['nilai'];
    echo "Hasil faktorial ".$n."! = ".faktorial($n);
}
?>