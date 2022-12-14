<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="inc/login.inc.php">

                <div class="modal-header">
                    <h4 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-3"></i>User Login
                    </h4>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="text" class="form-label">Username</label>
                        <input type="text" name ="uid" class="form-control shadow-none">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"name="pwd" class="form-control shadow-none">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" name="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>

                </div>

                <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo"<p> Alle Felder ausfüllen</p>";
                            }
                            else if($_GET["error"] == "wronglogin"){
                                echo"<p> Falsche Anmeldedaten</p>";
                            }

                        }
                ?>

            </form>

        </div>
    </div>
</div>



<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

                <form action="inc/signup.inc.php" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-plus-fill fs-3 me-3"></i>User Registration
                        </h4>
                        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="uid" class="form-control shadow-none">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control shadow-none">
                        </div>

                        <div class="mb-4">
                            <label for="pwd" class="form-label">Password</label>
                            <input type="password" name="pwd" class="form-control shadow-none">
                        </div>

                        <div class="mb-4">
                            <label for="pwdrepeat" class="form-label">Password again</label>
                            <input type="password" name="pwdrepeat" class="form-control shadow-none">
                        </div>

                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" name="submit" class="btn btn-dark shadow-none">Sign Up</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>

                    </div>
                    <?php
                        if(isset($_GET["error"])){

                            if($_GET["error"] == "emptyinput"){
                                echo"<p> Alle Felder ausfüllen</p>";
                            }
                            else if($_GET["error"] == "invaliduid"){
                                echo"<p> Username vergeben</p>";
                            }
                            else if($_GET["error"] == "invalidemail"){
                                echo"<p> passende E mail angeben</p>";
                            }
                            else if($_GET["error"] == "passwordsdontmatch"){
                                echo"<p>Passwords doesnt match</p>";
                            }
                            else if($_GET["error"] == "stmtfailed"){
                                echo"<p> Etwas ist schief gelaufen, bitte erneut prüfen</p>";
                            }
                            else if($_GET["error"] == "usernametaken"){
                                echo"<p> Username ist bereits vergeben</p>";
                            }
                            else if($_GET["error"] == "none"){
                                echo"<p> Sie Sind registriert!</p>";
                            }
                        }
                ?>
                </form>



        </div>
    </div>
</div>
