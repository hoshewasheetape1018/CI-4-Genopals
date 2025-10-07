<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>〖 GENOPALS 〗</title>
    <meta name="description" content="Raise a virtual angel pet in your own web browser.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://file.garden/ZrIPgCGn9kADc89z/Genopals/favicon.png">

    <!-- header -->
    <?= view('components/header') ?>

    <!-- start of landing page -->

    <section id="hero">
        <h1>
            Create and take care of your own virtual angel pet!
        </h1>
        <button class="secondary cta"><a href=""> SIGN UP</a></button>
    </section>


    <section id="section1">
        <div class="container">
            <h2>Choose from 3 diffferent species</h2>

            <div id="features1">


                <div class="feat-item">
                    <div>
                        <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab1.png" alt="PET1" height="250"
                            >
                    </div>

                    <div class="stat-container">
                        <h4>Health:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="health" style= "width:75%;"></div>
                        </div>
                    </div>
                    <div class="stat-container">
                        <h4>Energy:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="energy" style= "width:60%;"></div>
                        </div>
                    </div>

                    <div class="stat-container">
                        <h4>Hunger:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="hunger" style= "width:19%;"></div>
                        </div>
                    </div>
                </div>

                <div class="feat-item">
                    <div>
                        <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab2.png" alt="PET1" height="250"
                           >
                    </div>

                    <div class="stat-container">
                        <h4>Health:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="health" style= "width:89%;"></div>
                        </div>
                    </div>
                    <div class="stat-container">
                        <h4>Energy:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="energy" style= "width:40%;"></div>
                        </div>
                    </div>

                    <div class="stat-container">
                        <h4>Hunger:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="hunger" style= "width:30%;"></div>
                        </div>
                    </div>
                </div>
                <div class="feat-item">
                    <div>
                        <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/ab3.png" alt="PET1" height="250"
                            >
                    </div>

                    <div class="stat-container">
                        <h4>Health:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="health" style= "width:30%;"></div>
                        </div>
                    </div>
                    <div class="stat-container">
                        <h4>Energy:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="energy" style= "width:90%;"></div>
                        </div>
                    </div>

                    <div class="stat-container">
                        <h4>Hunger:</h4>
                        <div class="stat-box">
                            <div class="stat-bar" id="hunger" style= "width:70%;"></div>
                        </div>
                    </div>
                </div>


            </div>

    </section>

    <section id="section2">

        <div class="container">
            <h2>Feed, play, and care for your new pet!</h2>
            <img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/feat2.png" alt="section2 feature" height="350">
        </div>

    </section>

    <section id="section3">

            <h2 id="title" >Game Features</h2>
            <!-- carousel here or not -->

            <div class="container">
                <h2>own up to 3 pets at a time!</h2>
            </div>
            <div class="container">
                <h2>feed, play, and care for your pet and watch them grow!</h2>
            </div>
            <div class="container">
                <h2>buy and sell items for your pet!</h2>
            </div>
            <div class="container">
                <h2>... and more!</h2>
            </div>

    </section>

    <section id="section4">

        <h2>Join Us Now!</h2>
        <p> Adopt a virtual pet and raise them with us at Genopals! </p>
        <button class="primary cta"> <a href="/"> SIGN UP </a></button>

    </section>

    </body>

    <!-- footer -->
    <?= view('components/footer') ?>

</html>