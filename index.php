<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Site</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Welcome to My Website</h1>
        <p>Built with HTML, CSS, and PHP</p>
    </header>

    <div class="container">
        <h2>About This Page</h2>
        <p>This is a static HTML structure, but the section below is generated dynamically by the server using PHP.</p>

        <div class="php-box">
            <?php
                // This is a PHP block
                $current_time = date("F j, Y, g:i a");
                echo "<h3>Server Status: Online</h3>";
                echo "<p>Today's date is: <strong>$current_time</strong></p>";
            ?>
        </div>
    </div>

</body>
</html>
