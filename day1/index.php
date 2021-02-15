<?php
require_once 'Game\init.php';

$harimau1 = new Harimau();
echo $harimau1->getInfoHewan();
echo '<hr/>';

$elang1 = new Elang();
$elang1->getInfoHewan();
echo '<hr/>';

$harimau1->serang($elang1);
echo '<hr/>';

$elang1->getInfoHewan();
echo '<hr/>';

$elang1->serang($harimau1);
echo '<hr/>';

$harimau1->getInfoHewan();
echo '<hr/>';