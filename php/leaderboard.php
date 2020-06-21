<?php
//Include the PHP functions to be used on the page 
include('common.php');
outputHeader("Home");
//Output header and navigation
outputBannerNavigation("Leaderboard");
?>
<style>
    .logoutButton {
        background-color: white;
        /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        color: black;

    }

    .imgArray1 {
        height: 80px;
        background: white;
        margin: 5px;
        margin-top: 10%;

    }

    .img-item {
        padding-right: 90px;
        padding-left: 40px;
        object-fit: cover;
        height: 70px;

    }
</style>
<script src="../js/sorttable.js"></script>

</script>

<body class="leady">

    <table class="darkTable sortable" id="greyTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Level 1</th>
                <th>Time Elapsed</th>
                <th>Level 2</th>
                <th>Time Elapsed</th>

            </tr>
        </thead>
        <tbody>

            <tr>
            </tr>
        </tbody>
    </table>

    <script>
        var s1 = document.getElementsByClassName("className").value;
        var s2 = document.getElementsByClassName("className1").value;

        window.onload = function rankings() {
            var table = document.getElementById("greyTable");


            for (var i = 0, len = localStorage.length; i < len; i++) {

                try {
                    var obj = JSON.parse(localStorage.getItem(localStorage.key(i)));

                } catch (error) {
                    var obj = (localStorage.getItem(localStorage.key(i)));

                }
                if (obj.username != undefined && obj.time1 != undefined && obj.time2 != undefined && obj.score1 != undefined && obj.score2 != undefined) {

                    var key = localStorage.key(i);
                    var value = localStorage[key];
                    var row = table.insertRow(1);
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    var cell5 = row.insertCell(4);

                    cell4.setAttribute('class', 'className');
                    cell2.setAttribute('class', 'className1');

                    cell1.innerHTML = obj.username;
                    cell3.innerHTML = obj.time1;
                    cell4.innerHTML = obj.score2;
                    cell2.innerHTML = obj.score1;
                    cell5.innerHTML = obj.time2;
                }
            }
            let myTH = document.getElementsByTagName("th")[2];

            sorttable.innerSortFunction.apply(myTH, []);

        }
    </script>


    <?php
    //Output the footer
    outputFooter();
    ?>