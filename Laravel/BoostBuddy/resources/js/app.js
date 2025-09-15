import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {

    console.log("Dom loaded");
    // Open modals
    document.getElementById('signup-btn').addEventListener('click', function () {
        document.getElementById('signup-modal').classList.remove('hidden');
        document.getElementById('signup-modal').classList.add('flex');

    });

    document.getElementById('login-btn').addEventListener('click', function () {
        document.getElementById('login-modal').classList.remove('hidden');
        document.getElementById('login-modal').classList.add('flex');
        console.log("login-btn is read")
    });

    // Close modals
    document.getElementById('signup-close-btn').addEventListener('click', function () {
        document.getElementById('signup-modal').classList.add('hidden');
        document.getElementById('signup-modal').classList.remove('flex');
    });

    document.getElementById('login-close-btn').addEventListener('click', function () {
        document.getElementById('login-modal').classList.add('hidden');
        document.getElementById('login-modal').classList.remove('flex');
    });
});
