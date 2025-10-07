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

        <?= view('components/buttons/action', [
    'btnlink' => '/login',
    'btntitle' => 'LOG IN'
]) ?>
    </nav>
</header>