
        function checkScore() {
            if (i > 9) {
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
        var pos13 = 0;
        var pos14 = 0;
        var pos15 = 0;
        var pos16 = 0;
        var i = 0;
        let isPlaying;

        let time = 60;
        var score = 0;

        function hello() {
            setInterval(countdown, "1000");
            setInterval(checkStatus, "10");

        }

        document.getElementById("tmr").innerHTML = time;

        var lvl1 = ["rudolph", "sleigh", "present", "jingle bells", "santa", "candy cane", "christmas tree", "socks", "gingerbread"];

        function checkAnswer() {


            if (i <= 9) {




                var ans = document.getElementById('chck').value;
                if (lvl1[0] === ans) {
                    lvl1[0] = 0;

                    score = score + 10;

                    function move2() {

                        pos4 = pos4 + 20;
                        pos5 = pos5 + 150;
                        document.getElementById('rudolph').style.bottom = pos4 + 'px';

                        if (pos4 > 300) {
                            clearInterval(g);
                            document.getElementById('rudolph').style.visibility = "hidden";
                            document.getElementById('rudolph1').style.filter = "brightness(100%)";

                        }


                    }
                    var g = setInterval(move2, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    document.getElementById('scr').innerHTML = score;
                    i++;




                } else if (lvl1[1] === ans) {
                    lvl1[1] = 0;

                    score = score + 10;

                    function move3() {

                        pos6 = pos6 + 20;
                        pos7 = pos6 + 150;
                        document.getElementById('sleigh').style.right = pos6 + 'px';
                        document.getElementById('sleigh').style.bottom = pos7 + 'px';


                        if (pos6 > 300) {
                            clearInterval(g);
                            document.getElementById('sleigh').style.visibility = "hidden";
                            document.getElementById('sleigh1').style.filter = "brightness(100%)";

                        }


                    }
                    var g = setInterval(move3, 20);

                    document.getElementById('chck').value = "";
                    document.getElementById('scr').innerHTML = score;

                    isPlaying = true;
                    i++;

                } else if (lvl1[2] === ans) {
                    lvl1[2] = 0;


                    score = score + 10;

                    function move1() {

                        pos2 = pos2 + 20;
                        pos3 = pos2 + 150;
                        document.getElementById('present').style.right = pos2 + 'px';
                        document.getElementById('present').style.bottom = pos3 + 'px';

                        if (pos2 > 300) {
                            clearInterval(g);
                            document.getElementById('present').style.visibility = "hidden";
                            document.getElementById('present1').style.filter = "brightness(100%)";

                        }


                    }
                    var g = setInterval(move1, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    document.getElementById('scr').innerHTML = score;
                    i++;



                } else if (lvl1[3] === ans) {
                    score = score + 10;
                    lvl1[3] = 0;


                    function move() {

                        pos = pos + 10;
                        pos1 = pos + 245;
                        document.getElementById('jingle-bells').style.right = pos1 + 'px';
                        document.getElementById('jingle-bells').style.bottom = pos + 'px';

                        if (pos > 300) {
                            clearInterval(f);
                            document.getElementById('jingle-bells1').style.filter = "brightness(100%)";
                            document.getElementById('jingle-bells').style.visibility = "hidden";

                        }


                    }
                    var f = setInterval(move, 20);

                    document.getElementById('scr').innerHTML = score;


                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;


                } else if (lvl1[4] === ans) {
                    lvl1[4] = 0;

                    function move4() {

                        pos8 = pos8 + 20;
                        pos9 = pos8 + 150;
                        document.getElementById('santa').style.left = pos8 + 'px';
                        document.getElementById('santa').style.bottom = pos9 + 'px';

                        if (pos8 > 300) {
                            clearInterval(g);
                            document.getElementById('santa').style.visibility = "hidden";
                            document.getElementById('santa1').style.filter = "brightness(100%)";

                        }


                    }
                    score = score + 10;

                    var g = setInterval(move4, 20);
                    document.getElementById('scr').innerHTML = score;

                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;


                } else if (lvl1[5] === ans) {
                    lvl1[5] = 0;

                    function move5() {

                        pos10 = pos10 + 20;
                        pos11 = pos10 + 150;
                        document.getElementById('candy-cane').style.left = pos10 + 'px';
                        document.getElementById('candy-cane').style.bottom = pos11 + 'px';

                        if (pos10 > 300) {
                            clearInterval(g);
                            document.getElementById('candy-cane').style.visibility = "hidden";
                            document.getElementById('candy-cane1').style.filter = "brightness(100%)";

                        }


                    }
                    score = score + 10;

                    var g = setInterval(move5, 20);
                    document.getElementById('scr').innerHTML = score;


                    document.getElementById('chck').value = "";
                    isPlaying = true;
                    i++;


                } else if (lvl1[6] === ans) {
                    lvl1[6] = 0;

                    function move6() {

                        pos12 = pos12 + 20;
                        pos13 = pos12 + 150;
                        document.getElementById('christmas-tree').style.left = pos12 + 'px';
                        document.getElementById('christmas-tree').style.bottom = pos13 + 'px';

                        if (pos12 > 300) {
                            clearInterval(g);
                            document.getElementById('christmas-tree').style.visibility = "hidden";
                            document.getElementById('christmas-tree1').style.filter = "brightness(100%)";

                        }



                    }
                    score = score + 10;
                    document.getElementById('scr').innerHTML = score;

                    var g = setInterval(move6, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;

                    isPlaying = true;

                    i++;

                } else if (lvl1[7] === ans) {
                    lvl1[7] = 0;

                    function move7() {

                        pos13 = pos13 + 20;
                        pos14 = pos13 + 150;
                        document.getElementById('socks').style.left = pos12 + 'px';
                        document.getElementById('socks').style.bottom = pos13 + 'px';

                        if (pos13 > 300) {
                            clearInterval(g);
                            document.getElementById('socks').style.visibility = "hidden";
                            document.getElementById('socks1').style.filter = "brightness(100%)";

                        }



                    }
                    score = score + 10;
                    document.getElementById('scr').innerHTML = score;

                    var g = setInterval(move7, 20);

                    document.getElementById('chck').value = "";
                    isPlaying = true;

                    isPlaying = true;

                    i++;

                } else if (lvl1[8] === ans) {
                    lvl1[8] = 0;

                    function move8() {

                        pos15 = pos15 + 10;
                        pos16 = pos15 + 10;
                        document.getElementById('gingerbread').style.right = pos16 + 'px';
                        document.getElementById('gingerbread').style.bottom = pos16 + 'px';

                        if (pos15 > 300) {
                            clearInterval(g);
                            document.getElementById('gingerbread').style.visibility = "hidden";
                            document.getElementById('gingerbread1').style.filter = "brightness(100%)";

                        }



                    }
                    score = score + 10;
                    document.getElementById('scr').innerHTML = score;

                    var g = setInterval(move8, 20);

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
            if (time === 0 || score === 90) {
                document.getElementById('chck').value="GAME OVER!!";
                document.getElementById('chck').style.color="lightblue";

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

                    if (hs.username === sessionStorage["username"] && score + time > hs.score2) {

                        scores.username = sessionStorage['username'];
                        scores.email = hs.email;
                        scores.password = hs.password;
                        scores.score2 = score + time;
                        scores.time2 = 60 - time + " seconds";
                        scores.time1 = hs.time1;

                        scores.score1 = hs.score1;
                        localStorage[scores.username] = JSON.stringify(scores);

                    } else if (hs.score2 === undefined || hs.score1 === undefined) {
                        scores.username = sessionStorage['username'];
                        scores.email = hs.email;
                        scores.password = hs.password;
                        scores.score2 = score + time;
                        scores.time2 = 60 - time + " seconds";
                        scores.time1 = 0;

                        scores.score1 = 0;
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
    