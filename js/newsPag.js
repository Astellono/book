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

btnWatch.addEventListener('click', () => {

  


    
    btnClear.style.display = 'inline'
    
    console.log( window.scrollY)
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