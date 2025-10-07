<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>

    <!-- header -->
    <?= view('components/header') ?>

    <!-- main content -->
    <section id="signup">
        <div class="container">
            <h2>Sign Up</h2>
            <form action="" method="post">
                <div>
                    <h3> Username </h3>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div>
                    <h3> Password </h3>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <h3> Confirm Password </h3>
                    <input type="password" name="Confirm password" placeholder="Password" required>
                </div>
                <div>
                    <?= view('components/buttons/primary', [
                        'btnlink' => '/login',
                        'btntitle' => 'BACK'
                    ]) ?>

                    <?= view('components/buttons/secondary', [
                        'btntitle' => 'SIGN UP',
                        'btntype' => 'submit'
                    ]) ?>

                </div>
            </form>

        </div>
    </section>
    </section>

</body>

<!-- footer -->
<?= view('components/footer') ?>

</html>