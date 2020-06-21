<?php
    //Include the PHP functions to be used on the page 
    include('common.php'); 
outputHeader('About Us');	
    //Output header and navigation 
    outputBannerNavigation("About");
?>

<body class="aboutus">
    <div class="wrapper">
        <div class="header" align="center">
            <section>
                <b>How to play:</b>
            </section>
        </div>
        <div class="midTop">
            <article class="css-typing">
                <ul>

                    <section>
                        <li> The game has several levels that a user can choose from, each ranging upon its difficulty.
                        </li>
                    </section>
                    <section>
                        <li>Each level has a specific theme of objects which the user has to guess and identify.</li>
                    </section>

                    <section>
                        <li>The user has a certain amount of lives, and everytime he guesses an answer wrong,he loses
                            one life. The game continues till
                    </section>

                    <section>all the lives are exhausted or when then timer runs out.</li>
                    </section>
                    <section>
                        <li>Guess all of them in the shortest period of time to make it to the top of the <a href="../php/leaderboard.php">Leaderboard.</a>
                        </li>
                    </section>
                </ul>
            </article>
        </div>
        <div class="footer" align="center">
            <section>
                <b>
                    << Examples>>
                </b>
            </section>
        </div>
        <div class="leftCol"><img src="../images/hiddenobject.jpg" alt=""></div>
        <div class="rightCol"><img src="../images/hiddenobject1.jpg"></div>
        <!-- Contents of the page -->
        <?php
    //Output the footer
    outputFooter();
?>
