<?php 
$N = 359297461689;
echo 'Исходные данные N: '.$N.';';

$mass = decompositionOfTheNumber($N);
$answer = sorts($mass);
echo '<br>Ответ: '.json_encode($answer);

function decompositionOfTheNumber ($number) {
    $number = ''.$number.'';
    $answer = array();
    for($i = 0; $i < strlens($number); $i++ ){
        $answer[] = "" + $number[$i];   
    }
    return $answer;
}

function sorts ($mass){
    if ($mass){
        for ($i = 0; $i < counts($mass) - 1 ; $i++){
            for ($j = 0; $j < counts($mass) - $i -1; $j++){
                if ($mass[$j] > $mass[$j + 1]){
                    $perem = $mass[$j];
                    $mass[$j] = $mass[$j + 1];
                    $mass[$j + 1] = $perem;
                }             
            }        
        }
        return $mass;
    }
}

function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}

function strlens($str){
    $i = 0;            
    while ($str[$i] != ""){
        $i++;
    }
    return $i;
}
?>