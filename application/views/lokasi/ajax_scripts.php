<script>
  var save_method;
  var table;

  function tambah_lokasi(){
    save_method = 'tambah';
    $('#form')[0].reset();
    $('.modal-title').text('Tambah Lokasi');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'lokasi/tambah_lokasi' ?>';
    } else{
      url = '<?php echo base_url() . 'lokasi/update_lokasi' ?>';
    }

    if($('#txt_lokasi').val().length == 0)
    {
        //alert('Tidak boleh kosong');
        swal("Nama lokasi tidak boleh kosong ", {icon: "warning", button:false, timer:1500});
    }
    else {
      $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data){
          $('#modalForm').modal('hide');
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown){
          //alert('Error menyimpan data');
          //console.log(jqXHR);
          swal("Gagal menyimpan data", {icon: "error", button:false, timer:1500});
        }
      });
    }
  }

  function ubah_lokasi(id){
    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'lokasi/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_lokasi"]').val(data.lokasi);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah Lokasi');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
        console.log(jqXHR.responseText);
      }
    });
  }

  //ndak dipake lagi, sudah sya ganti pake sweetAlert
  //dengan menggunakan attribut data-content dan class name
  function xhapus_lokasi(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'lokasi/hapus_lokasi/';?>"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data){
          location.reload();
        },
        error: function(jqXHR, textStatus, errorThrown){
          alert('Error menghapus data');
        }
      })
    }
  }

  function hapus_lokasi(id){
     var url= "<?php echo base_url() . 'lokasi/hapus_lokasi/';?>"+id;

    //pop up
    swal({
        title: "Anda yakin ingin menghapus data?",
        icon: "warning",
        buttons: ["Tidak", "Ya"],
        dangerMode: true,
    })
    .then((hapus) => {
      if (hapus) {
        window.location.href = url;
      }
      else {
      }
    });
  }

</script>
