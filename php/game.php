<?php
//Include the PHP functions to be used on the page 
include('common.php');

//Output header and navigation 
outputHeader("Game");
outputBannerNavigation("Game");
?>

<body id="gamePage">
        <!-- Contents of the page -->
        <p id="header1"><b> Mysterious Hidden Object </b></p>

        <div class="gridArea1">
                <a href="../php/level1.php"> <img id="whitebord12" src="../images/level1.jpg" class="leftCol11" alt=""> </a>
                <a href="../php/level2.php"> <img id="whitebord12" src="../images/level2.gif" class="leftCol11" alt=""></a>

        </div>

        <div class="tgt">
        <a href="../php/level1.php">Level 1</a>
        <a href="../php/level2.php" style="margin-right:80px;">Level 2</a>
        </div>
        <script>
        </script>
        <?php
        //Output the footer
        outputFooter();
        ?>