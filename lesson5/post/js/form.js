console.log("JS");
let form = document.forms.lang;
// отправка с перезагрузкой страницы
function formHandler(event) {
    event.preventDefault();
    if (!validate(this)) return;

    console.log("Отправка на сервер");
    this.submit();
}

// form.addEventListener('submit', formHandler);

// отправка формы без перезагрузки страницы
// ajax запрос

function ajaxFormHandler(event) {
    event.preventDefault();

    if (!validate(this)) return;

    let formData = new FormData(this);

    // создание объекта запроса
    let xhr = new XMLHttpRequest();
    xhr.open('POST', this.action, true);
    xhr.send(formData); // -> отправка запроса
    // обработчик события load объекта запроса
    xhr.onload = function () {   // <- ответ сервера
        // данная функция сработает, кодга придет
        // ответ от сервера
        if (xhr.status === 200) {
            // xhr.responseText - ответ сервера
            responseHandler(xhr.responseText);
        }
    }
}
function responseHandler(serverAnswer){
    console.log(serverAnswer);
    let ans = document.getElementById('answer');
    ans.innerText = serverAnswer;
}

form.addEventListener('submit', ajaxFormHandler);


function validate(form) {
    // проверка пользовательского ввода
    return true;
}