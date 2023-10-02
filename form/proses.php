<?php

//Multiple data Input
if(isset($_POST['nama']) && isset($_POST['dari'])){
    echo "nama : ".$_POST['nama']."</br>";
    $dari = $_POST['dari'];
    // var_dump($dari);
    echo "Kenal MDP Dari :";
    //menggunakan foreach untuk menampilkan data array
    foreach ($dari as $value) { 
        echo"<li>".$value."</li>";
    }

}

?>