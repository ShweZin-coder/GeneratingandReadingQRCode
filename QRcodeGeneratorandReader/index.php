<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR reader</title>
        
  <link rel="icon" type="image/x-icon" href="assets/img/qrcodelogo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Noto Serif Myanmar';
}
body{
    display:flex;
    align-items: center;
    justify-content:center;
    min-height:120vh;
    background:#3498DB;
}
    .wrapper{
    width:430px;
    height:270px;
    border-radius:7px;
    padding:16px 25px;
    transition:height 0.2s ease;
}
.buttons button{
    height:100px;
    outline:none;
    border:none;
    cursor:pointer;
    font-size: 40px;
    font-weight: 500;
    color:#3498DB;
    background:#fff;
    border-radius: 5px;
    width:100%;
    margin:10px;

}
a{
    text-decoration:none;
}
</style>
<body>
    <div class="wrapper">
       <div class="details">
          <div class="buttons">
          <a href="GeneratingQrCode/"> <button>Generate QR Code</button></a>
          <a href="ReadingQrCode/">   <button href="ReadingQrCode/">Read QR Code</button></a>
          </div>
       </div>
    </div>
</body>
</html>