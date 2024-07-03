<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Recommendation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px; /* Adjust the gap between cards */
        }
        .card {
            width: 360px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f1f1f1;
            overflow: hidden;
            border-radius: 25px;
            border: 1px solid black;
            margin: 0 5px;
            padding: 10px;
        }
        .card img {
            width: 256px;
            height: 256px;
            object-fit: cover;
            border-radius: 50%; /* Make the image circular */
            margin-bottom: 10px;
        }
        .card h2 {
            margin: 10px 0 5px;
            text-align: center;
        }
        .card p {
            margin: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="color: white; text-align: center; background-color: rgba(0, 0, 0, 0.5); padding: 10px 20px; border-radius: 10px;">Anime Recommendation</h1>

    <div class="card-container">
        <div class="card" title="Moshuko Tensie">
            <img src="{{ $image }}" alt="Moshuko Tensie Image">
            <h2>{{ $title }}</h2>
            <p>{{ $rating }}</p>
        </div>
        <div class="card" title="kaiju No 8">
            <img src="{{ $image1 }}" alt="kaiju No 8 Image">
            <h2>{{ $title1 }}</h2>
            <p>{{ $rating1 }}</p>
        </div>
        <div class="card" title="Spirit Chronicles">
            <img src="{{ $image2 }}" alt="Spirit Chronicles Image">
            <h2>{{ $title2 }}</h2>
            <p>{{ $rating2 }}</p>
        </div>
    </div>
</body>
</html>
