let text = document.querySelector('.fr-element')
let textarea = document.getElementById('textarea')
let form = document.getElementById('form')


text.innerHTML = textarea.value



form.onsubmit = () => {

    textarea.value = text.innerHTML

}