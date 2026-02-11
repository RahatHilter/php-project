<php  include "include/header.php";?>
<php  include "include/sidebar.php";?>
<div style=margin-left:200 px ; padding:15px;">
<h3>Voting Eligibility</h3>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    <button type="submit" name="vote_check">Check</button>
</form>

<?php
if (isset($_POST['vote_check'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if ($age >= 18) {
        echo "<p>$name is eligible for voting.</p>";
    } else {
        echo "<p>$name is NOT eligible for voting.</p>";
    }
}
?>
<h3>Month Check</h3>

<?php
$month = date("F");

switch ($month) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $month so I don't have any holidays.";
}
?>
<h3>Multiplication Table</h3>

<form method="post">
    Enter number: <input type="number" name="number"><br><br>
    <button type="submit" name="multiply">Generate</button>
</form>

<?php
if (isset($_POST['multiply'])) {
    $num = $_POST['number'];

    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

</div>

<?php include "includes/footer.php"; ?>
