<?php
$A = 123; // variable global
function test()
{
  $A = "Test"; // variable local
  echo "Nilai A dalam fungsi = $A \n";
}
test();
echo "Nilai A luar fungsi = $A \n";
