let container = document.querySelector('body');
let sectionPositionElement = document.querySelector('section.parentDiv');
let mainDiv = document.querySelector('div.main_container newDivMarginBottom');
let addFunctionDiv = document.querySelector('div.addNewElement');
let DeleteFunctionDiv = document.querySelector('div.DeleteNewElement');
let count = 1;

addFunctionDiv.addEventListener('click', addNewElementFunction);
DeleteFunctionDiv.addEventListener('click', DeleteNewElementFunction);

     
// Функция динамического создания элементов
function addNewElementFunction(){
        let newInput = document.createElement('input');        
        let newDiv = document.createElement('div');
        let newInputDate = document.createElement('input');
        let newInputTime = document.createElement('input');
        let addFunctionDiv = document.createElement('div');
        let DeleteFunctionDiv = document.createElement('div');
        let newForm = document.createElement('form');
        let ButtonAdd = document.createElement('button');
        

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
        ButtonAdd.textContent = "Добавить";
        
        sectionPositionElement.appendChild(newForm);
        newForm.appendChild(newDiv);
        newDiv.appendChild(newInput);
        newDiv.appendChild(newInputDate);
        newDiv.appendChild(newInputTime);
        newDiv.appendChild(addFunctionDiv);
        newDiv.appendChild(DeleteFunctionDiv);
        newDiv.appendChild(ButtonAdd);

}

// Функция динамического удаления элементов
function DeleteNewElementFunction() {
    sectionPositionElement.removeChild(sectionPositionElement.lastChild);
}



