<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>

    <!-- header -->
    <?= view('components/header') ?>

    <section id="adopt_form">
        <div class="container adopt-container">
            <!-- Pet Preview -->
            <div class="pet-preview">
                <img id="petImage" src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png" alt="Pet Preview">
            </div>

            <!-- Form Section -->
            <div class="form-section">
                <h3>Pet name</h3>
                <input id="petName" type="text" placeholder="Enter name">

                <h3>Species</h3>
                <div class="species-options">
                    <label class="species-btn">
                        <input type="radio" name="species" value="bunny" checked>
                        <span>Bunny</span>
                    </label>
                    <label class="species-btn">
                        <input type="radio" name="species" value="goat">
                        <span>Goat</span>
                    </label>
                    <label class="species-btn">
                        <input type="radio" name="species" value="fish">
                        <span>Fish</span>
                    </label>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <h3 id="speciesTitle">Needy & Joyful Bunny</h4>
                    <p id="speciesDesc">Bunnies are affectionate and cheerful, but they need lots of attention and care
                        to stay happy!</p>
                </div>

                <!-- Stats -->
                <div class="stats">
                    <div class="stat">
                        <label>Affection</label>
                        <div class="stat-box" aria-hidden="true">
                            <div class="stat-bar-fill" id="stat1" style="width:0%"></div>
                        </div>
                    </div>
                    <div class="stat">
                        <label>Energy</label>
                        <div class="stat-box" aria-hidden="true">
                            <div class="stat-bar-fill" id="stat2" style="width:0%"></div>
                        </div>
                    </div>
                    <div class="stat">
                        <label>Maintenance</label>
                        <div class="stat-box" aria-hidden="true">
                            <div class="stat-bar-fill" id="stat3" style="width:0%"></div>
                        </div>
                    </div>
                </div>

                <?= view('components/buttons/primary', [
                    'btnlink' => '#',
                    'btntitle' => 'CONFIRM'
                ]) ?>
            </div>
        </div>
    </section>

    <script>
    // Species data
    const speciesData = {
        bunny: {
            title: "Needy & Joyful Bunny",
            desc: "Bunnies are affectionate and cheerful, but they need lots of attention and care to stay happy!",
            img: "https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png",
            stats: [90, 70, 30] // affection, energy, maintenance
        },
        goat: {
            title: "Sleepy & Low-Maintenance Goat",
            desc: "Goats are calm, lazy creatures who love naps and need little attention — perfect for chill caretakers.",
            img: "https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab2.png",
            stats: [40, 30, 90]
        },
        fish: {
            title: "Active & Social Fish",
            desc: "Fish are lively and love company! They're full of energy but require a balanced routine to thrive.",
            img: "https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab3.png",
            stats: [70, 95, 50]
        }
    };

    // DOM elements
    const petImage = document.getElementById('petImage');
    const speciesTitle = document.getElementById('speciesTitle');
    const speciesDesc = document.getElementById('speciesDesc');
    const statFills = [
        document.getElementById('stat1'),
        document.getElementById('stat2'),
        document.getElementById('stat3')
    ];

    // helper to set stat fill widths (0-100)
    function setStats(values) {
        values.forEach((val, i) => {
            const safe = Math.max(0, Math.min(100, Number(val) || 0));
            statFills[i].style.width = safe + '%';
            // set aria attribute for accessibility (optional)
            statFills[i].setAttribute('aria-valuenow', safe);
        });
    }

    // Handle species change
    document.querySelectorAll('input[name="species"]').forEach(radio => {
        radio.addEventListener('change', (e) => {
            const selected = speciesData[e.target.value];

            // Update image & text
            petImage.src = selected.img;
            speciesTitle.textContent = selected.title;
            speciesDesc.textContent = selected.desc;

            // Update stats (apply to the inner fill only)
            setStats(selected.stats);
        });
    });

    // Initialize stats to default species (bunny)
    setStats(speciesData.bunny.stats);
    </script>

    <?= view('components/footer') ?>
</body>

</html>