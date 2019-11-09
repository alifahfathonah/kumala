<script>
  var save_method;
  var table;

  function tambah_departemen(){
    save_method = 'tambah';
    $('#form')[0].reset();
    $('.modal-title').text('Tambah departemen');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'departemen/tambah_departemen' ?>';
    } else{
      url = '<?php echo base_url() . 'departemen/update_departemen' ?>';
    }

    if($('#txt_departemen').val().length == 0)
    {
        //alert('Tidak boleh kosong');
        swal("Nama departemen tidak boleh kosong ", {icon: "warning", button:false, timer:1500});

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
          swal("Gagal menyimpan data", {icon: "error", button:false, timer:1500});
        }
      });
    }
  }

  function ubah_departemen(id){
    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'departemen/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_departemen"]').val(data.departemen);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah departemen');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
        console.log(jqXHR.responseText);
      }
    });
  }

  //ndak jadi pake, sudah diganti sama sweetAlert
  function xhapus_departemen(id){
    if(confirm('Anda yakin akan menghapus data?')){
      $.ajax({
        url: "<?php echo base_url() . 'departemen/hapus_departemen/';?>"+id,
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

  function hapus_departemen(id){
     var url= "<?php echo base_url() . 'departemen/hapus_departemen/';?>"+id;

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
