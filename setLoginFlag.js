function setLoginFlag() {
    localStorage.setItem('showLogin', 'true');
    window.location.href = 'index.php';
}

document.addEventListener('DOMContentLoaded', setLoginFlag);