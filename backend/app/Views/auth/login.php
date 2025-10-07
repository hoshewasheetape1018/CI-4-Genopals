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

                            <?= view('components/buttons/primary', [
    'btnlink' => '/signup',
    'btntitle' => 'SIGN UP'
]) ?>
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

                            <?= view('components/buttons/action', [
    'btnlink' => '#',
    'btntitle' => 'LOG IN',
    'btntype' => 'submit'
]) ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

<!-- footer -->
<?= view('components/footer') ?>

</html>