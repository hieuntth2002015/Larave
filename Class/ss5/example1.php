<?php
$query = "Select * from book";
$result = $conn->query($query);
if(!$result) die($conn->error);
?>