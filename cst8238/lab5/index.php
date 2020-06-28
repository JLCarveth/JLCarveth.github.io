<html>
<head>
    <title>Lab 4 - CSS and Multimedia</title>
    <link rel="stylesheet" href="./style.css">
    <!--GoogleFonts because TNR has no place in web design-->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <!-- Bootstrap HTML-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- My cards stylesheet-->
    <link href="cards.css", rel="stylesheet">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</head>
<body style="background-color:#30475e">
<!-- Header -->
<?php 
include 'header.php';
include 'resources.php';

?>
<!-- Content -->
<div class="content">
    <h1>Lab 5 - An Introduction to PHP</h1>
    <?php echo ('<h3>Hello World!</h3>');?>
    <p>
        This is <i>not</i> my first using PHP! It was actually the first programming language I had learned 
        in a classroom setting, in Grade 10 in secondary school. My most recent experience using PHP has been 
        through <a href="https://laravel.com">Laravel</a>, a PHP web framework. 
    <p>
    <?php
        foreach ($projects as $project) {
           displayCard($project["name"], $project["url"], $project["desc"]);
        }
    ?>
</div>
<!-- Footer -->
<?php
    include 'footer.php';

    function displayCard ($name, $url, $desc) {
        echo('<div class="card bordered dark">');
        echo('<div class="info">');
        echo('<p class="title"><a href="' . $url . '">' . $name . '</a></p>');
        echo("</div>");
        echo('<p>' . $desc . '</p>');
        echo("</div>");
    }
?>
</body>
</html>