<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>

    <!-- header -->
    <?= view('components/header') ?>

    <!-- main content -->
    <section id="login">
        <div class="container">


            <div class="login-container">
                <div class="login-item">

                    <div class="login-img">
                        <div>
                        <h2> No account yet? </h2>
                        <button class="primary"> <a href="/signup"> SIGN UP </a></button>
                        </div>
                    </div>
                </div>
                <div class="login-item">
                    <form action="" method="post">
                        <div>
                        <h2> Username </h2>
                        <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div>
                        <h2> Password </h2>
                        <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div>
                        <button class="action" type="submit"><a> LOG IN </a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </section>

</body>

<!-- footer -->
<?= view('components/footer') ?>

</html>