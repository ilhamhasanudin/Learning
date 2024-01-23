<?php 
// constant( ) adalah indetifier untuk menyimpan sebuah nilai 
// bedanya dengan varialbel nilanya tidak dapat di ubah 

// define() tidak dapat di masukan di class maupun function 
// const;  dapat di masukan di class maupun function 

// conth

define('NAMA', 'Ilham nurhasanudin' );
const Umur = 21;

echo NAMA;
echo "<hr>";
echo Umur;

// MAGIC CONSTANT
// 1. __FILE__
// 2. __LINE__
// 3. __DIR__
// 4. __FUNCTION__
// 5. __CLASS__
// 6. __TRAIT__
// 7. __METHOD__
// 8. __NAMESPACE__

// cnth:
echo "<hr>";
echo "ini file" . __FILE__;
echo "<hr>";
echo "ini dir" . __DIR__;
echo "<hr>";
echo "ini line" . __LINE__;




?>