<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<form action="signin.php" method="POST">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Type</label>
                    <select id="user"  name="flood" class="input">
                            <option value="victim">Victim</option>
                            <option value="ngo">NGO</option>
                    </select>
                </div>
                <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" name="user" type="text" class="input" required autofocus>
                    </div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<a href="#	newsfeed/index.html"><input type="submit" class="button" value="Sign In"></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="f4.html">Forgot Password?</a>
				</div>
			</div>
			</form>
			<form action="signup.php" method="POST">
			<div class="sign-up-htm">
                    <div class="group">
                            <label for="user" class="label">Type</label>
                            <select id="user"  name="flood" class="input">
                                    <option value="victim">Victim</option>
                                    <option value="ngo">NGO</option>
                            </select>
                        </div>
				<div class="group">
					<label for="user"class="label">Username</label>
					<input id="user"  name="user" type="text" class="input" required autofocus>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="rpass" class="label">Repeat Password</label>
					<input id="rpass" name="rpass" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" name="email" type="email" class="input" required>
				</div>
				<div class="group">
					<label for="mob" class="label">Mobile number</label>
					<input id="mob" name="mob" type="number" class="input" required>
				</div>
                <div class="group">
					<label for="org" class="label">Organization</label>
					<input id="org" name="org" type="text" class="input" placeholder="Name of your organization if any">
				</div><br>
				<div class="group">
						<!--<center><label for="tab-1" class="button">Sign Up</center>-->
					<a href="mag/index.html"><input type="submit" class="button" target="tab-1" value="Sign Up"></label></a>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>