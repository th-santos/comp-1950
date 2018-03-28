<?php 
    if(!isset($pgName)){
        $pgName = '';
    } else {
        $pgName = ' - ' . $pgName;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMP 1950<?php echo $pgName; ?></title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>
    <header>
        <h1>COMP 1950 - Web Dev & Design II</h1>
        <button class="hamburger">
            <div class="hamburger-content">
                <span class="hamburger-icon" tabindex="-1">&#9776;</span>
                <span class="hamburger-text">Menu</span>
            </div>
        </button>
        <?php include 'nav.php'; ?>
    </header>
    <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'): ?>
        <div class="centerfold">
            <img src="images/cover.jpg" alt="studying web design">
        </div>
    <?php endif ?>
    <main>