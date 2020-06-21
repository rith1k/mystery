<?php
//Include the PHP functions to be used on the page 
include('common.php');
outputHeader('About Us');
//Output header and navigation 
outputBannerNavigation("About");
?>
<style>
    .imgArray {
        margin-top: 0;
        height: 80px;
        width: 100%;
        background: white;

    }

    .imgArray1 {
        height: 80px;
        background: white;
        margin: 5px;

    }

    .img-item {
        padding-right: 90px;
        padding-left: 40px;
        object-fit: cover;
        height: 70px;

    }

    .img-item2 {
        object-fit: cover;
        height: 70px;

    }


    .gridArea {
        margin-top: 1%;
        animation: fadeIn 3s;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 50px 50px 50px;
        grid-template-areas:
            "leftCol1 midTop leftCol4 midTop"
            "  midTop  leftCol2  midTop  leftCol5"

            "leftCol17 midTop leftCol3 leftCol6";
        grid-gap: 5px;

    }

    .leftCol1 {
        margin-top: 300px;
        grid-area: leftCol1;
        width: 8%;

    }

    .leftCol2 {
        margin-left: 300px;

        grid-area: leftCol2;
        width: 8%;
    }

    .level1border {
        margin-top: 0.00001%;
        animation: fadeInLeft 3s;
        width: 100%;
        animation: fadeIn 3s;
        border: solid 2px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        -moz-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        box-shadow: 0px 0px 5px 7px white;
        background: url(../images/level11.jpg);
        background-size: cover;

        margin-top: 4%;
        width: 75%;
        height: 800px;
        display: inline-block
    }

    .leftCol3 {
        margin-bottom: 120px;
        margin-left: 400px;

        grid-area: leftCol3;
        width: 8%;
    }

    .leftCol4 {
        margin-right: 300px;
        margin-top: 120px;

        grid-area: leftCol4;
        width: 8%;

    }

    .leftCol5 {
        grid-area: leftCol5;
        width: 8%;
    }

    .leftCol6 {
        grid-area: leftCol6;
        width: 8%;
    }

    .leftCol7 {
        grid-area: leftCol7;
        width: 8%;
    }

    .scoretxt {

        font-size: 60px;
        top: 0;
        color: orange;


    }

    #tmr {
        font-size: 60px;
        top: 0;
        color: orange;

    }

    .tct {

        border: 0;
        border-bottom: 2px solid orange;
        font-size: 30px;
        line-height: 35px;
        height: 70px;
        color: white;
        text-align: center;

        background: transparent;
    }

    .tct.shake {
        animation-name: shaker;
        animation-duration: 200ms;
        animation-timing-function: ease-in-out;
        animation-delay: 0s;
    }

    .tct:focus {
        outline: 0;
        color: #BBDEFB;
    }

    .tct::placeholder {
        color: orange;
    }

    #bat,
    #broom,
    #pirate,
    #pumpkin,
    #skull,
    #spider,
    #scarecrow {
        visibility: visible;
        animation-name: zoomOut;
        animation-play-state: paused;
        position: relative;

        animation-duration: 6s;
    }

    @keyframes zoomOut {
        from {
            opacity: 1;
        }

        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 0.3);
            transform: scale3d(0.3, 0.3, 0.3);
        }

        to {
            opacity: 0;
        }
    }

    #bat1,
    #broom1,
    #pirate1,
    #pumpkin1,
    #skull1,
    #spider1,
    #scarecrow1 {
        filter: brightness(0%);
    }

    .scrarea>p {
        font-size: 60px;
        top: 0;
        color: orange;
    }

    .scrarea {
        border: solid 2px;
        border-radius: 4px;
        -webkit-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        -moz-box-shadow: 0px 0px 5px 7px rgba(150, 196, 98, 1);
        box-shadow: 0px 0px 5px 7px orange;
        float: right;
        left: 30%;
        top: 0;
        margin-top: 6%;
        margin-right: 33px;
        font-size: 30px;
        line-height: 35px;
        height: auto;
        color: white;
        text-align: center;

        background: transparent;
    }
</style>

<body class="level1">
    <div class="level1Bord">
        <div class="level1border" style="display: inline-block;" alt="">
            <div class="imgArray">
                <img class="img-item" id="bat1" src="../images/bat.png" alt="">
                <img class="img-item" id="broom1" src="../images/broom.png" alt="">
                <img class="img-item" id="pirate1" src="../images/pirate.png" alt="">
                <img class="img-item" id="pumpkin1" src="../images/pumpkin.png" alt="">
                <img class="img-item" id="skull1" src="../images/skull.png" alt="">
                <img class="img-item" id="spider1" src="../images/spider.png" alt="">
                <img class="img-item" id="scarecrow1" src="../images/scarecrow.png" alt="">

            </div>
            <div class="objct">

                <div class="gridArea">
                    <img src="../images/bat.png" id="bat" class="leftCol1" alt="">
                    <img class="leftCol2" src="../images/broom.png" id="broom" alt="">
                    <img class="leftCol3" src="../images/pirate.png" alt="" id="pirate">
                    <img src="../images/pumpkin.png" class="leftCo4" alt="" id="pumpkin">
                    <img class="leftCol2" src="../images/skull.png" alt="" id="skull">
                    <img class="leftCol3" src="../images/spider.png" alt="" id="spider">
                    <img src="../images/scarecrow.png" class="leftCol7" alt="" id="scarecrow">

                </div>

            </div>


        </div>
        <div class="scrarea">

            <div class="imgArray1">
                <img class="img-item2" id="life1" src="../images/redh.png" alt="">
                <img class="img-item2" id="life2" src="../images/redh.png" alt="">
                <img class="img-item2" id="life3" src="../images/redh.png" alt="">
                <img class="img-item2" id="life4" src="../images/redh.png" alt="">
                <img class="img-item2" id="life5" src="../images/redh.png" alt="">

            </div>
            <input class="tct" type="text" id='chck' name="namername" onclick="hello()" placeholder="Make Guess">
            <p class="scoretxt"> Score: <span id='scr'>0</span></p>

            <p> Time: <span id="tmr">0</span></p>
            <input type="submit" name="hell0" id="myBtn" value="Enter" style="display:none;" onclick=" checkScore()">
        </div>

    </div>

    <script>
        function checkScore() {
            if (i > 7) {
                clearInterval(countdown);

                document.getElementById('chck').disabled = true;
                alert("game over");



            } else {
                checkAnswer();
            }
        }
        var input = document.getElementById("chck");

        // Execute a function when the user releases a key on the keyboard
        input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("myBtn").click();
            }
        });
        var h = 0;
        var status=0;
        var finalScore = 0;
        var finalTime = 0;
        var pos = 0;
        var pos1 = 0;
        var pos2 = 0;
        var pos3 = 0;
        var pos4 = 0;
        var pos5 = 0;
        var pos6 = 0;
        var pos7 = 0;
        var pos8 = 0;
        var pos9 = 0;
        var pos10 = 0;
        var pos11 = 0;
        var pos12 = 0;
        var i = 0;
        let isPlaying;
        let time = 60;
        var score = 0;

        function hello() {
            setInterval(countdown, "1000");
            status=1;
        }



        function checkAnswer() {
            var lvl1 = ["bat", "broom", "pirate", "pumpkin", "skull", "spider", "scarecrow"];

            if (score === 70) {


                    if (lvl1[1] === 0 && lvl1[2] === 0 && lvl1[0] === 0 && lvl1[3] === 0 && lvl1[4] === 0 && lvl1[5] === 0 && lvl1[6] === 0) {
                        alert("gameover");
                        finalScore = document.getElementById("scr").value + time;
                          console.log(finalScore);
                        updateScore();
                        
                        

                    
                }
                status=0;
            } 
            else if (i <= 7) {



                var ans = document.getElementById('chck').value;
                if (lvl1[0] === ans) {
                    score = score + 10;

                    function move2() {


                        pos4 = pos4 + 20;
                        pos5 = pos5 + 150;
                        document.getElementById('bat').style.bottom = pos4 + 'px';

                        if (pos4 > 300) {
                            clearInterval(g);
                            document.getElementById('bat').style.visibility = "hidden";
                            document.getElementById('bat1').style.filter = "brightness(100%)";

                        }



                    }
                    var g = setInterval(move2, 20);
                    alert(i);

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    document.getElementById('scr').innerHTML = score;
                    i++;
                    lvl1[0] = 0;
console.log(                    lvl1[0] );

                } else if (lvl1[1] === ans) {
                    score = score + 10;

                    function move3() {

                        pos6 = pos6 + 20;
                        pos7 = pos6 + 150;
                        document.getElementById('broom').style.right = pos6 + 'px';
                        document.getElementById('broom').style.bottom = pos7 + 'px';


                        if (pos6 > 300) {
                            clearInterval(g);
                            document.getElementById('broom').style.visibility = "hidden";
                            document.getElementById('broom1').style.filter = "brightness(100%)";

                        }


                    }
                    var g = setInterval(move3, 20);
                    alert(i);

                    document.getElementById('chck').value = "";
                    document.getElementById('scr').innerHTML = score;

                    isPlaying = true;
                    i++;
                    lvl1[1] = 0;

                } else if (lvl1[2] === ans) {

                    score = score + 10;

                    function move1() {

                        pos2 = pos2 + 20;
                        pos3 = pos2 + 150;
                        document.getElementById('pirate').style.right = pos2 + 'px';
                        document.getElementById('pirate').style.bottom = pos3 + 'px';

                        if (pos2 > 300) {
                            clearInterval(g);
                            document.getElementById('pirate').style.visibility = "hidden";
                            document.getElementById('pirate1').style.filter = "brightness(100%)";

                        }


                    }
                    var g = setInterval(move1, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    document.getElementById('scr').innerHTML = score;
                    i++;
                    alert(i);

                    lvl1[2] = 0;

                } else if (lvl1[3] === ans) {
                    score = score + 10;

                    function move() {

                        pos = pos + 10;
                        pos1 = pos + 245;
                        document.getElementById('pumpkin').style.right = pos1 + 'px';
                        document.getElementById('pumpkin').style.bottom = pos + 'px';

                        if (pos > 300) {
                            clearInterval(f);
                            document.getElementById('pumpkin1').style.filter = "brightness(100%)";
                            document.getElementById('pumpkin').style.visibility = "hidden";

                        }


                    }
                    var f = setInterval(move, 20);

                    document.getElementById('scr').innerHTML = score;


                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;

                    lvl1[3] = 0;
                } else if (lvl1[4] === ans) {
                    function move4() {

                        pos8 = pos8 + 20;
                        pos9 = pos8 + 150;
                        document.getElementById('skull').style.left = pos8 + 'px';
                        document.getElementById('skull').style.bottom = pos9 + 'px';

                        if (pos8 > 300) {
                            clearInterval(g);
                            document.getElementById('skull').style.visibility = "hidden";
                            document.getElementById('skull1').style.filter = "brightness(100%)";

                        }


                    }
                    score = score + 10;

                    var g = setInterval(move4, 20);
                    document.getElementById('scr').innerHTML = score;

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;
                    lvl1[4] = 0;

                } else if (lvl1[5] === ans) {
                    function move5() {

                        pos10 = pos10 + 20;
                        pos11 = pos10 + 150;
                        document.getElementById('spider').style.left = pos10 + 'px';
                        document.getElementById('spider').style.bottom = pos11 + 'px';

                        if (pos10 > 300) {
                            clearInterval(g);
                            document.getElementById('spider').style.visibility = "hidden";
                            document.getElementById('spider1').style.filter = "brightness(100%)";

                        }


                    }
                    score = score + 10;

                    var g = setInterval(move5, 20);
                    document.getElementById('scr').innerHTML = score;


                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;
                    lvl1[5] = 0;

                } else if (lvl1[6] === ans) {
                    function move6() {

                        pos12 = pos12 + 20;
                        pos13 = pos12 + 150;
                        document.getElementById('scarecrow').style.left = pos12 + 'px';
                        document.getElementById('scarecrow').style.bottom = pos13 + 'px';

                        if (pos12 > 300) {
                            clearInterval(g);
                            document.getElementById('scarecrow').style.visibility = "hidden";
                            document.getElementById('scarecrow1').style.filter = "brightness(100%)";

                        }



                    }
                    score = score + 10;
                    document.getElementById('scr').innerHTML = score;

                    var g = setInterval(move6, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;


                    i++;
                    lvl1[6] = 0;

                } else {
                    alert("wrong answer");
                    h++;
                    if (h === 1) {
                        document.getElementById("life5").src = "../images/blackh.png";

                    } else if (h === 2) {
                        document.getElementById("life4").src = "../images/blackh.png";

                    } else if (h === 3) {
                        document.getElementById("life3").src = "../images/blackh.png";

                    } else if (h === 4) {
                        document.getElementById("life2").src = "../images/blackh.png";

                    } else if (h === 5) {
                        document.getElementById("life1").src = "../images/blackh.png";

                    } else {
                        alert("gameover");
                        status=0;
                        document.getElementById("chck").disabled = true;
                    }
                }
            }
        }





        function checkStatus() {
            if (!isPlaying && time === 0) {
                message.innerHTML = 'Game Over!!!';

            }
        }

        function countdown() {
           if(status==1){     
            // Make sure time is not run out
            if (time > 0) {
                // Decrement
                time--;
            } else if (time === 0) {
                // Game is over
                document.getElementById('chck').disabled = true;

                finalScore = score + time;
                finalTime = 60 - time;




            }}

            // Show time
            document.getElementById("tmr").innerHTML = time;
        }

        function updateScore() {

            for (var f = 0, len = localStorage.length; f < len; f++) {
                var scores = {};
                var score = highscore;

                var key = localStorage.key(i);
                var value = localStorage[key];
                scores.score = highscore;
                scores.username = sessionStorage['username'];
                var abc = JSON.parse(localStorage.getItem(key));
                scores.email = abc.email;
                scores.password = abc.password;

                localStorage[scores.username] = JSON.stringify(scores);
                var stored = JSON.parse(localStorage[score]);

                localStorage.setItem("score", score);
            }
        }
    </script>

    <!-- Contents of the page -->
    <?php
    //Output the footer
    outputFooter();


    ?>