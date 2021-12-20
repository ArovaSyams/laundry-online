
// Profil Btn
// profil saya btn
const biodataDiriBtn = document.getElementById('biodataDiriBtn');

const daftarAlamatBtn = document.getElementById('daftarAlamatBtn');
const tambahAlamatBtn = document.getElementById('tambahAlamatBtn');
const backTambahAlamatBtn = document.getElementById('backTambahAlamatBtn');
const daftarAlamat2 = document.getElementById('daftarAlamat2');
const daftarAlamat3 = document.getElementById('daftarAlamat3');

const keamananBtn = document.getElementById('keamananBtn');
const tokoFollowBtn = document.getElementById('tokoFollowBtn');
// pemesanan btn
const dalamProsesPemesananBtn = document.getElementById('dalamProsesPemesananBtn');
const daftarTransaksiBtn = document.getElementById('daftarTransaksiBtn');
// toko btn
const buatTokoBtn = document.getElementById('buatTokoBtn');
const buatTokoBtn2 = document.getElementById('buatTokoBtn2');
const buatTokoText = document.getElementById('buatTokoText');
const buatTokoBack = document.getElementById('buatTokoBack');

const daftarTokoBtn = document.getElementById('daftarTokoBtn');
const profilBtn = document.getElementById('profilBtn');

const dalamProsesPemesananTokoBtn = document.getElementById('dalamProsesPemesananTokoBtn');
const daftarPesananBtn = document.getElementById('daftarPesananBtn');

// Profil Halaman
// profil saya
const biodataDiri = document.getElementById('biodataDiri');
const biodataDiri2 = document.getElementById('biodataDiri2');
const biodataDiri3 = document.getElementById('biodataDiri3');
const editDataDiri = document.getElementById('editDataDiri');
const backEditDataDiri = document.getElementById('backEditDataDiri');

const daftarAlamat = document.getElementById('daftarAlamat');
const keamanan = document.getElementById('keamanan');
const tokoFollow = document.getElementById('tokoFollow');
// pesanan
const dalamProsesPemesanan = document.getElementById('dalamProsesPemesanan');
const statusBtn = document.getElementById('statusBtn');
const statusPemesanan = document.getElementById('statusPemesanan');
const backStatusPemesanan = document.getElementById('backStatusPemesanan');

// Histori transaksi
const daftarTransaksi = document.getElementById('daftarTransaksi');
// toko
const buatToko = document.getElementById('buatToko');
const buatTokoForm = document.getElementById('buatTokoForm');

const daftarToko = document.getElementById('daftarToko');
const daftarToko2 = document.getElementById('daftarToko2');
const profilToko = document.getElementById('profilToko');
const profilTokoBack = document.getElementById('profilTokoBack');

const dalamProsesPemesananToko = document.getElementById('dalamProsesPemesananToko');
const daftarPesanan = document.getElementById('daftarPesanan');

tambahAlamatBtn.addEventListener('click', function () {
    daftarAlamat2.classList.toggle('d-none');
    daftarAlamat3.classList.toggle('d-none');
})
backTambahAlamat.addEventListener('click', function () {
    daftarAlamat2.classList.toggle('d-none');
    daftarAlamat3.classList.toggle('d-none');
})

statusBtn.addEventListener('click', function () {
    statusPemesanan.classList.remove('d-none')
    dalamProsesPemesanan.classList.add('d-none')
})
backStatusPemesanan.addEventListener('click', function () {
    statusPemesanan.classList.add('d-none')
    dalamProsesPemesanan.classList.remove('d-none')
})

biodataDiriBtn.addEventListener('click', function () {
    biodataDiri.classList.remove('d-none');
    daftarAlamat.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
})
daftarAlamatBtn.addEventListener('click', function () {
    daftarAlamat.classList.remove('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
})
keamananBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.remove('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
tokoFollowBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.remove('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
dalamProsesPemesananBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.remove('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
daftarTransaksiBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.remove('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
buatTokoBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.remove('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
daftarTokoBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.remove('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
dalamProsesPemesananTokoBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.remove('d-none');
    daftarPesanan.classList.add('d-none');
    
})
daftarPesananBtn.addEventListener('click', function () {
    daftarAlamat.classList.add('d-none');
    biodataDiri.classList.add('d-none');
    keamanan.classList.add('d-none');
    tokoFollow.classList.add('d-none');

    dalamProsesPemesanan.classList.add('d-none');
    daftarTransaksi.classList.add('d-none');

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.remove('d-none');
    
})

// Halaman
buatTokoBtn2.addEventListener('click', function () {
    buatTokoText.classList.add('d-none')
    buatTokoForm.classList.remove('d-none')
})
buatTokoBack.addEventListener('click', function () {
    buatTokoText.classList.remove('d-none')
    buatTokoForm.classList.add('d-none')
})

profilBtn.addEventListener('click', function () {
    daftarToko2.classList.add('d-none')
    profilToko.classList.remove('d-none')
})

profilTokoBack.addEventListener('click', function () {
    daftarToko2.classList.remove('d-none')
    profilToko.classList.add('d-none')
})

// biodata diri
editDataDiri.addEventListener('click', function () {
    biodataDiri2.classList.add('d-none')
    biodataDiri3.classList.remove('d-none')
})
backEditDataDiri.addEventListener('click', function () {
    biodataDiri2.classList.remove('d-none')
    biodataDiri3.classList.add('d-none')
})
