<hr>

<footer style="text-align: center; padding: 10px; background: #f2f2f2;">
    <p>&copy; <?php echo date("Y"); ?> Rahat – HAMK</p>
    <?php
$file = basename($_SERVER['PHP_SELF']);
$lastModified = filemtime($file);

echo "<p>Last modified: " . date("F d Y H:i:s", $lastModified) . "</p>";
?>
</footer>

</body>
</html>