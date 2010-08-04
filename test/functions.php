<?
  include "../pFunctions/functions.php";

  $a = array(1,2,3,4,5);
  $b = array($a,$a);

  echo "<br />Printing Single Array <br />";  
  echo printArray($a);
  echo "<br />And an array of arrays <br />";
  echo printArray($b);

  echo "<br />stackedBar<br />";
  $graphID = "testStackedBar";
  $values  = $b;
  $categories = array('een','twee');
  $keys       = array('k1','k2','k3','k4','k5');
  $theme      = "dontcare";
  echo stackedBar($graphID, $values, $categories, $keys, $theme);
?>

