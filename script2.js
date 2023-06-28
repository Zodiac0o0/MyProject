let ButtonAuto = document.querySelector('button.regautologin');
let ButtonRegistr = document.querySelector('button.regautologinRegistr');
let ButtonCloseAuto = document.querySelector('button.ButtonClose');
let ButtonCloseRegistr = document.querySelector('button.ButtonCloseRegistr');


// Присвоение форме авторизации свойства display = 'block'
function DisplayAutoBlock() {
    document.getElementsByClassName('overlay')[0].style.display = 'block';
    document.getElementsByClassName('SectionAuto_Form')[0].style.display = 'block';
    document.getElementsByClassName('mainSection')[0].style.display = 'none';
}

ButtonAuto.addEventListener('click', DisplayAutoBlock);

// Присвоение форме регистрации свойства display = 'block'
function DisplayAutoBlockRegistr() {
    document.getElementsByClassName('mainSection')[0].style.display = 'block';
    document.getElementsByClassName('SectionAuto_Form')[0].style.display = 'none';
    document.getElementsByClassName('overlay')[0].style.display = 'block';
}

ButtonRegistr.addEventListener('click', DisplayAutoBlockRegistr);

// Присвоение форме авторизации свойства display = 'none'
function ButtonCloseForm() {
    document.getElementsByClassName('SectionAuto_Form')[0].style.display = 'none';
    document.getElementsByClassName('overlay')[0].style.display = 'none';
}

ButtonCloseAuto.addEventListener('click', ButtonCloseForm);

// Присвоение форме регистрации свойства display = 'none'
function ButtonCloseFormRegistr() {
    document.getElementsByClassName('mainSection')[0].style.display = 'none';
    document.getElementsByClassName('overlay')[0].style.display = 'none';
}

ButtonCloseRegistr.addEventListener('click', ButtonCloseFormRegistr);