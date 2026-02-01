<?php
// Tablica z losowymi wyznaniami/komplementami
$walentynki = [
    "Jesteś moim ulubionym powodem do uśmiechu! ❤️",
    "Dziękuję, że jesteś częścią mojego życia.",
    "Z Tobą każdy dzień jest jak Walentynki. ✨",
    "Kochanie, jesteś po prostu niesamowita/y!",
    "Moje serce bije tylko dla Ciebie! 💓"
];

// Losowanie jednej wiadomości
$losowa_wiadomosc = $walentynki[array_rand($walentynki)];

// Obsługa przycisku "TAK" (prosta symulacja)
$sukces = false;
if (isset($_POST['odpowiedz']) && $_POST['odpowiedz'] == 'tak') {
    $sukces = true;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja Walentynka</title>
    <style>
        body {
            background-color: #ffebf0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #d63384;
            text-align: center;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 400px;
            border: 2px solid #ffc1cf;
        }
        h1 { font-size: 2rem; }
        .heart {
            font-size: 4rem;
            color: #e31b23;
            animation: beat .25s infinite alternate;
            margin: 1rem 0;
        }
        @keyframes beat {
            to { transform: scale(1.1); }
        }
        .btn {
            background-color: #ff4d6d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1rem;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn:hover { background-color: #c9184a; }
        .message { font-style: italic; margin: 20px 0; }
    </style>
</head>
<body>

<div class="card">
    <?php if ($sukces): ?>
        <div class="heart">💖</div>
        <h1>Wiedziałem!</h1>
        <p>Zostałeś/aś moją Walentynką! Zaplanuj wieczór, będzie wyjątkowo! 🥂</p>
        <a href="index.php" class="btn">Wróć</a>
    <?php else: ?>
        <div class="heart">❤️</div>
        <h1>Czy zostaniesz moją Walentynką?</h1>
        
        <p class="message">"<?php echo $losowa_wiadomosc; ?>"</p>

        <form method="post">
            <button type="submit" name="odpowiedz" value="tak" class="btn">TAK, OCZYWIŚCIE!</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>