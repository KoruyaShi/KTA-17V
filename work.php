<?php

include 'fun.php';

back_home();

//Array(workdays)
$array = array ('Esmaspaev',
                'Teisipaev',
                'Kolmapaev',
                'Neljapaev',
                'Reede');
$day = "reede";

#echo strtoupper($day)."<br>";

#var_dump($array);

for ($i =0; $i < count($array); $i++){
    if(strtoupper($array[$i]) == strtoupper($day)){
    echo "<strong>".$array[$i]." is a workday</strong><br>";   
    }elseif($day == 'Laupaev' || $day == 'Puhapaev'){
        echo "$day is weekend";
        die;
    }
}
$mat = "matemaatika";
$kem = "keemia";
$fys = "fuusika";

$grades = array("Peeter" => array($mat => 5, $kem => 3, $fys => 3),
               "Ants" => array($mat => 4, $kem => 4, $fys => 3),
                "Mari" => array($mat => 5, $kem => 5, $fys => 4));

echo "Peeter hinne aines ".$mat." on ".$grades['Peeter'][$mat];
echo "<br>";
$gradesId = array_keys($grades);
#print_r($gradesId);

for ($i = 0; $i < count($gradesId); $i++){
    echo $gradesId[$i]."<br>";
    foreach($grades[$gradesId[$i]] as $predmet => $grade){
        echo $predmet." : ".$grade."<br>";
    }
}

?>