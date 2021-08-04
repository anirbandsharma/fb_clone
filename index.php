<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakebook - login or signup</title>
    <link rel="stylesheet" href="./css/login.css">
    </head>
<body>

    <main>
        <div class="text">
            <h1>fakebook</h1>
            <p>Fakebook helps you connect and share with the people in your life.</p>
        </div>
        <div class="login">
            <div class="card">
                <form action="login.php" method="POST">
                    <input type="email" name="email" placeholder="Email address or phone number">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" class="login-btn" value="Log In">
                </form>
                <div class="forgot"><a href="#">Forgotten password?</a></div>
                <center><div class="line"></div></center>
                <center><button class="createAc" id="myBtn">Create New Account</button></center>
            </div>
            <p><b>Create a Page</b> for a celebrity, band or business.</p>
        </div>
    </main>

     <!-- The Modal -->
     <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="head">
                <div class="text">
                    <h1>Sign Up</h1>
                    <p>It's quick and easy.</p>
                </div>
                <button id="close">X</button>
            </div>
            <div class="line"></div>
            <form action="signup.php" method="POST">
                <div class="row">
                   <input type="text" name="f_name" placeholder="First name">
                   <input type="text" name="l_name" placeholder="Surname">
                </div>
                <div class="row">
                    <input type="email" name="email" placeholder="Email address">
                </div>
                <div class="row">
                    <input type="password" name="password" placeholder="New password">
                </div>
                <label class="title" for="date">Date of birth</label>
                <div class="row">
                    <input type="date" name="dob" placeholder="dob">
                </div>
                <label class="title" for="radio">Gender</label>
                <div class="row">
                    <div class="radio-btn">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" value="Male">
                    </div>
                    <div class="radio-btn">
                        <label for="female">Female</label>
                        <input type="radio" name="gender" value="Female">
                    </div>
                    <div class="radio-btn">
                        <label for="others">Others</label>
                        <input type="radio" name="gender" value="Others">
                    </div>
                </div>
                <div class="row" style="margin: 5px 0;">
                <p>By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                </div>
                <div class="row">
                    <input type="submit" class="createAc" value="Sign Up">
                </div>
            </form>
            
        </div>
     </div>       

    
    <!-- footer -->
    <footer>
        <div class="section1">
            <a style="padding: 0 10px 0 0;">English (UK)</a>
                <a>অসমীয়া</a>
                <a>বাংলা</a>
                <a>हिन्दी</a>
                <a>नेपाली</a>
                <a>اردو</a>
                <a>Español</a>
                <a>Português (Brasil)</a>
                <a>Français (France)</a>
                <a>Deutsch</a>
                <a>Italiano</a>
        </div>
        <div class="line"></div>
        <div class="section2">
            <a href="./fb-clone.html" style="padding: 0 10px 0 0;">Sign Up</a><a>Log In<a>Messenger<a>Facebook Lite</a><a>Watch</a><a>People</a><a>Pages</a><a>Page categories</a><a>Places</a><a>Games</a><a>Locations</a><a>Marketplace</a><a>Facebook Pay</a><a>Groups</a><a>Jobs</a><a>Oculus</a><a>Portal</a><a>Instagram</a><a>Local</a><a>Fundraisers</a><a>Services</a><a>Voting Information Centre</a><a>About</a><a>Create ad</a><a>Create Page</a><a>Developers</a><a>Careers</a><a>Privacy</a><a>Cookies</a><a>AdChoices</a><a>Terms</a><a>Help</a><a>Settings</a><a>Activity log</a>
        </div>
        <div class="section3" style="margin-top: 20px;  font-size: 12px;
        color: rgb(133, 133, 133);"><p>Fakebook 	&copy; 2021</p></div>
    </footer>
    

    <!-- moadl js -->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var btn_close = document.getElementById("close");

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
            document.body.style.overflow = "hidden" 
        }
        btn_close.onclick = function () {
            modal.style.display = "none";
            document.body.style.overflow = "auto" 
        }
    </script>

</body>
</html>