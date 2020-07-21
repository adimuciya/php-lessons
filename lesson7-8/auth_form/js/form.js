// объявление переменных
// кнопка открытия модального окна
let open_modal_btn = document.getElementById('open_modal');

// кнопка закрытия модального окна
let cancel_btn = document.getElementById('cancel');

// модальное окно
let modal = document.querySelector('.modal');

// элемент для вывода ошибок заполнения полей формы и авторизации
let error_field = document.getElementById('errors');

// форма
let form = document.forms.auth_form;

// функции
// открытие модального окна
function open_modal() {
    modal.classList.add('open');
}

// закрытие модального окна
function close_modal() {
    modal.classList.remove('open');
}

// обработчики событий
// при нажатии (событие click) на кнопку open_modal_btn будет вызвана функция open_modal
open_modal_btn.addEventListener('click', open_modal);

// при нажатии (событие click) на кнопку cancel_btn будет вызвана функция close_modal
cancel_btn.addEventListener('click', close_modal);

function responseHandler(answer){
    if (answer === 'error'){
        error_field.innerText = 'Ошибка авторизации';
    } else if (answer === 'success'){
        window.location.replace('account.php');
    }
}

// async позволяет использовать await
form.addEventListener('submit', async (event)=>{
    event.preventDefault();
    try {
        // await заставляет ждать, пока код функции (промиса)
        // после него (в данном случае fetch) не выполнится
        const response = await fetch('formHandler.php', {
            method: 'POST', // PUT
            body: new FormData(form)
        });
        const answer = await response.text(); // .json();
        console.log("ответ сервера " + answer);
        responseHandler(answer);
    } catch (error) {
        console.log("ошибка", error);
    }
});

