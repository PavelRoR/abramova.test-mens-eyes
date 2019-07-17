//@prepros-prepend jquery-2.1.1.min.js

let moreButton = document.querySelector('.modal-more'),
    closeButton = document.querySelector('.close'),
    modalWrapper = document.querySelector('.modal-wrapper'),
    modalWindow = document.querySelector('.modal-window'),
    body = document.querySelector('body');
// Показать окно
moreButton.onclick = modalShow;

// Скрыть окно по кнопке X
closeButton.onclick = modalClose;

// Скрыть окно по клике за пределами окна
modalWrapper.onclick = modalClose;

// Показывает окно
function modalShow() {
    let modalIds = this.dataset.modal,
        modal = document.querySelector(modalIds);
    body.classList.add('body-scroll');
    modal.classList.remove('customHidden');
    document.onkeydown = function (e) {
        if (e.keyCode == 27) modalClose();
    }
}
// Скрываем окно
function modalClose() {
    modalWrapper.classList.add('customHidden');
    body.classList.remove('body-scroll');
    document.onkeydown = null;
}
modalWindow.onclick = function () {
    event.stopPropagation();
}