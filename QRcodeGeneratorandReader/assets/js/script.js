let btnBack = document.querySelector('#backbtn');
let generating = document.querySelector('#generating');
btnBack.addEventListener('click', () => {
    window.history.back();
});