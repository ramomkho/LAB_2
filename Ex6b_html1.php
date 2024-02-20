<?php

// Define an array for the navigation menu
$navItems = [
    'Home' => 'index.php',
    'About' => 'about.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <style>
        /* Add some basic styling for the navigation menu */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>

<!-- Create the navigation menu using the $navItems array -->
<ul>
    <?php foreach ($navItems as $label => $url): ?>
        <li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
    <?php endforeach; ?>
</ul>

<!-- Add the rest of your HTML content here -->

</body>
</html>