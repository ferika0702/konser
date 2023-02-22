<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/insert.css">
    <title>Halaman Dasboard</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="" alt="">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Ticket</a></li>
                <li><a href="/dashboard/login">Login</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left-col">
                <h1>music <br> concert</h1>
            </div>
        </div>
    </div>
    <div class="center">
        <h1>Buy Ticket</h1>
        <form action="{{ route('penonton.store') }}" method="post">
        {{ csrf_field() }}
            <div class="txt_field">
                <input type="text" name="nama" id="nama">
                <span></span>
                <label>Nama</label>
            </div>
            <div class="txt_field">
                <input type="text" name="email" id="email">
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="number" name="nomer_telepon" id="nomer_telepon">
                <span></span>
                <label>No. Hp</label>
            </div>
            <!-- <input type="submit" value="Buy"> -->
            <button type="submit">Buy</button>
            
        </form>
    </div>
</body>
</html>