<?php
$a = "1,00";

if (preg_match("#^[0-9]{1,6}[,.]*[0-9]{2}$#", $a)) {
    echo "success ";
} else {
    echo "error ";
}

$b = "F526348524";

if (preg_match("#^F[1-9]{9}$#", $b)) {
    echo "vrai ";
} else {
    echo "faux ";
}

$c = "06.58 87 90 66";

if (preg_match("#^(0|\+33)[1-9]([\s\-._]*[0-9]{2}){4}$#", $c)) {
    echo "success ";
} else {
    echo "error ";
}

$d = "debu.remi@gmail.com";

if (preg_match("#^[a-zA-Z0-9.]{1,20}@[a-z]{1,10}\.[a-z]{1,5}$#", $d)) {
    echo "vrai ";
} else {
    echo "faux ";
}

$e = "2 69 01 49 588 157 80";

if (preg_match("#^[12][\s\-._]*[0-9]{2}[\s\-._]*((0[1-9])|(1[0-2]))[\s\-._]*[0-9][1-9]([\s\-._]*[0-9]{3}){2}[\s\-._]*[0-9]{2}$#", $e)) {
    echo "success ";
} else {
    echo "error ";
}

$f = "apo.uiu/er@-_";

if (preg_match("#^[A-Za-z0-9-_@./]{5,20}$#", $f)) {
    echo "-vrai- ";
} else {
    echo "-faux- ";
}
