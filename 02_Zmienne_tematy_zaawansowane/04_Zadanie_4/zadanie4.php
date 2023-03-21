<?php

/*Zadanie 4
Stwórz funkcję remote($button, &$current), która będzie symulowała prosty pilot do zmiany głośności
Funkcja jako pierwszy argument przyjmuje napis (string) up lub down
Stwórz w funkcji zmienną statyczną $currentVolume z wartością początkową 30
Gdy argument funkcji to up, wartość $currentVolume ma być zwiększona o 1 ale maksymalna wartość to 35
Gdy argument funkcji to down, wartość $currentVolume ma być zmniejszona o 1 ale minimalna wartość to 0
W przypadku przekroczenia wartości granicznych np. up gdy aktualna wartość volume to 35 funkcja ma zwrócić false, w innych przypadkach funkcja ma zwrócić true
Dodatkowo do zmiennej przekazanej przez referencje jako drugi argument przypisz aktualną wartość głośności
Wypisz po każdym wywołaniu funkcji aktualną wartość głośności wg. wzoru Volume: X
Przykładowe wywołanie

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 31

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 32

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 33

$isOk = remote('up', $curr);    //zmienna $isOk ma wartość false
echo 'Volume: ' . $curr;        //Volume: 33

$isOk = remote('down', $curr);  //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 32

$isOk = remote('down', $curr);  //zmienna $isOk ma wartość true
echo 'Volume: ' . $curr;        //Volume: 31
` */