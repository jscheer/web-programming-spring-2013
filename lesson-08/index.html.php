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
            <h3>Lessons 8</h3>
            <?php
            require('../lesson-08/connection.php');

            $music = $dataconnection->query("SELECT artist_name FROM artist");
            while ($row = $music->fetch_object()) {
                echo '<p>'.$row->artist_name.'</p>';
            }
            //$dataconnection->close();
            ?>
        </hgroup>
       
        </article>
            <ul class="breadcrumb">
                <li><a href="../../index.php">Home</a> <span class="divider">/</span></li>
                <li>Web Programming<span class="divider">/</span></li>
                <li class="active">Lesson 8</li>
            </ul>
    </section>
</div><!--/container-->

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>