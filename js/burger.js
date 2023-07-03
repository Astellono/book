const btnOn = document.getElementById('burger')
const btnOff = document.getElementById('cross')
const menu = document.getElementById('menu')

btnOn.addEventListener('click',()=> {
    menu.classList.add('visble-burger')
    btnOn.classList.remove('visible')
    btnOn.classList.add('unVisible')
})

btnOff.addEventListener('click', ()=>{
    menu.classList.remove('visble-burger')
    btnOn.classList.remove('unVisible')
    btnOn.classList.add('visible')
})