// Initialize AoS
AOS.init();

// Initialize Rellax.js
var rellax = new Rellax('.rellax');

// Initialiaze Feather Icons
feather.replace();

document.querySelector('form').addEventListener('submit', function (e) {
    const email = document.getElementById('email').value.trim();
    const pesan = document.getElementById('pesan').value.trim();

    if (email === '' || pesan === '') {
        e.preventDefault(); // Mencegah pengiriman form jika ada kolom kosong
        alert('Email dan pesan harus diisi!');
    }
});

