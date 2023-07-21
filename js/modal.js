
let modal = document.getElementById('modal')
let modalMain = document.querySelector('.modalMy__mainBlock')
let items = document.querySelectorAll('.news__item')
let itemDesc = document.querySelector('.modalMy__desc')
let itemTitle = document.querySelector('.modalMy__title')
let itemImg = document.querySelector('.modalMy__img')
console.log(modal);

modal.addEventListener('click', (e) => {

    const withinBoundaries = e.composedPath().includes(modalMain);

    if (!withinBoundaries) {
        modal.classList.toggle('modal-open') // скрываем элемент т к клик был за его пределами
        document.body.style.overflowY = 'auto'
    }


})


items.forEach(element => {

    element.addEventListener('click', () => {
        console.log(document.getSelection().toString());
        if (document.getSelection().toString() === '') {
            modal.classList.toggle('modal-open')
            document.body.style.overflowY = 'hidden'
            let imgSrc = element.querySelector('.news__img').getAttribute('src')
            console.log(imgSrc);
            itemDesc.innerHTML = element.querySelector('.news__textDesc').innerHTML

           


            itemTitle.innerHTML = element.querySelector('.news__textTitle').innerHTML
            itemImg.setAttribute('src', imgSrc)
        }
         

    })


});









