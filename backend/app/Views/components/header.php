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
  background: #B2F2FF; /* light blue */
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
    box-shadow: inset 0px 0px 7px 4px rgba(255, 255, 255, 0.79);
    border-radius: 38px;

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
    box-shadow: inset 0px 0px 7px 4px rgba(255, 255, 255, 0.79);
    border-radius: 38px;

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
    box-shadow: inset 0px 0px 7px rgba(255, 255, 255, 0.79);
    border-radius: 38px;

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
    height: 100vh;
    background-image: url("https://file.garden/ZrIPgCGn9kADc89z/Genopals/bg-genopals.png");
    background-size: contain;
    background-attachment: fixed;


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
        height: 100vh;
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
            color:white;
        }

        div.container {
            display:flex;
            align-items:center;
            justify-content:center;
            margin-bottom:1rem;
            h2 {
                margin:0.5rem;
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


    .container {
        height: 80vh;
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
</style>
</head>


<body>
    <header>
        <a href="/"><img src="https://file.garden/ZrIPgCGn9kADc89z/Genopals/genopals-logo.png" alt="Genopals logo"
                height="65"></a>
        <nav>
            <button class="primary"> <a href="/">CARE </a></button>
            <button class="primary"> <a href="/">INVENTORY </a></button>
            <button class="primary"> <a href="/">SHOP </a></button>
            <button class="primary"> <a href="/">NEWS </a></button>
            <button class="action"> <a href="/">LOG IN </a></button>
        </nav>
    </header>