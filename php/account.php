    <?php
    //Include the PHP functions to be used on the page 
    include('common.php');

    //Output header and navigation 
    outputHeader("Account");
    outputBannerNavigation("Account");
    ?>
    <style>
        #logoutButton {
            background-color: white; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
            color: black;
            margin-top:500px;
            position:inherit;
            z-index: 10000;
            margin-left: 44%;
        }
    </style>

<body class="loginpage">
    <div class="container">

        <div class="background1">

            <div id="container" >
                <div class="login">

                    <div id="myDIV">
                        <div id="container_demo"style="display: block;">
                            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                            <a class="hiddenanchor" id="toregister"></a>
                            <a class="hiddenanchor" id="tologin"></a>
                            <div id="wrapper">
                                <div id="login" class="animate form" onload="checkLogin()">
                                    <form action="/php/index.php" autocomplete="on" onsubmit="return false">
                                        <h1>Log in</h1>
                                        <p>
                                            <label for="username" class="uname" data-icon="u"> Your email or username
                                            </label>
                                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com" />
                                        </p>
                                        <p>
                                            <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                        </p>
                                        <p class="login button" id="lgb">
                                            <input type="submit" value="Login" onclick="login()" />
                                        </p>
                                        <p class="change_link">
                                            Not a member yet ?
                                            <a href="#toregister" class="to_register">Sign Up</a>
                                        </p>
                                    </form>
                                </div>

                                <div id="register" class="animate form" onsubmit="return false">
                                    <form action="#login" autocomplete="on">
                                        <h1> Sign up </h1>
                                        <p>
                                            <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                        </p>
                                        <p>
                                            <label for="emailsignup" class="youmail" data-icon="e"> Your email</label>
                                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com" />
                                        </p>
                                        <p>
                                            <label for="passwordsignup" class="youpasswd" data-icon="p">Your password
                                            </label>
                                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO" />
                                        </p>
                                        <p>
                                            <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please
                                                confirm your password </label>
                                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO" />
                                        </p>
                                        <p class="signin button">
                                            <input type="submit" value="Sign up" href="#tologin" onclick="storeUser()" />
                                        </p>
                                        <p class="change_link">
                                            Already a member ?
                                            <a href="#tologin" class="to_register"> Go and log in </a>
                                        </p>
                                    </form>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


        </div></div>
        <button type="button" id="logoutButton" onclick="logout()">Logout</button>

        <script>
            function storeUser() {
                var usrObject = {};
                usrObject.username = document.getElementById("usernamesignup").value;
                usrObject.email = document.getElementById("emailsignup").value;
                usrObject.password = document.getElementById("passwordsignup").value;
                usrObject.password_confirm = document.getElementById("passwordsignup_confirm").value;
                if (usrObject.password != usrObject.password_confirm) {
                    alert("passwords dont match");
                } else {

                    document.getElementById("usernamesignup").value = "";
                    document.getElementById("emailsignup").value = "";
                    document.getElementById("passwordsignup").value = "";
                    document.getElementById("passwordsignup_confirm").value = "";

                    localStorage[usrObject.username] = JSON.stringify(usrObject);
                    window.location.hash = "#!tologin";


                }
            }


            function checkLogin() {
                if (localStorage.username != undefined) {
                    var usrObj = JSON.parse(localStorage[localStorage.username]);
                    alert("already logged in");

                    return;
                }
            }

            function login() {
                var username = document.getElementById("username").value;
                if (localStorage[username] === undefined) {
                    alert("Create an account");

                } else {

                    var usrObj = JSON.parse(localStorage[username]);
                    var password = document.getElementById("password").value;
                    if (password === usrObj.password) {
                        alert("signedin");
                        sessionStorage.username = usrObj.username;
                        var loginsignup = document.getElementById("container_demo");
                        document.getElementById('register').style.zIndex=0;
                        document.getElementById('login').style.zIndex=0;
                        loginsignup.style.display = "none";
                        var logoutBtn = document.getElementById("logoutButton");
                        logoutBtn.style.display = "inline-block";
                        sessionStorage["loggedin"] = "True";
                        return;

                    } else {
                        alert("try again");
                    }
                }
            }

            function logout() {
                alert("Logged out from account.");
                var loginsignup = document.getElementById("container_demo");
                loginsignup.style.display = "block";
                logoutBtn = document.getElementById("logoutButton");
                logoutBtn.style.display = "none";
                sessionStorage["loggedin"] = "false";
            }

            window.onload = function hideButton() {
                if (sessionStorage["loggedin"] == "True") {
                    var loginsignup = document.getElementById("container_demo");
                    loginsignup.style.display = "none";
                    document.getElementById('register').style.zIndex=0;
                        document.getElementById('login').style.zIndex=0;


                    var logoutBtn = document.getElementById("logoutButton");
                    logoutBtn.style.display = "inline-block";
                    logoutBtn.style.zIndex = 22;

                } else {
                    var logoutBtn = document.getElementById("logoutButton");
                    logoutBtn.style.display = "none";
                    document.getElementById('logoutButton').style.zIndex=0;

                    var loginsignup = document.getElementById("container_demo");
                    loginsignup.style.display = "block";

                }
            }
        </script>
        <?php
        //Output the footer
        outputFooter();
        ?>