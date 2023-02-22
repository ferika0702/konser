<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/insert.css">
  <link rel="stylesheet" href="/css/main.css">
  <title>Document</title>
</head>
<body>
    <div class="container">
    </div>
    <div class="center">
        <h1>Login Khusus Admin</h1>
        <form action="" method="post">
        {{ csrf_field() }}
            <div class="txt_field">
                <input type="text" name="email" id="email">
                <span></span>
                <label>Nama</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" id="password">
                <span></span>
                <label>password</label>
            </div>
            <!-- <input type="submit" value="Buy"> -->
            <button type="submit">Buy</button>
            
        </form>
    </div>
  
</body>
</html>