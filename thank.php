<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Remerciements</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: ;
        }

        .animation-container {
            width: 406px;
            height: 206px;
            position: relative;
            background-color: #fff;
            border: 3px solid #f9a70f;
            text-align: center;
            animation: colorBoom 1s infinite alternate;
        }

        @keyframes colorBoom {
            0% {
                background-color: #fff;
                border-color: #f9a70f;
            }
            100% {
                background-color: #f9a70f;
                border-color: #fff;
            }
        }

        .motivation-family {
            font-size: 24px;
            color: #fd2c0f;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="animation-container">
        <div class="motivation-family">
            Motivation Family
        </div>
        <h1>Merci pour votre message</h1>
        <p>Motivation family agency remercie toutes les personnes qui nous ont contactés et nous vous répondrons dès que possible.</p>
        <a href="index.html">Retour à la page d'accueil</a>
    </div>
</body>
</html>
