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
      <a href="">урок 1</a> | <a href="/2.php">урок 2</a>
    </nav>
    <main>
      <?php
        function MultiplicationTable($start, $end)
        {
          $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
          for ($i = $start; $i <= $end; $i++) {
            echo '<td>';
            foreach ($arr as $value) {
              echo $i.' x '.$value.' = '.$i*$value.'<br>';
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
