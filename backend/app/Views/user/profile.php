<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>
<?php
// fake logged in user
$user = [
    'id' => 1,
    'username' => 'hoshee',
    'display_name' => 'Hosh',
    'created_at' => '2025-11-03',
    'num_pets' => 2,
    'avatar' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png'
];

// fake pets array
$pets = [
    [
        'name' => 'Hikari',
        'image' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png',
        'health' => 75,
        'energy' => 60,
        'hunger' => 20,
    ],
    [
        'name' => 'Luna',
        'image' => 'https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab2.png',
        'health' => 90,
        'energy' => 50,
        'hunger' => 40,
    ],
];
?>

    <!-- header -->
    <?= view('components/header') ?>

    <section id="profile">
        <div class="container profile-container">
            <div class="profile-header">
                <div class="avatar">
                    <img src="<?= esc($user->avatar ?? ('https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png')) ?>"
                        alt="avatar" style="                    height: 233%;
                    width: 100%;
                    object-fit: contain;
                    margin-top: -15px;">
                </div>
                <div class="profile-info">
                    <div class="left-info">
                        <p class="label">Display name</p>
                        <p class="value"><?= esc($user->display_name ?? '@username') ?></p>

                        <p class="label">Date registered</p>
                        <p class="value"><?= esc($user->created_at ?? 'Unknown') ?></p>
                    </div>

                    <div class="right-info">
                        <p class="label">Username</p>
                        <p class="value">@<?= esc($user->username ?? 'unknown') ?></p>

                        <p class="label">Number of pets owned</p>
                        <p class="value"><?= esc($user->num_pets ?? 0) ?></p>
                    </div>
                    <a href="/profile/settings" style="  color: inherit;
                        text-decoration: none;
                        transition: 0.2s;">
                        <i class="fa-solid fa-pen-to-square fa-xl"></i>
                    </a>
                </div>
            </div>
            <div class="pet-container">
          <div class="pets-container">
    <?php
    $totalSlots = 3;
    $ownedPets = $pets ?? []; // from controller
    ?>

    <?php for ($i = 0; $i < $totalSlots; $i++): ?>
        <?php if (isset($ownedPets[$i])): ?>
            <?php $pet = $ownedPets[$i]; ?>
            <div class="feat-item">
                <div style="
                        display: flex;
                        justify-content: center;
                    ">
                    <img src="<?= esc($pet['image']) ?>" alt="<?= esc($pet['name']) ?>" height="250">
                </div>

                <div class="stat-container">
                    <h4>Health:</h4>
                    <div class="stat-box">
                        <div class="stat-bar" id="health" style="width:<?= $pet['health'] ?>%;"></div>
                    </div>
                </div>

                <div class="stat-container">
                    <h4>Energy:</h4>
                    <div class="stat-box">
                        <div class="stat-bar" id="energy" style="width:<?= $pet['energy'] ?>%;"></div>
                    </div>
                </div>

                <div class="stat-container">
                    <h4>Hunger:</h4>
                    <div class="stat-box">
                        <div class="stat-bar" id="hunger" style="width:<?= $pet['hunger'] ?>%;"></div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="feat-item empty-slot">
                <a href="/adopt" class="add-pet">
                    <i class="fa-solid fa-plus fa-4x"></i>
                    <p>Adopt a new Genopal</p>
                </a>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</div>

                   
                </div>
            </div>
        </div>
    </section>

    <?= view('components/footer') ?>
</body>

</html>