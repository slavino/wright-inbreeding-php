<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once "Sex.php";
require_once "Dog.php";

//LEVEL 5
$fffmff = new Dog(100, "FATHER of BROK Veľká voda" , Sex::MALE, "SPKP0231/12");
$fffmfm = new Dog(101, "MOTHER of BROK Veľká voda" , Sex::FEMALE, "SPKP0233/12");

//LEVEL 4
$fffff = new Dog(1, "BUK od Kopčana" , Sex::MALE, "SPKP11231/17");
$ffffm = new Dog(2, "CHETA z Radomskej doliny" , Sex::FEMALE,"SPKP11211/17");
$fffmf = new Dog(3, "BROK Veľká voda" , Sex::MALE, "SPKP11231/17", $fffmff, $fffmfm);
$fffmm = new Dog(4, "BÁRA z Imriškovho dvora" , Sex::FEMALE,"SPKP11211/17");
$ffmff = new Dog(5, "JASMIN spod Hostihory" , Sex::MALE, "SPKP11231/17");
$ffmfm = new Dog(6, "NORA spod Hostihory" , Sex::FEMALE,"SPKP11211/17");
$ffmmf = new Dog(7, "DAK Chochuľa" , Sex::MALE, "SPKP11231/17");
$ffmmm = new Dog(8, "TAJGA Zolná" , Sex::FEMALE,"SPKP11211/17");
$fmfff = new Dog(9, "MIXO z Lehôtky" , Sex::MALE, "SPKP11231/17");
$fmffm = new Dog(10, "BETY z Tomibezu" , Sex::FEMALE,"SPKP11211/17");
$fmfmf = new Dog(11, "TEDO spod Kokavskej Varty" , Sex::MALE, "SPKP11231/17");
$fmfmm = new Dog(12, "ALIS spod Kokavskej Varty" , Sex::FEMALE,"SPKP11211/17");
$fmmff = new Dog(11, "TEDO spod Kokavskej Varty" , Sex::MALE, "SPKP11231/17");
$fmmfm = new Dog(14, "INKA z Hámra" , Sex::FEMALE,"SPKP11211/17");
$fmmmf = new Dog(15, "ARGO Radaňovka" , Sex::MALE, "SPKP11231/17");
$fmmmm = new Dog(16, "MINA z Laščíka" , Sex::FEMALE,"SPKP11211/17");

$mffff = new Dog(17, "KAM z Hámra" , Sex::MALE, "SPKP11231/17");
$mfffm = new Dog(18, "MONA Krššákov dvor" , Sex::FEMALE,"SPKP11211/17");
$mffmf = new Dog(3, "BROK Veľká voda" , Sex::MALE, "SPKP11231/17", $fffmff, $fffmfm);
$mffmm = new Dog(14, "INKA z Hámra" , Sex::FEMALE,"SPKP11211/17");
$mfmff = new Dog(21, "ARGO z Chlebníc" , Sex::MALE, "SPKP11231/17");
$mfmfm = new Dog(22, "ALBA z Dedinského potoka" , Sex::FEMALE,"SPKP11211/17");
$mfmmf = new Dog(23, "BLESK z Černovej" , Sex::MALE, "SPKP11231/17");
$mfmmm = new Dog(24, "UMA Nižná Voľa" , Sex::FEMALE,"SPKP11211/17");
$mmfff = new Dog(25, "DANO z Gregorivky" , Sex::MALE, "SPKP11231/17");
$mmffm = new Dog(26, "NAIWA Boboviska" , Sex::FEMALE,"SPKP11211/17");
$mmfmf = new Dog(27, "BARON z Babového dvora" , Sex::MALE, "SPKP11231/17");
$mmfmm = new Dog(28, "GERA Dekanova" , Sex::FEMALE,"SPKP11211/17");
$mmmff = new Dog(29, "AJAX Bucník" , Sex::MALE, "SPKP11231/17");
$mmmfm = new Dog(30, "ADA Baňa" , Sex::FEMALE,"SPKP11211/17");
$mmmmf = new Dog(31, "CHENO Dolište" , Sex::MALE, "SPKP11231/17");
$mmmmm = new Dog(32, "IZRA z Laščíka" , Sex::FEMALE,"SPKP11211/17");

//LEVEL 3
$ffff = new Dog(33, "KARON Dubová stráň" , Sex::MALE, "SPKP11231/17", $fffff, $ffffm);
$fffm = new Dog(34, "CIBA zo Žliabkovej" , Sex::FEMALE,"SPKP11211/17", $fffmf, $fffmm);
$ffmf = new Dog(35, "SAGO spod Hostihory" , Sex::MALE,"SPKP11211/17", $ffmff, $ffmfm);
$ffmm = new Dog(36, "VANDA Zolná" , Sex::FEMALE,"SPKP11211/17", $ffmmf, $ffmmm);
$fmff = new Dog(37, "RET z Lehôtky" , Sex::MALE, "SPKP11231/17", $fmfff, $fmffm);
$fmfm = new Dog(38, "EŇA spod Rovenca" , Sex::FEMALE,"SPKP11211/17", $fmfmf, $fmfmm);
$fmmf = new Dog(39, "CHIT z Prievrany" , Sex::MALE,"SPKP11211/17", $fmmff, $fmmfm);
$fmmm = new Dog(40, "AJDA od Partilu" , Sex::FEMALE,"SPKP11211/17", $fmmmf, $fmmmm);

$mfff = new Dog(41, "SÁLIK Krššákov dvor" , Sex::MALE, "SPKP11231/17", $mffff, $mfffm);
$mffm = new Dog(42, "INKA z Prievrany" , Sex::FEMALE,"SPKP11211/17", $mffmf, $mffmm);
$mfmf = new Dog(43, "ARIS z Úšustu" , Sex::MALE,"SPKP11211/17", $mfmff, $mfmfm);
$mfmm = new Dog(44, "DARA spod Hirky" , Sex::FEMALE,"SPKP11211/17", $mfmmf, $mfmmm);
$mmff = new Dog(45, "CHAN Bukas" , Sex::MALE, "SPKP11231/17", $mmfff, $mmffm);
$mmfm = new Dog(46, "BARA Pitaková" , Sex::FEMALE,"SPKP11211/17", $mmfmf, $mmfmm);
$mmmf = new Dog(47, "FAGO z Rokytova" , Sex::MALE,"SPKP11211/17", $mmmfm, $mmmff);
$mmmm = new Dog(48, "KIRA Rojčianka" , Sex::FEMALE,"SPKP11211/17", $mmmmf, $mmmmm);

//LEVEL 2
$fff = new Dog(49, "EVAR Rúbaný vrch" , Sex::MALE, "SPKP11231/17", $ffff, $fffm);
$ffm = new Dog(50, "AJDA z Uhorského" , Sex::FEMALE,"SPKP11211/17", $ffmf, $ffmm);
$fmf = new Dog(51, "BARI z Hruškove dvora" , Sex::MALE,"SPKP11211/17", $fmff, $fmfm);
$fmm = new Dog(52, "AJA Vojles Lešť" , Sex::FEMALE,"SPKP11211/17", $fmmf, $fmmm);

$mff = new Dog(53, "MAX z Prievrany" , Sex::MALE, "SPKP11231/17", $mfff, $mffm);
$mfm = new Dog(54, "ANGIE Vyšné" , Sex::FEMALE,"SPKP11211/17", $mfmf, $mfmm);
$mmf = new Dog(55, "ARGO Kerenová" , Sex::MALE,"SPKP11211/17", $mmff, $mmfm);
$mmm = new Dog(56, "ANKA zo Záhradnej" , Sex::FEMALE,"SPKP11211/17", $mmmf, $mmmm);


//LEVEL 1
$ff = new Dog(57, "LUX Čerešňový bok" , Sex::MALE,"SPKP11211/15", $fff, $ffm);
$fm = new Dog(58, "CEDRA z Padala" , Sex::FEMALE, "SPKP11231/15", $fmf, $fmm);
$mf = new Dog(59, "DON z Prosného" , Sex::MALE,"SPKP11210/15", $mff, $mfm);
$mm = new Dog(60, "ELZA spod Sobrany" , Sex::FEMALE, "SPKP11230/15", $mmf, $mmm);

//LEVEL 0
$mother = new Dog(61, "FESTA z Poliakovca" , Sex::FEMALE, "SPKP11231/17", $mf, $mm);
$father = new Dog(62, "SULTÁN z Prievrany" , Sex::MALE,"SPKP/15948", $ff, $fm);

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
