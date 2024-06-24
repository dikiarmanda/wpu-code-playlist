<?php
define('NAMA', 'Diki Armanda');
echo NAMA;
echo "<br>";

const UMUR = 23;
echo UMUR;
echo "<br>";

class Coba
{
    const NAMA = 'Diki Armanda';
}

echo Coba::NAMA;

echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";