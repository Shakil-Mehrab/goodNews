	<!-- Login and Signup Form -->
    <div id="login-modal" class="login popup" style="display: none;">
        <a class="close-modal" href="#"></a>
        <div class="form-title">
            <h4>Login</h4>
            <div class="signup">
                No account yet? <a href="#">Sign Up</a>
            </div>
        </div>
        <div class="login-by">
            <div class="log-face-w">
                <a class="log-facebook" href="#">Login with Facebook</a>
            </div>
            <div class="log-twit-w">
                <a class="log-twitter" href="#">Login with Twitter</a>
            </div>
        </div>
        <form id="loginform" name="loginform" method="post" action="{{route('signin')}}">
            <div class="email-wrap">
                <input type="text" size="30" value="" class="input" id="user-email" name="log" placeholder="Email">
            </div>     
            <div class="pass-wrap">
                <input type="password" size="30" value="" class="input" id="user-pass" name="password" placeholder="Password">
            </div>
            <div class="option-login">
                <div class="remember">
                    <input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
                </div>
                <div class="forgot">
                    <a href="#">I forgot my password</a>
                </div>
            </div>
            <div class="submit-login">
                <input type="submit" value="Log In" class="submit" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div id="signup-modal" class="popup" style="display: none;">
        <a class="close-modal" href="#"></a>
        <div class="form-title">
            <h4>Sign Up</h4>
            <div class="signup">
                Already a member? <a href="#">Login</a>
            </div>
        </div>
        <div class="login-by">
            <div class="log-face-w">
                <a class="log-facebook" href="#">Login with Facebook</a>
            </div>
            <div class="log-twit-w">
                <a class="log-twitter" href="#">Login with Twitter</a>
            </div>
        </div>
        <form id="signupform" name="signupform" method="post">
            <div class="name-wrap">
                <input type="text" size="30" value="" class="input" id="user-name" name="name" placeholder="Name">
            </div> 
            <div class="email-wrap">
                <input type="text" size="30" value="" class="input" id="user-email2" name="log" placeholder="Email">
            </div>     
            <div class="pass-wrap">
                <input type="password" size="30" value="" class="input" id="user-pass2" name="password" placeholder="Password">
            </div>

            <div class="option-login">
                <div class="remember">
                    <input type="checkbox" name="check4" id="check4" class="css-checkbox" checked="checked"/><label for="check4" class="css-label">Remember me</label>
                </div>
                <div class="forgot">
                    <a href="#">I forgot my password</a>
                </div>
            </div>

            <div class="submit-login">
                <input type="submit" value="Sign Up" class="submit" id="submit2" name="submit">
            </div>
        </form>
    </div>

