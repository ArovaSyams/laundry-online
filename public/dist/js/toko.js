// toko btn
const buatTokoBtn = document.getElementById('buatTokoBtn');
const buatTokoBtn2 = document.getElementById('buatTokoBtn2');
const buatTokoText = document.getElementById('buatTokoText');
const buatTokoBack = document.getElementById('buatTokoBack');

const daftarTokoBtn = document.getElementById('daftarTokoBtn');
const profilBtn = document.getElementById('profilBtn');

const dalamProsesPemesananTokoBtn = document.getElementById('dalamProsesPemesananTokoBtn');
const daftarPesananBtn = document.getElementById('daftarPesananBtn');

// toko
const buatToko = document.getElementById('buatToko');
const buatTokoForm = document.getElementById('buatTokoForm');

const daftarToko = document.getElementById('daftarToko');
const daftarToko2 = document.getElementById('daftarToko2');
const profilToko = document.getElementById('profilToko');
const profilTokoBack = document.getElementById('profilTokoBack');

const dalamProsesPemesananToko = document.getElementById('dalamProsesPemesananToko');
const daftarPesanan = document.getElementById('daftarPesanan');



buatTokoBtn.addEventListener('click', function () {
    
    buatToko.classList.remove('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
daftarTokoBtn.addEventListener('click', function () {
    
    buatToko.classList.add('d-none');
    daftarToko.classList.remove('d-none');
    dalamProsesPemesananToko.classList.add('d-none');
    daftarPesanan.classList.add('d-none');
    
})
dalamProsesPemesananTokoBtn.addEventListener('click', function () {

    buatToko.classList.add('d-none');
    daftarToko.classList.add('d-none');
    dalamProsesPemesananToko.classList.remove('d-none');
    daftarPesanan.classList.add('d-none');
    
})
daftarPesananBtn.addEventListener('click', function () {

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


// PROFIL TOKO

$('#editAlamatModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') 
    var nama = button.data('nama') 
    var alamat = button.data('alamat') 
    var provinsi = button.data('provinsi') 
    var kota = button.data('kota') 
    var kecamatan = button.data('kecamatan') 
    var kelurahan = button.data('kelurahan') 
    var notelp = button.data('notelp') 
    
    // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #nama').val(nama)
    modal.find('.modal-body #alamat').val(alamat)
    modal.find('.modal-body #provinsi').val(provinsi)
    modal.find('.modal-body #kota').val(kota)
    modal.find('.modal-body #kecamatan').val(kecamatan)
    modal.find('.modal-body #kelurahan').val(kelurahan)
    modal.find('.modal-body #notelp').val(notelp)
  })