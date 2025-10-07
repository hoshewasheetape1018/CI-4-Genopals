<head>
    <meta charset="UTF-8">
    <title>〖 GENOPALS 〗</title>
    <meta name="description" content="Raise a virtual angel pet in your own web browser.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://file.garden/ZrIPgCGn9kADc89z/Genopals/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <style>
    :root {
        --primary: #007EB0;
        /*--secondary: ; */
    }

    /* HEADER STYLES */

    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* track */
    ::-webkit-scrollbar-track {
        background: #B2F2FF;
        /* light blue */
    }

    /* handle */
    ::-webkit-scrollbar-thumb {
        background: linear-gradient(180deg, #00AFD2, #005A6C);
        border-radius: 6px;
    }

    /* handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(180deg, #5B9ED9, #005A6C);
    }

    a {
        text-decoration: none;
    }

    header {
        position: relative;
        z-index: 1;
        overflow: hidden;
        background: linear-gradient(90deg, #B2F2FF 0%, #5B9ED9 100%);
        display: flex;
        justify-content: space-around;
        padding: 1.2rem;
        border-bottom: 3px solid #005A6C;

        nav {
            display: flex;
            gap: 2rem;
        }

        img {
            margin: -10px;
        }
    }



    /* BUTTON STYLES */
    button {
        padding-inline: 1.5rem;
        height: 3rem;
        box-shadow: inset 0px 0px 7px 4px rgba(255, 255, 255, 0.79);
        border-radius: 38px;

        a {
            font-family: 'Inter';
            font-weight: 700;
            text-decoration: none;
            font-size: 2rem;
        }
    }

    button.primary {
        background: linear-gradient(180deg, #FFFFFF 0%, #D0E2EE 82.69%);
        border: 3px solid #007EB0;


        a {
            color: #B2F2FF;

            text-shadow:
                -2px -2px 0px #005A6C,
                2px -2px 0px #005A6C,
                -2px 2px 0px #005A6C,
                2px 2px 0px #005A6C,
                0px -2px 0px #005A6C,
                -2px 0px 0px #005A6C,
                2px 0px 0px #005A6C,
                0px 2px 0px #005A6C;

        }
    }

    button.action {
        background: linear-gradient(180deg, #FFF8E8 0%, #FFD06A 82.69%);
        border: 3px solid #B97E00;


        a {
            color: #FFC548;
            text-shadow:
                -2px -2px 0 #6B4800,
                2px -2px 0 #6B4800,
                -2px 2px 0 #6B4800,
                2px 2px 0 #6B4800,
                0 -2px 0 #6B4800,
                -2px 0px 0 #6B4800,
                2px 0px 0 #6B4800,
                0 2px 0 #6B4800;

        }
    }

    button.secondary {
        background: linear-gradient(180deg, #B2F2FF 0.48%, #00AFD2 83%);
        border: 3px solid #FFFFFF;


        a {
            color: #ffffffff;
            text-shadow:
                -2px -2px 0 #005A6C,
                2px -2px 0 #005A6C,
                -2px 2px 0 #005A6C,
                2px 2px 0 #005A6C,
                0px -2px 0 #005A6C,
                -2px 0px 0 #005A6C,
                2px 0px 0 #005A6C,
                0px 2px 0 #005A6C;
        }
    }

    button.disabled {
        background: linear-gradient(180deg, #D9D9D9 0.48%, #696969 83%);
        border: 3px solid #FFFFFF;
        box-shadow: inset 0px 0px 7px rgba(255, 255, 255, 0.79);


        a {
            color: #ffffffff;
            text-shadow:
                -2px -2px 0 #363636,
                2px -2px 0 #363636,
                -2px 2px 0 #363636,
                2px 2px 0 #363636,
                0px -2px 0 #363636,
                -2px 0px 0 #363636,
                2px 0px 0 #363636,
                0px 2px 0 #363636;

        }
    }

    button.bordered {
        background: transparent;
        border: 3px solid var(--primary);
        box-shadow: none;

        a {
            color: var(--primary);
            text-shadow: none;
        }
    }

    button:hover {
        cursor: pointer;
    }

    button.primary:hover {
        background: linear-gradient(0deg, #FFFFFF 0%, #D0E2EE 82.69%);

    }

    button.secondary:hover {
        background: linear-gradient(0deg, #B2F2FF 0.48%, #00AFD2 83%)
    }


    button.action:hover {
        background: linear-gradient(0deg, #FFF8E8 0%, #FFD06A 82.69%);

    }

    button.disabled:hover {
        cursor: not-allowed;
        background: linear-gradient(0deg, #D9D9D9 0.48%, #696969 83%);
    }

    button.bordered:hover {
        background: var(--primary);

        a {
            color: #FFFFFF;
        }
    }

    button.cta {


        height: 4.5rem;
        border-radius: 25px;
        padding-inline: 3.5rem;

    }

    /* BODY STYLES */
    body {
        position: relative;
        z-index: 0;
        margin: 0;
        padding: 0;
        height: 100%;
        background-image: url("https://file.garden/ZrIPgCGn9kADc89z/Genopals/bg-genopals.png");
        background-size: contain;
        background-attachment: fixed;
        color: var(--primary);
        font-family: 'Inter', sans-serif;

        h1,
        h2 {
            font-family: 'Playfair Display';
            font-weight: 700;
            text-align: center;

            color: #5B9ED9;


        }

        h1 {
            font-size: 40px;
            text-shadow: 0px 4px 4px #1E1E1E;
        }

        h2 {
            font-size: 36px;
            text-shadow: 0px 1px 3px #000000ff;
        }

        img {

            object-fit: cover;
        }

        section {
            height: 100%;
            margin: 0;
            padding: 1.5rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        section#hero {
            height: 85vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            background-image: url("https://file.garden/ZrIPgCGn9kADc89z/Genopals/better_hero_bg%20artge2.png");
            padding-bottom: 4rem;
            background-size: cover;
            background-position: center;
            animation: panDown 0.8s ease-out forwards;


            h1 {
                color: #F6E8FF;
                text-shadow:
                    -2px -2px 0 #747AFF,
                    2px -2px 0 #747AFF,
                    -2px 2px 0 #747AFF,
                    2px 2px 0 #747AFF,
                    0px -2px 0 #747AFF,
                    -2px 0px 0 #747AFF,
                    2px 0px 0 #747AFF,
                    0px 2px 0 #747AFF;
                margin-bottom: 1.1rem;

                background: linear-gradient(90deg, rgba(0, 175, 210, 0) 0%, rgba(0, 175, 210, 1.0) 20%, rgba(0, 175, 210, 1.0) 80%, rgba(0, 175, 210, 0) 100%);
                padding: 0.1rem;
            }
        }


        section#section1 {
            position: relative;
            height: 105vh;
            top: -11vh;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.318182) 4.33%, #FFFFFF 8.65%, #EBF4F5 100%);
            padding-top: 7rem;

            .container h2 {
                margin-bottom: 0;

            }
        }

        section#section3 {
            background: linear-gradient(180deg, #00729E 0%, #005A6C 100%);

            h2#title {
                color: white;
            }

            div.container {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 1rem;
                height: 15vh;
                min-height: unset;

                h2 {
                    margin: 0.5rem;
                }
            }


        }


        section#section4 {
            height: 65vh;
            background: linear-gradient(180deg, #FFFFFF 0%, #EBF4F5 100%);

            h2 {
                margin: 0;
            }

            p {
                font-family: 'Inter';
                font-size: 30px;
                color: var(--primary);
                margin-bottom: 2rem;
            }

        }

        section#news {
            div.container {
                justify-content: center;
            }

            .news-card {
                margin: 1.5rem;
                padding-inline: 10rem;
                width: auto;
                background-color: #B2F2FF;
                display: flex;
                justify-content: center;
                align-self: center;
                text-align: center;
                flex-direction: column;
                border: 5px solid #007EB0;

                h2 {
                    margin-bottom: 1.3rem;
                }

                p {
                    font-family: 'Inter';
                    color: var(--primary);
                    margin-top: 0;
                    margin-bottom: 1.5rem;
                }
            }

        }

        section#moodboard {

            .container {
                padding-bottom: 5rem;
            }

            .moodboard-grid {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 2rem;

                h4 {
                    font-family: 'Inter';
                    color: var(--primary);
                }

            }


            .color-row {
                display: flex;
                gap: 1rem;
                justify-content: center;
                align-items: center;
                margin-top: 1rem;
            }

            .color-row .color {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                border: 3px solid #FFFFFF;
            }

            /* nth-child selectors for your palette */
            .color-row .color:nth-child(1) {
                background-color: #EBF4F5;
                /* off-white */
            }

            .color-row .color:nth-child(2) {
                background-color: #B2F2FF;
                /* light blue */
            }

            .color-row .color:nth-child(3) {
                background-color: #005A6C;
                /* dark blue */
            }

            .color-row .color:nth-child(4) {
                background-color: #FFC548;
                /* yellow */
            }

            .color-row .color:nth-child(5) {
                background-color: #DCA8FF;
                /* magenta */
            }

            .typography {
                display: flex;
                gap: 4rem;
                justify-content: center;


                h2 {
                    color: var(--primary);
                    margin-top: 0;
                    margin-bottom: 0.5rem;
                    text-shadow: none;
                    text-align: start;


                }

                p {
                    color: var(--primary);
                    font-size: 1.2rem;
                }

                #playfair {
                    font-family: 'Playfair Display';
                }

                #inter {
                    font-family: 'Inter';
                }

            }

            .button-row {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                align-items: center;
            }

            .button-row button {
                flex: 1 1 calc(50% - 1rem);
                width: 7rem;
            }

            .card-row {
                display: flex;
                gap: 1.5rem;
                justify-content: center;
                margin-top: 1rem;
                width: 50rem;
            }

            .card-row:nth-child(2) {
                margin-top: 0;

                h3 {
                    display: flex;
                    gap: 10px;
                    align-items: center;
                    justify-content: flex-start;

                    img {
                        border-radius: 100%;
                        background-color: var(--primary);
                        padding: 5px;
                    }
                }
            }

            .logo-row {
                display: flex;
                gap: 2rem;
                justify-content: center;
                align-items: center;
                margin-top: 1rem;

                div {
                    width: 100px;
                    height: 100px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border-radius: 10px;
                    background-color: var(--primary);

                    padding: 2rem;

                    img {
                        width: 123px;
                        height: 118px;
                        object-fit: none;
                        object-position: 0px 0px;
                    }

                }

                .rounded {
                    border-radius: 100%;
                }
            }
        }

        section#roadmap {
            text-align: center;

            .container {
                padding-bottom: 3rem;

            }

            /* Cards Row */
            .card-row {
                display: flex;
                flex-wrap: wrap;
                gap: 1.5rem;
                justify-content: center;
            }

            /* Individual Cards */
            .card {
                background: #FFFFFF;
                border: 2px solid #D0D0D0;
                border-radius: 12px;
                padding: 1rem 1.2rem;
                width: 250px;
                flex: -15 1 200px;
                text-align: left;
                filter: drop-shadow(0px 6px 5px #B6B6B6);
                position: relative;
            }

            /* Card Title + Badge */
            .card h3 {
                font-family: 'Inter', sans-serif;
                color: var(--primary);
                font-weight: 600;
                font-size: 1rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            /* Badge styles (global) */
            .card h3 .badge {
                font-family: 'Inter', sans-serif;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.25rem 0.6rem;
                border-radius: 12px;
                text-transform: uppercase;
                border: 1px solid;
            }

            /* Badge colors */
            .badge.completed {
                color: #007EB0;
                border-color: #007EB0;
                background: #B2F2FF33;
            }

            .badge.inprogress {
                color: #B97E00;
                border-color: #B97E00;
                background: #FFD06A33;
            }

            .badge.planned {
                color: #FFFFFF;
                /* white text */
                border-color: #FFFFFF;
                /* white border */
                background: #007EB0;
                /* solid blue background */
            }

            .badge.future {
                color: #B97E00;
                border-color: #B97E00;
                background: #DCA8FF33;
            }
        }


        section#login {

            .container {
                padding-bottom: 3rem;
            }

            .login-container {
                display: flex;
                height: 100%;
                width: 75vw;
                gap: 1.5rem;
            }

            .login-item {
                height: 80vh;
                width: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 1.3rem;
                border-style: inset;
                border: 5px solid white;
                box-shadow: 0px 4px 4px #00000040;
            }

            .login-item:nth-of-type(2) {
                background-color: #D0E2EE;
                justify-content: flex-start;
                padding-inline: 1.3rem;


                h2 {
                    text-align: left;
                    margin-bottom: 0.7rem;
                }
            }

            .login-img {
                width: 100%;
                height: 100%;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0) 48%,
                        rgba(255, 255, 255, 0.32) 60%,
                        #ffffff 76%),
                    url("https://file.garden/ZrIPgCGn9kADc89z/Genopals/better_hero_bg%20artge2.png");
                background-size: cover;
                background-position: center;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                align-items: center;

                h2 {
                    margin-bottom: 0.5rem;
                }

                div {
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-end;
                    align-items: center;
                    margin-bottom: 1.3rem;
                }


            }

            form>div:nth-of-type(3) {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }
        }

        section#signup {
     

            .container {
                padding-bottom: 3rem;
                 h2 {
                margin-bottom: -0.8rem;
                 }
            }

            form > div:nth-of-type(4) {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

        }

        input {
            margin-bottom: 1.5rem;
            width: 27.5rem;
            height: 2.5rem;
            font-size: 1.2rem;
        }

        .container {
            min-height: 80vh;
            width: 80vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 9px solid transparent;
            border-image: linear-gradient(180deg, #5B9ED9 0%, #B2F2FF 50%, #5B9ED9 90%) 1;
            background-color: #EBF4F5;
            gap: 2rem;
            filter: drop-shadow(0px 6px 16.6px #B6B6B6);

        }

        .card {
            background: #EBF4F5;
            border: 2px solid var(--primary);
            border-radius: 10px;
            padding: 1.5rem;
            filter: drop-shadow(0px 6px 5px #B6B6B6);

            button {
                a {
                    font-size: 1.3rem;
                }
            }
        }

        div#features1 {
            display: flex;
            gap: 2rem;
            align-items: center;
            width: 90%;


            div.feat-item {
                padding-top: 0.5rem;
                height: 100%;
                width: 30%;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #D0E2EE;

            }

            div.stat-container {
                width: 70%;
                padding-inline: 1.5rem;
                margin-bottom: -0.7rem;
                display: flex;
                gap: 1.4rem;
                align-items: center;

                h4 {
                    width: 50px;
                    font-family: 'Inter';
                    color: var(--primary);

                }

                .stat-box {

                    background-color: #EBF4F5;
                    height: 20px;
                    width: 300px;
                    padding: 0.5rem;
                    filter: drop-shadow(0px 3px 2px #B6B6B6);
                    display: flex;
                    align-items: center;

                    .stat-bar {
                        height: 90%;
                        width: 30%;
                    }

                    div#health {
                        background: linear-gradient(90deg, #5B9ED9 0%, #B2F2FF 100%);
                    }

                    div#energy {
                        background: linear-gradient(90deg, #E99F00 0%, #FFD06A 100%);
                    }

                    div#hunger {
                        background: linear-gradient(90deg, #005A6C 0%, #007EB0 100%);

                    }
                }
            }



        }



        /* BODY ANIMATIONS */
        @keyframes panDown {
            from {
                transform: translateY(-10px);
            }

            to {
                transform: translateY(0);
            }
        }

        /* FOOTER STYLES */
        footer {
            background-color: black;
            font-family: "Inter";
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1.5rem;

            h1 {
                font-family: "Playfair Display";
                font-size: 2.5rem;
                margin: 0;
                color: white;
            }

            p {
                color: #D8D8D8;
                width: 60vw;
                text-align: justify;
                font-style: normal;
                font-weight: 300;
                font-size: 1rem;
                line-height: 1.5rem;
            }

            div {
                display: flex;
                justiy-content: space-between;
                padding-inline: 1.5rem;
                margin: 0;
                align-items: center;

                nav {
                    display: flex;
                    gap: 1.5rem;
                }

                a {
                    text-decoration: none;
                    color: #D8D8D8;

                }

            }
        }
    }
    </style>
</head>