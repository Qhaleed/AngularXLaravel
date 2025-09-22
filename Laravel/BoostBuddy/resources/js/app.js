import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    // const requestBtn = document.getElementById('request-btn');
    // if (requestBtn) {
    //     requestBtn.addEventListener('click', function () {
    //         alert('clicked');
    //     });
    // }
    document.getElementById('request-btn').addEventListener('click', function () {
        console.log('clicked')
        document.getElementById('duoRequest-form').classList.add('flex');
        document.getElementById('duoRequest-form').classList.remove('hidden');
    })

    document.getElementById('form-close-btn').addEventListener('click', function () {
        document.getElementById('duoRequest-form').classList.add('hidden');
        document.getElementById('duoRequest-form').classList.remove('flex');
    });



});
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
    });

    document.getElementById('onboarding-btn').addEventListener('click', function () {
        document.getElementById('signup-modal').classList.remove('hidden');
        document.getElementById('signup-modal').classList.add('flex');
    })

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
