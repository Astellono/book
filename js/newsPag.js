let list = document.querySelectorAll('.news__item')
let temp = 3
let btnClear = document.getElementById('clear')
let btnWatch = document.getElementById('watchNews')
window.scroll({
    left: 0, // до какого количества пикселей прокрутить вправо
    top: 0, // до какого количество пикселей прокрутить вниз
    behavior: 'smooth' // определяет плавность прокрутки: 'auto' - мгновенно (по умолчанию), 'smooth' - плавно
});
let y = 0;

btnClear.style.display = 'none'
counter = list.length


if (list.length <= 3) {
    btnWatch.style.display = 'none'
} else btnWatch.style.display = 'inline-block'

btnWatch.addEventListener('click', (e) => {


    btnClear.style.display = 'inline'

    console.log(window.scrollY)
    for (i = counter - temp - 3; i < counter - temp; i++) {
        if (list[i] != undefined) {

            list[i].style.display = 'flex'

        } else btnWatch.style.display = 'none'

    }
    temp += 3;


})
btnClear.addEventListener('click', () => {
    scrollTo('news')
    btnClear.style.display = 'none'
    for (i = 0; i < counter - 3; i++) {

        list[i].style.display = 'none'
        temp = 3;
    }
    location.hash = ''
    if (list[i] != undefined) {
        btnWatch.style.display = 'inline-block'
    }


})




for (i = 0; i < counter - 3; i++) {

    list[i].style.display = 'none'

}
function scrollTo(hash) {
    location.hash = "#" + hash;
}


let date = document.querySelectorAll('.news__date');
date.forEach(element => {
    element.textContent = element.textContent.trim().substring(0, 11)
});

let text = document.querySelector('.fr-element')
let btn = document.getElementById('addNews')
let textarea = document.getElementById('textarea')
text.addEventListener('input', () => {

    console.log((text.innerHTML))
    console.log((text.innerHTML.length))
})
let form = document.getElementById('form')


form.onsubmit = () => {

    textarea.value = text.innerHTML

}


// let imgIns = document.getElementById('insertImg')

// imgIns.addEventListener('click', (e) => {
//     // e.preventDefault();
//     val = '<img class="news__imgInside" src="https://avatars.mds.yandex.net/i?id=7d264588aeab9c18da5d390b9d84964629e3a5f6-8819334-images-thumbs&n=13" >'
//     insertAtCursor(textarea, val)

// })

function insertAtCursor(myField, myValue) {
    //IE support
    myField.innerHTML = myField.innerHTML + myValue
    
}