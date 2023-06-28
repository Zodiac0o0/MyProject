let container = document.querySelector('body');
let sectionPositionElement = document.querySelector('section.parentDiv');
let mainDiv = document.querySelector('div.main_container newDivMarginBottom');
let addFunctionDiv = document.querySelector('div.addNewElement');
let DeleteFunctionDiv = document.querySelector('div.DeleteNewElement');
let ButtonOnClick = document.querySelector('button.ButtonOn');
let ButtonOffClick = document.querySelector('button.ButtonOff');
let count = 1;
ButtonOnClick.addEventListener('click', ActivatedButtonOn);
ButtonOffClick.addEventListener('click', ActivatedButtonOff);
addFunctionDiv.addEventListener('click', addNewElementFunction);
DeleteFunctionDiv.addEventListener('click', DeleteNewElementFunction);

// Функция нажатия кнопки Вкл
function ActivatedButtonOn() {
    document.getElementsByClassName('ButtonOff')[0].style.border = "2px outset white";
    document.getElementsByClassName('ButtonOn')[0].style.border = "2px outset black";
}

// Функция нажатия кнопки Выкл
function ActivatedButtonOff() {
    document.getElementsByClassName('ButtonOn')[0].style.border = "2px outset white";
    document.getElementsByClassName('ButtonOff')[0].style.border = "2px outset black"; 
}
     
// Функция динамического создания элементов
function addNewElementFunction(){
        let newInput = document.createElement('input');        
        let newDiv = document.createElement('div');
        let newInputDate = document.createElement('input');
        let newInputTime = document.createElement('input');
        let addFunctionDiv = document.createElement('div');
        let DeleteFunctionDiv = document.createElement('div');
        let newForm = document.createElement('form');
        let NewButtonOn = document.createElement('button');
        let NewButtonOff = document.createElement('button');

        newInput.type = 'text';
        newInput.placeholder = 'Введите описание';
        newInput.className = 'description';
        newInputTime.type = 'time';
        newInputDate.type = 'date';
        newInputDate.id = 'InputDate';
        newInputTime.id = 'InputTime';
        newDiv.className = 'main_container newDivMarginBottom';
        newDiv.id = "newDivMarginBottom1";
        addFunctionDiv.className = 'addNewElement';
        addFunctionDiv.onclick = addNewElementFunction;
        DeleteFunctionDiv.className = 'DeleteNewElement';
        DeleteFunctionDiv.onclick = DeleteNewElementFunction;
        newForm.action = 'addData.php';
        newForm.method = 'post';
        newForm.id = 'TaskForm';
        NewButtonOn.className = 'ButtonOn';
        NewButtonOff.className = 'ButtonOff';
        NewButtonOn.textContent = 'Вкл';
        NewButtonOff.textContent = 'Выкл';
        NewButtonOff.type = 'button';
        NewButtonOn.type = 'button';
        
        sectionPositionElement.appendChild(newForm);
        newForm.appendChild(newDiv);
        newDiv.appendChild(newInput);
        newDiv.appendChild(newInputDate);
        newDiv.appendChild(newInputTime);
        newDiv.appendChild(addFunctionDiv);
        newDiv.appendChild(DeleteFunctionDiv);
        newDiv.appendChild(NewButtonOn);
        newDiv.appendChild(NewButtonOff);
}

// Функция динамического удаления элементов
function DeleteNewElementFunction() {
    sectionPositionElement.removeChild(sectionPositionElement.lastChild);
}



