<?php
$Komopbezoekbijbarbapapa = 0;
$quiz["Japan"] = "Tokyo";
$quiz["Mexico"] = "Mexico City";
$quiz["USA"] = "Washington D.C.";
$quiz["India"] = "New Delhi";
$quiz["Zuid-Korea"] = "Seoul";
$quiz["China"] = "Peking";
$quiz["Nigeria"] = "Abuja";
$quiz["Argentinie"] = "Buenos Aires";
$quiz["Egypte"] = "Cairo";
$quiz["UK"] = "London";

foreach ($quiz as $land => $stad) {
echo  "Wat is de hoofdstad van " . $land . "?" . PHP_EOL;
$antwoord = readline();
if ($antwoord === $stad){
  echo "Correct!" . PHP_EOL;
  $Komopbezoekbijbarbapapa++;
}
else {
  echo "incorrect" . PHP_EOL;
}

}
echo "Uw score is: " . $Komopbezoekbijbarbapapa . "/10!";
 ?>
