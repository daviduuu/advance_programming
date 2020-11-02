<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    </select>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <h2><?php echo "David L. Limba";?></h4>
        </div>

        <form id="calculator" action="" method="post">
        <div class="col-4">
          <h3><?php echo "Calculator"; ?></h3>
            <p><?php echo "Input first number:" ?></p>
              <input type="text" name="first_number" placeholder="" required>
            <p><?php echo "Input second number:" ?></p>
              <input type="text" name="second_number" placeholder="" required>
            <p></p>
             <input type="submit" name="sum" value="+">
             <input type="submit" name="sub" value="-">
             <input type="submit" name="mul" value="*">
              <input type="submit" name="div" value="/">
        </form>
          <?php
              if (isset($_POST['sum']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $sum = $first_number + $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$sum;
              }
              if (isset($_POST['sub']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $sub = $first_number - $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$sub;
              }
              if (isset($_POST['mul']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $mul = $first_number * $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$mul;
              }
              if (isset($_POST['div']))
              {
                $first_number = $_POST["first_number"];
                $second_number = $_POST["second_number"];
                $div = $first_number / $second_number;
                echo "<br>";
                echo "<br>";
                echo "Answer: ".$div;
              }
          ?>
        </div>

        <form id="GCD" action="" method="post">
        <div class="col-4">
          <h3><?php echo "Finding GCD"; ?></h3>
            <p><?php echo "Input first number:" ?></p>
              <input type="text" name="first_number" placeholder="" required>
            <p><?php echo "Input second number:" ?></p>
              <input type="text" name="second_number" placeholder="" required>
            <p></p>
            <button type="submit" name="gcd">Submit</button>
            </form>

            <?php
            if(isset($_POST['gcd']))
            {
              $first_number = $_POST['first_number'];
              $second_number = $_POST['second_number'];
              $gcd = $_POST['gcd'];

              if($first_number > $second_number)
              {
                $temp = $first_number;
                $first_number = $second_number;
                $second_number = $temp;
              }
              for($i = 1; $i < ($first_number + 1); $i++ )
              {
                if ($first_number%$i == 0 and $second_number%$i == 0)
                $gcd = $i;
              }
                echo "<br>";
                echo "<br>";
              echo "GCD of $first_number and $second_number is: $gcd";
            }
          ?>

          <style media="screen">
            h2
            {
              position: relative; left: 100px; top: 190px;
            }
            #calculator
            {
              position: relative; left: 400px; top: 70px;
            }
            #GCD
            {
              position: relative; left: 700px; top: -180px;
            }
          </style>
        </div>
      </div>
    </div>
  </body>
</html>
