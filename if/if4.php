<?php
$nilai = 85;

if($nilai < 1){
    echo "Nilai : $nilai\n";
    echo "Maaf, nilai minimal 1";
}elseif($nilai < 60){
    echo "Nilai : $nilai\n";
    echo "Gradde : E";
}elseif($nilai <70){
    echo "Nilai : $nilai\n";
    echo "Grade : D";
}elseif($nilai < 80){
    echo "Nilai : $nilai\n";
    echo "Grade : C";
}elseif($nilai < 90){
    echo "Nilai : $nilai\n";
    echo "Grade : B"; 
}elseif($nilai <= 100){
    echo "Nilai : A";
}else{
    echo "MAaf Nilai Tidak SAh";
}

?>