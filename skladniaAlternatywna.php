<?php
$x=2;
$y=40;
//if
if($x<$y):
    echo "$x mniejsza od $y<br>";
endif;

//if...else
if($x<$y):
    echo "$x mniejsza od $y<br>";
else:
    echo "$x wieksza od $y<br>";
endif;

//if...else if
if($x<$y):
    echo "$x mniejsza od $y<br>";
elseif($x>$y):
    echo "$x wieksza od $y<br>";
else:
    echo "$x rowna $y<br>";
endif;

//switch
switch($x):
    case 2:
        echo "2<br>";
    break;
    case 4:
        echo "4<br>";
    break;
endswitch;

//petla for
for($i=1;$i<=10;$i++):
    echo "$i<br>";
endfor;

//petla foreach
$tab=array(1,2,3,4,5);
foreach($tab as $klucz => $wartosc):
    echo "$wartosc<br>";
endforeach;

//petla while
$i=1;
while($i<=3):
    echo "$i<br>";
    $i++;
endwhile;

//break
for($i=1;;$i++):
    echo "Zmienna i wynosi $i<br>";
    if($i>5) break;
endfor;

//continue - przechodzi do kolejnego cyklu pętli, przerywając wykonywanie obecnego
for($i=0;$i<10;$i++):
    if($i%2 != 0):
        continue;
    endif;
    echo "$i<br>";
endfor;




?>
