<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CS 53.11b Week 2 - php</title>
<style type="text/css">
body,td,th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: medium;
}
</style>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
?>
<?php
    function age($birthdate) {
        return (strtotime('now') - strtotime($birthdate)) / (60*60*24*365);
    }
    $age = age($_POST['birthdate']);
    if ($age > 21) {
?>
<p>You are 21 or over. Today, you are <?php echo intval($age) ?> years old.</p>       
<?php	
    } else {
?>
<p>You are not 21 yet. Today, you are <?php echo intval($age) ?> years old.</p>        
<?php
    }       
} else {
?>
<form action="" method="post">
    <p>Please enter your birthdate so we can verify you are 21.</p>
    <input name="birthdate" type="date">
    <input name="" type="submit">
</form>   
<?php
}
?>
</body>
</html>