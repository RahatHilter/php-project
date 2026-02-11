<?php include "includes/header.php" ;?>
<?php include "includes/sidebar.php" ;?>

<div style="margin-left:220px; padding:15px;">
    <h2>Exercise 3</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>First Name:</label><br>
    <input type="text" name="firstname"><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="lastname"><br><br>

    <button type="submit">Submit</button>
</form>
<table class="table table-bordered table-striped mt-4">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Course</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Rahat</td>
            <td>PHP</td>
        </tr>
    </tbody>
</table>
<?php
$str1 = "Hello";
$str2 = "World";
$combined = $str1 . " " . $str2;

echo "<p><strong>Combined string:</strong> $combined</p>";
echo "<p><strong>String length:</strong> " . strlen($combined) . "</p>";
?>
<?php
$a = 298;
$b = 234;
$c = 46;

$sum = $a + $b + $c;
echo "<p><strong>Sum of numbers:</strong> $sum</p>";
?>
<?php
echo "<p><strong>Your browser info:</strong> " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
?>
<?php
if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    echo "<h3>Hey there $fname $lname, You are welcome to my site. Bit cold innit mate.</h3>";
}
?>

 <p>Work in progress</p>
</div>

<?php include "includes/footer.php"; ?>