<?php
// $_GET bir Süper global değişkendir.
// Süper global değişkenler, her zaman tüm kapsamlarda bulunan yerleşik değişkenlerdir.
// PHP $_GET, bir HTTP GET isteği gönderdikten sonra verileri toplamak için kullanılır.

error_reporting(E_ALL);

$number = $_GET["number"];
if( $number%3 == 0){
    echo "Girdiğiniz sayı 3'e bölünebilir.";
}
else{
    $remainder = $number%3;
    $first_number = $number + (3-$remainder);
    echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $first_number'dır.";
}

?>
