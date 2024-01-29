function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}
// Показывать или скрывать кнопку в зависимости от прокрутки страницы
window.onscroll = function () {
    toggleBackToTopButton();
};

function toggleBackToTopButton() {
    const btn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

// Прокрутка страницы вверх
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
document.addEventListener('DOMContentLoaded', function () {
    // Включаем/выключаем кнопку в зависимости от валидности формы
    var registrationForm = document.getElementById('registrationForm');
    var registrationBtn = document.getElementById('registrationBtn');

    registrationForm.addEventListener('input', function () {
        registrationBtn.disabled = !registrationForm.checkValidity();
    });
});
function validateForm(event) {
    event.preventDefault();

    // Получаем значения из формы
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Простая проверка пароля
    if (password !== confirmPassword) {
        alert("Пароли не совпадают");
        return;
    }

    // TODO: Отправить данные на сервер для регистрации

    alert("Регистрация успешна!");
}