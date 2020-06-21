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
var status = 0;
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
    // status=1;
    setInterval(checkStatus, "10");
}

document.getElementById("tmr").innerHTML = time;
var lvl1 = ["bat", "broom", "pirate", "pumpkin", "skull", "spider", "scarecrow"];

function checkAnswer() {

    // if (score === 70) {


    //         if (lvl1[1] === 0 && lvl1[2] === 0 && lvl1[0] === 0 && lvl1[3] === 0 && lvl1[4] === 0 && lvl1[5] === 0 && lvl1[6] === 0) {
    //             alert("gameover");
    //             finalScore = document.getElementById("scr").value + time;
    //               console.log(finalScore);
    //             updateScore();




    //     }
    //     status=0;
    // } 
    if (i <= 7) {



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

            document.getElementById('chck').value = "";
            isPlaying = true;
            document.getElementById('scr').innerHTML = score;
            i++;
            lvl1[0] = 0;
            console.log(lvl1[0]);

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

        } else if (lvl1[6] === ans && lvl1[6] != "abc") {
            lvl1[6] = "abc";
            console.log()

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
                status = 1;
                time = 0;

                updateLb();

                document.getElementById("chck").disabled = true;
            }
        }
    }
}





function checkStatus() {
    if (time === 0 || score === 70) {
        document.getElementById('chck').value="GAME OVER!!";

        document.getElementById('chck').disabled = true;

        var finalScr = score;

        status = 1;
        updateLb();


    }

}

function updateLb() {
    var scores = {};
   if (score >= 0) {
        for (var i = 0, len = localStorage.length; i < len; i++) {
            var userv = sessionStorage['username'];
            var key = localStorage.key(i);
            var value = localStorage[key];
            var obj = JSON.parse(localStorage.getItem(localStorage.key(i)));
            var hs = JSON.parse(localStorage[userv]);
            if (hs.username === sessionStorage["username"] && score + time > hs.score1) {
                scores.username = sessionStorage['username'];
                scores.email = hs.email;
                scores.password = hs.password;
                scores.score1 = score + time;
                scores.time1 = 60 - time + " seconds";
                scores.time2 = hs.time2;
                scores.score2 = hs.score2;
                localStorage[scores.username] = JSON.stringify(scores);
            } else if (hs.score2 === undefined || hs.score1 === undefined) {
                scores.username = sessionStorage['username'];
                scores.email = hs.email;
                scores.password = hs.password;
                scores.score1 = score + time;
                scores.time1 = 60 - time + " seconds";
               scores.time2 = 0;

                scores.score2 = 0;
                localStorage[scores.username] = JSON.stringify(scores);


            }
        }
    }
}

function countdown() {
    // Make sure time is not run out

    if (status == 0) {

        if (time > 0) {
            // Decrement
            time--;
        } else if (time === 0) {
            // Game is over
            document.getElementById('chck').disabled = true;

            // finalScore = score + time;
            // finalTime = 60 - time;




        }
    }

    // Show time
    document.getElementById("tmr").innerHTML = time;
}
