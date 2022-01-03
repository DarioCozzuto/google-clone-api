<?php include 'api_google.php';?>

<!DOCTYPE html>
<html>

<head>
    <title>Google search API</title>
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="header">
        <div id="topbar">
            <img id="searchbarimage" src="images/googlelogo_color_92x30dp.png" />
            <div id="searchbar" type="text">
                <input id="searchbartext" type="text" value="<?php echo $query_search; ?>" />
                <button id="searchbarmic">
                    <img src="images/googlemic.png" />
                </button>
                <button id="searchbarbutton">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                        </path>
                    </svg>
                </button>
            </div>

            <div id="boxesicon"></div>
            <div id="bellicon"></div>
            <img id="profileimage" src="images/photo.png" />
        </div>
        <div id="optionsbar">
            <ul id="optionsmenu1">
                <li id="optionsmenuactive">All</li>
                <li>News</li>
                <li>Videos</li>
                <li>Images</li>
                <li>Maps</li>
                <li>More</li>
            </ul>

            <ul id="optionsmenu2">
                <li>Settings</li>
                <li>Tools</li>
            </ul>
        </div>
    </div>
    <div id="searchresultsarea">

        <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="searchresult">
                <h2><?php echo $data['organic_results'][$i]['title']; ?></h2>
                <a><?php echo $data['organic_results'][$i]['url']; ?></a> <button>▼</button>
            </div>
        <?php } ?>

    </div>

    <div id="footer">
        <div id="footerlocation">
            <p>Somewhere, Moon </p>
            <p> - From your phone (Location History) - Use precise location - Learn more</p>
        </div>

        <ul id="footermenu">
            <li>Help</li>
            <li>Send feedback</li>
            <li>Privacy</li>
            <li>Terms</li>
        </ul>
    </div>
</body>

</html>