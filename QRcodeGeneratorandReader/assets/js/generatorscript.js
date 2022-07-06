const wrapper = document.querySelector(".wrapper"),
qrtext = wrapper.querySelector(".form textarea"),
generateBtn = wrapper.querySelector(".form button"),
qrImg = wrapper.querySelector(".qr-code img"),
dwnImg = document.querySelector("#dwnimg");
generateBtn.addEventListener("click",()=> {
    let qrValue = qrtext.value;
    if(!qrValue) return;
    qrImg.src=`https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${qrValue}`;
    dwnImg.value= qrValue;
    wrapper.classList.add("active");   
});