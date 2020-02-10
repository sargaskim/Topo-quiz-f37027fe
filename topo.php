<?PHP

$goed = array();

$computter = "Welke hoofdstad heeft ";
$computterF_1 = "Helaas,  ";
$computterF_2 = "is niet de hoofdstad van ";
$computterF_3 = "Het correcte antwoord is: ";

$topo["Japan"] = "Tokyo";  
$topo["Mexico"] = "Mexico City";  
$topo["USA"] = "Washington D.C.";  
$topo["India"] = "New Delhi";  
$topo["Zuid-Korea"] = "Seoul";  
$topo["China"] = "Peking";  
$topo["Nigeria"] = "Abuja";  
$topo["Argentina"] = "Buenos Aires";  
$topo["Egypt"] = "Cairo";  
$topo["UK"] = "Londen";  

foreach ($topo as $vraag => $stad){
    echo $computter. $vraag. "? ";
    $antwoord = readline("");
    if ($antwoord == $stad){
        echo "Correct!".PHP_EOL;
        array_push($goed, $antwoord);
    }
    else if ($antwoord !== $stad){
        echo $computterF_1. $antwoord. $computterF_2. $vraag.PHP_EOL. $computterF_3. $stad.PHP_EOL. "...".PHP_EOL;
    }
}

echo "Je hebt ". (count($goed)). " van de 10 goed geraden!";


?>