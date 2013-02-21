<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<title>CS 53.11b lesson 2 - php</title>
 <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
<body>

<header class="page-header">
    <div class="container"><hgroup>
            <h1><small><strong>Joseph Scheer</strong><br />
                <a href="../../index.php">Spring 13</a></small></h1>
        </hgroup></div>
</header>
<div class="container">
    <section>
        <hgroup>
            <h2>Web Programming</h2>
        </hgroup>
        <article>
        <hgroup>
            <h3>Lessons 2</h3>
        </hgroup>
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
        </article>
            <ul class="breadcrumb">
                <li><a href="../../index.php">Home</a> <span class="divider">/</span></li>
                <li>Web Programming<span class="divider">/</span></li>
                <li class="active">Lesson 2</li>
            </ul>
    </section>
</div><!--/container-->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>