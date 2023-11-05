<!DOCTYPE html>
<html>

<head>
       <title>Krupal IU182</title>
</head>

<body>
       <h1>Welcome to PHP Include and Date Example</h1>
       <p>Current date and time:
              <?php echo date('Y-m-d H:i:s'); ?></p>
       <h2>Including an External File Using include</h2>
       <div>
              <?php
              include 'Krupal.php';
              echo "This text is displayed after including Krupal.php using include.";
              ?>
       </div>
       <h2>Including an External File Using require</h2>
       <div>
              <?php
              require 'Krupal.php';
              echo "This text is displayed after including Krupal.php using require.";
              ?>
       </div>
</body>

</html>