<?php
    $url = file("data/url.txt");
    $score_file = 'data/scores.json';
    $config_file = 'data/config.json';
    $temp_file = 'data/selected_task.txt';
    if(file_get_contents($temp_file) == ''){ // if no task was performed
        header('location: index.php'); // redirect to the index
    }
    // reward display
    $dir = $url[array_rand($url)];
    echo "<div id=pane> <center> Thanks!<br> </center>";
    echo "<center> <img src=\"$dir\" class='responsive-image'> </center> </div>";
    file_put_contents($temp_file, ''); // erase the previous task reminder
?>

<head>
    <title>&#x1F6BF Reward </title>
    <link rel="stylesheet" type="text/css" href="vselle/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    <base href='/vselle'>
</head>

<body>
    <div id='pane'>
        <header> <meta name="viewport" content="width=device-width, initial-scale=1.0"> </header>
        <p>
            <?php
                // display the scores
                include 'utils.php';
                update_and_display_scores($score_file, $config_file);
            ?>
        </p>

        <footer>
            <nav>
                <ul>
                    <li><a href="vselle/index.php"> Return to homepage </a></li>
                </ul>
            </nav>
        </footer>
    </div>
</body>