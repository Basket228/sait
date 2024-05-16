 // Функция для проверки совпадения паролей
 function validatePassword() {
    var password = document.getElementById("pass").value;
    var confirmPassword = document.getElementById("conpass").value;
    if (password != confirmPassword) {
        alert("Пароли не совпадают! Проверьте правильно ли вы написали пароли.");
        return false;
    }
    return true;
}
