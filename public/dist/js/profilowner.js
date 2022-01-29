
const berandaNav = document.getElementById('berandaNav')
const tokoNav = document.getElementById('tokoNav')
const ulasanNav = document.getElementById('ulasanNav')

const beranda = document.getElementById('beranda')
const toko = document.getElementById('toko')
const ulasan = document.getElementById('ulasan')

berandaNav.addEventListener('click', function() {
    
    berandaNav.classList.add('nav-owner-active');
    tokoNav.classList.remove('nav-owner-active');
    ulasanNav.classList.remove('nav-owner-active');
    
    beranda.classList.remove('d-none');
    toko.classList.add('d-none');
    ulasan.classList.add('d-none');
})

tokoNav.addEventListener('click', function() {

    berandaNav.classList.remove('nav-owner-active');
    tokoNav.classList.add('nav-owner-active');
    ulasanNav.classList.remove('nav-owner-active');

    beranda.classList.add('d-none');
    toko.classList.remove('d-none');
    ulasan.classList.add('d-none');
})
ulasanNav.addEventListener('click', function() {

    berandaNav.classList.remove('nav-owner-active');
    tokoNav.classList.remove('nav-owner-active');
    ulasanNav.classList.add('nav-owner-active');

    beranda.classList.add('d-none');
    toko.classList.add('d-none');
    ulasan.classList.remove('d-none');
})

