<html>

<head>
  <title>variable static</title>
</head>

<body>
  <h1>variable star</h1>
  <?php
  function test()
  {
    static $a = 0; // dengan static
    echo "Nilai a : ";
    echo $a;
    echo "<br>";
    $a++;
  }
  Test();
  Test();
  Test();
  Test();
  Test();
  ?>
</body>

</html>