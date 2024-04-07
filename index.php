<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cosmo Services Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Include Font Awesome CSS -->
  <style>
    body {
      background: linear-gradient(135deg, #292929 0%, #1a1a1a 100%); /* Soft gradient background */ /* Change to what color you want*/
      color: white; /* Change to what color you want*/
      display: flex;
      flex-direction: column;
      justify-content: center;/* positions top=top bottom=bottom*/
      align-items: center; /* positions Left=right right=left*/ 
      height: 100vh;
      margin: 0;
    }

    h1 {
      font-size: 3em;
      font-family: 'Arial', sans-serif; /* Whatever font you want*/
      font-weight: bold; /* Whatever font weight you want*/
      margin-bottom: 20px;
      position: relative;
      cursor: pointer;
      text-shadow: 0 0 10px rgba(136, 0, 154, 0.8); /* Glowing effect */ /* Change to what color you want*/
      animation: bounce 1s infinite alternate; /* Bouncing animation */ /* change 1s to your own speed e.g. 3s*/
    }

    @keyframes bounce {
      to {
        transform: translateY(-5px);
      }
    }

    .red-text {
      color: #800080; /* Change to what color you want*/
    }
  </style>
</head>
<body>
  <h1>Cosmo <span class="red-text">Services</span></h1> 
  <!-- change the `crimz to whatever text you want to be white e.g crimz switches to hello ` change 'EYX to whatever you want to be red e.g eyx changes to world' -->
</body>
</html>
