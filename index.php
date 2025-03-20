

<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>CHAT MATE</header>
                <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="first name"required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="last name"required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="enter your email"required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="enter new password"required>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image"required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Have an Account? <a href="login.php">Login Here</a></div>
            </section>
        </div>
        <script src="javascript/signup.js"></script>
    </body>
</html>