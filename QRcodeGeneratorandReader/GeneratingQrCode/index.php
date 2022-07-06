<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    
  <link rel="icon" type="image/x-icon" href="../assets/img/qrcodelogo.jpg">
    <link rel="stylesheet" href="../assets/css/generatorstyle.css">
    
</head>
<body>
    <div class="wrapper">
        <header>
         <h1>
           QR Code Creater 
         </h1>
         <p>Create your own QR code</p>
        </header>
        <div class="form">
            <textarea placeholder="Enter text for creating QR code"></textarea>
            <button>Generate QR Code</button>
        </div>
        <input type="hidden" id="dwnimg">
        <div class="qr-code">
            <img src="qr-code.png" alt="qr-code" width="150px" height="150px">
        </div>
        <button id="backbtn">Back</button>
    </div>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/generatorscript.js"></script>
</body>
</html>