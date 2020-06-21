<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<html lang="en">';
    echo '<meta charset="UTF-8">';
    
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel = "icon" href = "../images/tab-icon.png">';
    echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
    echo '</head>';
}

/* Ouputs the banner and the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
echo '<header>';
    echo '<nav class="navigation">';
    //Array of pages to link to
    $linkNames = array("Account", "Game" ,"Home","About","Leaderboard");
    $linkAddresses = array("../php/account.php", "../php/game.php","../php/index.php","../php/aboutus.php", "../php/leaderboard.php");
    
    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a id="start"';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href='. $linkAddresses[$x] . '>' . $linkNames[$x] . '</a>';
    }
    echo '</nav>';
    echo '</header>';
}

//Outputs closing body tag and closing HTML tag
function outputFooter(){
    echo '<footer>' ;
    echo '<p>' .'<b>'."Rithik Makhija &copy 2019".'</b>'. '</p>';
    echo '</footer>';  
    echo '</body>';
    echo '</html>';
}




