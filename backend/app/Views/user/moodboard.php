<!DOCTYPE html>
<html lang="en">
<?= view('components/head') ?>

<body>

    <!-- header -->
    <?= view('components/header') ?>

    <!-- start of moodboard page -->

    <section id="moodboard">
        <div class="container">
            <div>
            <h2> MOODBOARD </h2>
                    <h4> Visual design guide for Genopals. </h4>
            </div>
            <div class="moodboard-grid">

                <div>
                    <h4>LOGO</h4>
                    <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/genopals-logo.png" alt="LOGO" height="100">
                </div>

                <div>
                    <h4>COLORS</h4>
                    <div class="color-row">
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                    </div>
                </div>

                <div>
                    <h4>TYPOGRAPHY</h4>

                    <div class="typography">
                        <div id="playfair">
                            <h2> Playfair Display </h2>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                        </div>

                        <div id="inter">
                            <h2> Inter </h2>
                            <p>The quick brown fox jumps over the lazy dog.</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h4> BUTTON STYLES</h4>

                    <div class="button-row">
                        <button class="primary"><a href="">PRIMARY</a></button>
                        <button class="secondary"><a href="">SECONDARY</a></button>
                        <button class="action"><a href=""> CTA</a></button>
                        <button class="disabled"><a href="">DISABLED</a></button>
                        <button class="bordered"><a href="">BORDER</a></button>
                    </div>
                </div>

                <div>
                    <h4> CARD STYLES </h4>
                    <div class="card-row">
                        <div class="card">
                            <h3>Card Title</h3>
                            <p>This is a sample card description. It provides a brief overview of the card content.</p>
                            <button class="primary"><a href="">Learn More</a></button>
                        </div>

                        <div class="card">
                            <h3> <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/favicon.png" alt="pfp" height="25"> User</h3>
                            <p>This is a sample card description. It provides a brief overview of the card content.</p>
                            <button class="secondary"><a href="">Learn More</a></button>
                        </div>

                        <div class="card">
                            <h3>
                                "This game cleansed my soul and redefined my purpose."
                            </h3>
                            <p> — Anonymous Player </p>
                            <button class="action"><a href="">Learn More</a></button>
                        </div>
                    </div>
                </div>

                <div>
                    <h4>LOGO STYLES</h4>
                    <div class="logo-row">
                        <div><img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/genopals-logo.png" alt="logo"></div>
                        <div class="rounded"><img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/genopals-logo.png" alt="logo"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</body>

<!-- footer -->
<?= view('components/footer') ?>

</html>