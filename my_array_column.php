<?php
function my_array_column($array, $column) {
  $result = array();
  
  foreach ($array as $row) {
    if (isset($row[$column])) {
      $result[] = $row[$column];
    }
  }
  
  return $result;
}

$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $last_names = my_array_column($a, 'last_name');
  print_r($last_names);