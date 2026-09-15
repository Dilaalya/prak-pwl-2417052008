<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
           background: linear-gradient(135deg, #fff1f2, #fff7f7);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card {
            width: 420px;
            background: white;
            padding: 35px;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(60, 70, 120, 0.15);
            text-align: center;
        }

        .avatar {
            width: 110px;
            height: 110px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
            border: 6px solid #ffe4e6;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        h1 {
            margin: 0;
            color: #222;
            font-size: 28px;
        }

        .subtitle {
            margin-top: 8px;
            margin-bottom: 28px;
            color: #777;
            font-size: 14px;
        }

        .info {
            display: flex;
            align-items: center;
            text-align: left;
            background: #fff1f2;
            margin-bottom: 12px;
            padding: 15px 18px;
            border-radius: 14px;
        }

        .label {
            width: 80px;
            color: #666;
            font-size: 15px;
        }

        .value {
            color: #222;
            font-weight: bold;
            font-size: 15px;
        }

        .footer {
            margin-top: 25px;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>

<body>

    <div class="profile-card">

        <div class="avatar">
            <img src="{{ asset('image.png') }}" alt="Foto Profil">
        </div>

        <h1>Profil Saya</h1>

        <p class="subtitle">
            Informasi Mahasiswa Universitas Los Angeles
        </p>

        <div class="info">
            <div class="label">Nama</div>
            <div class="value">{{ $nama }}</div>
        </div>

        <div class="info">
            <div class="label">Kelas</div>
            <div class="value">{{ $kelas }}</div>
        </div>

        <div class="info">
            <div class="label">NPM</div>
            <div class="value">{{ $npm }}</div>
        </div>

        <div class="footer">
            By Dila Alya Rahma - 2417052008
        </div>

    </div>

</body>
</html>