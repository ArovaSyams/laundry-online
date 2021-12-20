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