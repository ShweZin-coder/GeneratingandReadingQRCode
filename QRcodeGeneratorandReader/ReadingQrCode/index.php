<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR reader</title>
        
  <link rel="icon" type="image/x-icon" href="../assets/img/qrcodelogo.jpg">
    <link rel="stylesheet" href="../assets/css/readerstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>
    <div class="wrapper">
        <form action="#">
            <input type="file" hidden>
            <img src=" " width="150px" height="150px">
             <div class="content">
                <i class="fa fa-cloud-upload"></i>
                <p>Upload QR code to scan</p>
             </div>
       </form>
       <div class="details">
          <textarea disabled></textarea>
          <div class="buttons">
          <button id="backbtn">Back</button>
         </div>
       </div>
    </div>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/readerscript.js"></script>
</body>
</html>