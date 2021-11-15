<?php 
$A = 123 ; // variable global
function test() {
  global $A ; // variable local
  echo "Nlai A dalam fungsi = $A \n";
} 
test();
echo "Nilai A luar fungsi = $A \n";
