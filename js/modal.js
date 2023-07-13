
let modal = document.getElementById('modal')
let modalMain = document.querySelector('.modalMy__mainBlock')
let items = document.querySelectorAll('.news__item')
let itemDesc = document.querySelector('.modalMy__desc')
let itemTitle = document.querySelector('.modalMy__title')

console.log(modal.classList.contains('modal-open'));

modal.addEventListener('click', (e) => {

    const withinBoundaries = e.composedPath().includes(modalMain);

    if (!withinBoundaries) {
        modal.classList.toggle('modal-open') // скрываем элемент т к клик был за его пределами
        document.body.style.overflowY = 'auto'
    }


})


items.forEach(element => {

    element.addEventListener('click', () => {

        modal.classList.toggle('modal-open')
        document.body.style.overflowY = 'hidden'
        itemDesc.textContent = element.querySelector('.news__textTitle').textContent
        itemTitle.textContent = element.querySelector('.news__textDesc').textContent

    })


});









