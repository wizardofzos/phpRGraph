<?php     // These are the functions for
          // creating RGraph graphs

function stackedBar($graphID, $values, $categories, $keys, $theme){
  // $values should be an array of value-arrays
  // $theme is not used (yet) we will use something 'ugly' for now ;)
 

  // sanity-checks :)
  if(count($values) != count($categories)) echo "values != categories";
  if(count($values[0]) != count($keys)) echo "keys and value-pairs don't match"; 
  $o  = "var $graphID = new RGraph.Bar('$graphID',";
  $o .= printArray($values);
  $o .= ");";
  $o .= setValue($graphID, 'key', 'value'); 
  
  echo $o;
  
}


function setValue($graphID, $key, $value){
  // prints a "Set"-line
  if (!is_numeric($value)) 
    $value = "'" . $value . "'";  // quote the literals
  $o  = $graphID . ".Set('" . $key . "', " . $value . ");";
  return $o;
}

function printArray($array){
  // 'prints' an Array (RGraph style)
  // will accept arrays of values or arrays of arrays

  $c    = "";   // for the comma :)
  $o    = "";   // the output

  foreach($array as $item){
    if (is_array($item)){
      $o .= $c . printArray($item);
    }
    else{
        $o .= $c . $item;
    }
    $c = ',';
  }
  
  $o = "[" . $o . "]";

  return $o;
}

//  end of Functions File
?>

