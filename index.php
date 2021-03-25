<?php
    //Include the PHP functions to be used on the page 
    include('php/common.php'); 
    outputHeader("Home");	
    //Output header and navigation
    outputBannerNavigation("Home");
?>

<!-- Contents of the page -->

<body class="indexb">
        <h1 id="initial">MYSTERY.</h1>
        <p id="HoverContent" align="center"><b> Where is it?
            What is it?
            Find it how you will. No matter the cost.
            </b></p>

    <div id="skeleton">
        <div class="move">
            <img src="../images/skeleton.gif" alt=""> </div>
    </div>

    </div>



    <?php
        //Output the footer
        outputFooter();
    ?>
