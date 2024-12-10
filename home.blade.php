<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
            font-family: 'Arial', sans-serif;
            background: #e8f0fe; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

    
    .home-container {
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

   
    p {
        font-size: 18px;
        color: #555;
        margin-bottom: 10px;
    }

    .input-group button {
        width: 100%;
        padding: 15px;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin-top: 20px;
        transition: background-color 0.3s, transform 0.3s ease-in-out;
    }

 
    .input-group .welcome-btn {
        background-color: #2575fc;
        color: white;
        font-weight: bold;
    }

    .input-group .welcome-btn:hover {
        background-color: #1e62c1;
        transform: translateY(-2px); 
    }

    .input-group .home-btn:active {
        background-color: #1c54a0;
        transform: translateY(2px); 
    }

  </style>
</head>
<body>
  <div class="home-container">
    <h1>Home</h1>
          <p> {{ $nama }}</p>
          <p> {{ $nim }}</p>
          <p> {{ $kelas }}</p>

    <form action="/" method="get">
      <div class="input-group">
       
        <button type="submit" class="welcome-btn">Logout</button>
      </div>
    </form>
  </div>
</body>
</html>

