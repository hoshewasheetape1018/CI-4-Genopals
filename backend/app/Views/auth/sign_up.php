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
            <form action="/signup" method="post">
                <?php
                $errors = session()->getFlashdata('errors') ?? [];
                $old = session()->getFlashdata('old') ?? [];
                ?>

              <div>
                    <h3>Username</h3>
                    <input type="text" name="username" placeholder="Username" value="<?= esc($old['username'] ?? '') ?>" required>
                </div>

                <div>
                    <h3>Display Name</h3>
                    <input type="text" name="display_name" placeholder="Display Name" value="<?= esc($old['display_name'] ?? '') ?>" required>
                </div>

                <div>
                    <h3>Email</h3>
                    <input type="email" name="email" placeholder="Email" value="<?= esc($old['email'] ?? '') ?>" required>
                </div>

                <div>
                    <h3>Password</h3>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div>
                    <h3>Confirm Password</h3>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                </div>

                <div class="button-group">
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

    <!-- footer -->
    <?= view('components/footer') ?>

</body>
</html>
