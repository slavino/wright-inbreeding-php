<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once "Sex.php";
require_once "Dog.php";


//LEVEL 4
$fffff = new Dog(1, "Nero" , Sex::MALE, "SPKP11231/17");
$ffffm = new Dog(2, "Inge" , Sex::FEMALE,"SPKP11211/17");
$fffmf = new Dog(3, "Bojar" , Sex::MALE, "SPKP11231/17");
$fffmm = new Dog(4, "Alis" , Sex::FEMALE,"SPKP11211/17");
$ffmff = new Dog(5, "Brok" , Sex::MALE, "SPKP11231/17");
$ffmfm = new Dog(6, "Vron" , Sex::FEMALE,"SPKP11211/17");
$ffmmf = new Dog(7, "Jules" , Sex::MALE, "SPKP11231/17");
$ffmmm = new Dog(8, "Neda" , Sex::FEMALE,"SPKP11211/17");
$fmfff = new Dog(9, "Punta(a)" , Sex::MALE, "SPKP11231/17");
$fmffm = new Dog(10, "Hexa" , Sex::FEMALE,"SPKP11211/17");
$fmfmf = new Dog(11, "Jules" , Sex::MALE, "SPKP11231/17");
$fmfmm = new Dog(12, "Neda" , Sex::FEMALE,"SPKP11211/17");
$fmmff = new Dog(13, "Dar(b)" , Sex::MALE, "SPKP11231/17");
$fmmfm = new Dog(14, "Vera" , Sex::FEMALE,"SPKP11211/17");
$fmmmf = new Dog(15, "Zert" , Sex::MALE, "SPKP11231/17");
$fmmmm = new Dog(16, "Hexa" , Sex::FEMALE,"SPKP11211/17");

$mffff = new Dog(17, "Charles" , Sex::MALE, "SPKP11231/17");
$mfffm = new Dog(18, "Kira" , Sex::FEMALE,"SPKP11211/17");
$mffmf = new Dog(19, "Jules" , Sex::MALE, "SPKP11231/17");
$mffmm = new Dog(20, "Neda" , Sex::FEMALE,"SPKP11211/17");
$mfmff = new Dog(21, "Alter" , Sex::MALE, "SPKP11231/17");
$mfmfm = new Dog(22, "Milka" , Sex::FEMALE,"SPKP11211/17");
$mfmmf = new Dog(23, "Unkas" , Sex::MALE, "SPKP11231/17");
$mfmmm = new Dog(24, "Asta" , Sex::FEMALE,"SPKP11211/17");
$mmfff = new Dog(13, "Dar(c)" , Sex::MALE, "SPKP11231/17");
$mmffm = new Dog(26, "Vera" , Sex::FEMALE,"SPKP11211/17");
$mmfmf = new Dog(27, "Remo" , Sex::MALE, "SPKP11231/17");
$mmfmm = new Dog(28, "Besy" , Sex::FEMALE,"SPKP11211/17");
$mmmff = new Dog(29, "Nico" , Sex::MALE, "SPKP11231/17");
$mmmfm = new Dog(30, "Ori" , Sex::FEMALE,"SPKP11211/17");
$mmmmf = new Dog(31, "Trux" , Sex::MALE, "SPKP11231/17");
$mmmmm = new Dog(32, "Xzora" , Sex::FEMALE,"SPKP11211/17");

//LEVEL 3
$ffff = new Dog(33, "Mates" , Sex::MALE, "SPKP11231/17", $fffff, $ffffm);
$fffm = new Dog(34, "Aga" , Sex::FEMALE,"SPKP11211/17", $fffmf, $fffmm);
$ffmf = new Dog(35, "Filou" , Sex::MALE,"SPKP11211/17", $ffmff, $ffmfm);
$ffmm = new Dog(36, "Zora(a)" , Sex::FEMALE,"SPKP11211/17", $ffmmf, $ffmmm);
$fmff = new Dog(37, "Oskar" , Sex::MALE, "SPKP11231/17", $fmfff, $fmffm);
$fmfm = new Dog(36, "Zora(b)" , Sex::FEMALE,"SPKP11211/17", $fmfmf, $fmfmm);
$fmmf = new Dog(9, "Punta(b)" , Sex::MALE,"SPKP11211/17", $fmmff, $fmmfm);
$fmmm = new Dog(40, "Jena" , Sex::FEMALE,"SPKP11211/17", $fmmmf, $fmmmm);

$mfff = new Dog(41, "Ben" , Sex::MALE, "SPKP11231/17", $mffff, $mfffm);
$mffm = new Dog(36, "Zora(c)" , Sex::FEMALE,"SPKP11211/17", $mffmf, $mffmm);
$mfmf = new Dog(43, "Forest" , Sex::MALE,"SPKP11211/17", $mfmff, $mfmfm);
$mfmm = new Dog(44, "Asta" , Sex::FEMALE,"SPKP11211/17", $mfmmf, $mfmmm);
$mmff = new Dog(9, "Punta(c)" , Sex::MALE, "SPKP11231/17", $mmfff, $mmffm);
$mmfm = new Dog(46, "Hexa" , Sex::FEMALE,"SPKP11211/17", $mmfmf, $mmfmm);
$mmmf = new Dog(47, "Jules" , Sex::MALE,"SPKP11211/17", $mmmfm, $mmmff);
$mmmm = new Dog(48, "Neda" , Sex::FEMALE,"SPKP11211/17", $mmmmf, $mmmmm);

//LEVEL 2
$fff = new Dog(13, "Dar(a)" , Sex::MALE, "SPKP11231/17", $ffff, $fffm);
$ffm = new Dog(50, "Elza" , Sex::FEMALE,"SPKP11211/17", $ffmf, $ffmm);
$fmf = new Dog(51, "Atty(a)" , Sex::MALE,"SPKP11211/17", $fmff, $fmfm);
$fmm = new Dog(52, "Dona" , Sex::FEMALE,"SPKP11211/17", $fmmf, $fmmm);

$mff = new Dog(53, "Chlup" , Sex::MALE, "SPKP11231/17", $mfff, $mffm);
$mfm = new Dog(54, "Kessy" , Sex::FEMALE,"SPKP11211/17", $mfmf, $mfmm);
$mmf = new Dog(55, "Oskar" , Sex::MALE,"SPKP11211/17", $mmff, $mmfm);
$mmm = new Dog(36, "Zora(d)" , Sex::FEMALE,"SPKP11211/17", $mmmf, $mmmm);


//LEVEL 1
$ff = new Dog(57, "Endy" , Sex::MALE,"SPKP11211/15", $fff, $ffm);
$fm = new Dog(58, "Bona" , Sex::FEMALE, "SPKP11231/15", $fmf, $fmm);
$mf = new Dog(59, "Oran" , Sex::MALE,"SPKP11210/15", $mff, $mfm);
$mm = new Dog(51, "Atty(b)" , Sex::FEMALE, "SPKP11230/15", $mmf, $mmm);

//LEVEL 0
$mother = new Dog(61, "Ebony" , Sex::FEMALE, "SPKP11231/17", $mf, $mm);
$father = new Dog(62, "Art" , Sex::MALE,"SPKP/15948", $ff, $fm);

$puppy1 = new Dog(63, "Puppy 1", Sex::MALE, "unbornYet", $father, $mother);



header('Content-Type: application/json');
$puppy1->walk("", $puppy1);

//echo json_encode($puppy1);
$puppy1->calculateWrightIndex(true);

//$names = array();
//foreach ($puppy1->getTree() as $key => $val) {
//    echo $val->getName(). "\r\n";
//}

?>
