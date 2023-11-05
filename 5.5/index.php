<!DOCTYPE html>
<html>

<head>
       <title>Krupal IU182 </title>
</head>

<body>
       <h1>Employee Management System</h1>

       <?php
       $host = 'localhost';
       $username = 'root';
       $password = '';
       $database = 'krupal';
       $conn = mysqli_connect($host, $username, $password, $database);
       if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
       }
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $firstname = $_POST['firstname'];
              $lastname = $_POST['lastname'];
              $email = $_POST['email'];
              $department = $_POST['department'];
              $id = $_POST['id'];
              $sql = "INSERT INTO employee (F_name, L_name, Email, Department, Id) VALUES
('$firstname', '$lastname', '$email', '$department', '$id')";
              if (mysqli_query($conn, $sql)) {
                     echo "Employee record added successfully!";
              } else {
                     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
       }
       ?>
       <h2>Add Employee</h2>
       <form method="POST" action="5.5.php">
              <label for="firstname">First Name:</label>
              <input type="text" name="firstname" required><br><br>
              <label for="lastname">Last Name:</label>
              <input type="text" name="lastname" required><br><br>

              <label for="email">Email:</label>
              <input type="email" name="email" required><br><br>

              <label for="department">Department:</label>
              <input type="text" name="department"><br><br>

              <label for="id">Id:</label>
              <input type="number" name="id"><br><br>
              <input type="submit" value="Add Employee">
       </form>
</body>

</html>