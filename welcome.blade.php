<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang!</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling */
    body {
        font-family: 'Arial', sans-serif;
            background: #e8f0fe; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
    }

    .welcome-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      font-size: 30px;
      color: #333;
      margin-bottom: 20px;
    }

    
    .input-group {
      margin-bottom: 20px;
    }

    .input-group button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-bottom: 10px;
      transition: background-color 0.3s, transform 0.3s;
    }

 
    .input-group .register-btn {
      background-color: #2575fc;
      color: white;
    }

    .input-group .register-btn:hover {
      background-color: #1e62c1;
      transform: scale(1.05);
    }

    .input-group .register-btn:active {
      background-color: #1c54a0;
      transform: scale(0.98);
    }

   
    .input-group .login-btn {
      background-color: #2575fc;
      color: white;
    }

    .input-group .login-btn:hover {
      background-color: #1e62c1;
      transform: scale(1.05);
    }

    .input-group .login-btn:active {
      background-color: #1c54a0;
      transform: scale(0.98);
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1>Selamat Datang!</h1>
    <form action="/register" method="get">
      <div class="input-group">
        
        <button type="submit" class="register-btn">Daftar</button>
      </div>
    </form>
    <form action="/login" method="get">
      <div class="input-group">
       
        <button type="submit" class="login-btn">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
