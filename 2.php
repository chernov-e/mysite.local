<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <h1><?php echo '<p>Hello, <b>NIX Education</b></p>'; ?></h1>
    </header>
    <nav>
      <a href="/1.php">урок 1</a> | <a href="">урок 2</a> | <a href="/3.php">урок 3</a>
    </nav>
    <main>
      <?php
        function colorSymbol($s)
        {
          $arr = str_split($s, 1);
          foreach ($arr as $value) {
            switch ($value) {
              case 1:
                echo "<span style='color:red;'>$value</span>";
              break;
              case 2:
                echo "<span style='color:green;'>$value</span>";
              break;
              case 3:
                echo "<span style='color:yellow;'>$value</span>";
              break;
              case 4:
                echo "<span style='color:blue;'>$value</span>";
              break;
              default:
                echo "<span>$value</span>";
              break;
            }
          }
        }


        function MultiplicationTable($start, $end)
        {
          $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
          for ($i = $start; $i <= $end; $i++) {
            echo "<td style='background:lightgray;'>";
            foreach ($arr as $value) {
              echo '<span>'.colorSymbol($i);
              echo ' x ';
              echo colorSymbol($value);
              echo ' = ';
              echo colorSymbol($i*$value).'</span><br>';
            }
            echo '</td>';
          }
        }
      ?>
      <table bordercolor='grey' border="1">
        <tbody>
          <tr><?php MultiplicationTable(1, 5); ?>
          </tr>
          <tr><?php MultiplicationTable(6, 10);?>
          </tr>
        </tbody>
      </table>
    </main>
    <footer>© 2021 mysite.local</footer>
  </body>
</html>
