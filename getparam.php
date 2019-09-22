<?php
  header('Content-type: application/json');

  include "script-oop-paral.php";
  $a1 = (int)$_GET['a1'];
  $b1 = (int)$_GET['b1'];
  $c1 = (int)$_GET['c1'];
  $a2 = (int)$_GET['a2'];
  $b2 = (int)$_GET['b2'];
  $c2 = (int)$_GET['c2'];
  $a3 = (int)$_GET['a3'];
  $b3 = (int)$_GET['b3'];
  $c3 = (int)$_GET['c3'];

  $Paralls =[
    new Parall($a1,$b1,$c1),
    new Parall($a2,$b2,$c2),
    new Parall($a3,$b3,$c3)
  ];

  foreach ($Paralls as  $Parall) {
    $Area = ($Parall -> getArea());
    $Volume =($Parall -> getVolume());
    $risolu[]=['a' => $Parall -> a,
               'b' => $Parall -> b,
               'c' => $Parall -> c,
              'Area' => $Area,
              'Volume' =>$Volume
              ];

  }



  echo json_encode($risolu);


?>
