<header>
    <a href="/"><img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/genopals-logo.png" alt="Genopals logo"
            height="65"></a>

    <nav>
        <?= view('components/buttons/primary', [
            'btnlink' => '/',
            'btntitle' => 'CARE'
        ]) ?>

        <?= view('components/buttons/primary', [
            'btnlink' => '/',
            'btntitle' => 'INVENTORY'
        ]) ?>

        <?= view('components/buttons/primary', [
            'btnlink' => '/',
            'btntitle' => 'SHOP'
        ]) ?>

        <?= view('components/buttons/primary', [
            'btnlink' => '/news',
            'btntitle' => 'NEWS'
        ]) ?>
        <?php
        $session = session();
        $user = $session->get('user');
        ?>

        <?php if ($user): ?>
            <div class="profile-dropdown">
                <?= view('components/buttons/action', [
                    'btnlink' => '/account',
                    'btntitle' => 'PROFILE'
                ]) ?>
                <div class="dropdown-content">
                    <a href="/account/settings">Settings</a>
                    <a href="#" id="logout-link">Log Out</a>

                    <form id="logout-form" action="/logout" method="post" style="display: none;"></form>

                    <script>
                        document.getElementById('logout-link').addEventListener('click', function(e) {
                            e.preventDefault(); // prevent default anchor behavior
                            document.getElementById('logout-form').submit(); // submit the hidden form
                        });
                    </script>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <?= view('components/buttons/action', [
                'btnlink' => '/login',
                'btntitle' => 'LOG IN'
            ]) ?>
        <?php endif; ?>


    </nav>
</header>