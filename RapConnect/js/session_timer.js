let timer;
const inactivityLimit = 30 * 60 * 1000; // 30 minutos en milisegundos

function resetTimer() {
    clearTimeout(timer);
    timer = setTimeout(logoutUser, inactivityLimit);
}

function logoutUser() {
    alert('Su sesión ha expirado debido a inactividad. Por favor, inicie sesión de nuevo.');
    window.location.href = '../inicio_sesion/login.php?session_expired=1';
}

// Resetea el temporizador al hacer actividad en la página
window.onload = resetTimer;
window.onmousemove = resetTimer;
window.onkeypress = resetTimer;
