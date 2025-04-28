<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <!-- Corrected Bootstrap CDN link with integrity hash -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-9a6UptmQ7PbQPB04PtR9Mnmq97brlVRzX6tsI47eRG0s1nHg5bV9JlUmtGwmz5Up" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
</head>
<body>
<nav class="one">
    <ul class="topmenu">
        <li><a href="#">Kategooriad<i class="fa fa-angle-down"></i></a>
            <ul class="submenu">
                <?php
                    // Assuming Controller::AllCategory() is a PHP function that outputs categories
                    Controller::AllCategory();
                ?>
            </ul>
        </li>
        <li><a href="#">Info</a></li>
        <li><a href="/">Stardileht</a></li>
    </ul>
</nav>

<section>
    <div>
        <?php
        // Check if content is available before displaying
        if (isset($content)) {
            echo $content;
        } else {
            echo '<h1>Content is unavailable!</h1>';
        }
        ?>
    </div>
</section>

<hr>

<footer style="text-align: center;">
    <p>JPTVR18 2019 a. &copy; 2019</p>
</footer>

</body>
</html>
