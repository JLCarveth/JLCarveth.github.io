<html>
<head>
    <title>Lab 5 - Introduction to PHP</title>
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
<body style="background-color:#30475e; color: #ececec;">
<!-- Header -->
<?php 
include 'header.php';
include 'resources.php';

?>
<h1>Lab 6 - Logical and Conditional Statements</h1>
<div class="container">
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseChess" role="button" aria-expanded="false" aria-controls="collapseChess">
        Show Chessboard
    </a>
    <div class="collapse" id="collapseChess"><br>
    Could not get it square, despite measurements being correct. Good thing this is Web Programming and not Web Design ¯\_(ツ)_/¯.
    <?php 
        include('chessboard.php');
    ?>
    </div>
    <hr>

    <a class="btn btn-primary" data-toggle="collapse" href="#collapsePrime" role="button" aria-expanded="false" aria-controls="collapsePrime">
        Show Prime
    </a>
    <div class="collapse" id="collapsePrime"><br>
    <?php
        echo("<iframe src=\"prime.php\"></iframe>");
    ?>
    </div>
</div>
<!-- Footer -->
<?php
    include 'footer.php';
?>
</body>
</html>