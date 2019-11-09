<script>

$('#optDepartemen').select2({placeholder: "Pilh Departemen...", width: '100%',  dropdownParent: $('#modalForm')});
$('#optLokasi').select2({placeholder: "Pilh Lokasi...", width: '100%', dropdownParent: $('#modalForm')});
$('#optStatus').select2({placeholder: "Pilh Status...", width: '100%', dropdownParent: $('#modalCheckinAsesoris')});


  var save_method;
  var table;

  function tambah_karyawan(){
    save_method = 'tambah';
    $('#form')[0].reset();
    //tips biar select2 tereset
    $('[name="opt_lokasi"]').val(0).trigger('change');
    $('[name="opt_departemen"]').val(0).trigger('change');

    $('.modal-title').text('Tambah Karyawan');
    $('#modalForm').modal('show');
  }

  function simpan_data(){
    var url, varOpt;

    if(save_method =='tambah'){
      url = '<?php echo base_url() . 'karyawan/tambah_karyawan' ?>';
    } else{
      url = '<?php echo base_url() . 'karyawan/update_karyawan' ?>';
    }

    if($('[name="txt_karyawan"]').val().length == 0)
    {
        //alert('Nama tidak boleh kosong');
        swal("Nama tidak boleh kosong ", {icon: "warning", button:false, timer:1500});
    }
    else
    {
      varOpt = $('#optDepartemen');
      if(!varOpt.select2('data')[0]) //memastikan option terpilih
      {
        //alert('Pilih departemen dulu !');
        swal("Silahkan pilih departemen ", {icon: "warning", button:false, timer:1500});
      }
      else
      {
        var varOpt = $('#optLokasi');
        if(!varOpt.select2('data')[0]) //memastikan option terpilih
        {
          //alert('Pilih lokasi dulu !');
          swal("Silahkan pilih lokasi ", {icon: "warning", button:false, timer:1500});
        }
        else
        {
            $.ajax({
              url: url,
              type: "POST",
              data: $('#form').serialize(),
              dataType: "JSON",
              success: function(data){
                //$('#modalForm').modal('hide');
                location.reload();
              },
              error: function(jqXHR, textStatus, errorThrown){
                alert('Error menyimpan data');
                console.log(jqXHR.responseText)
              }
            });
        }//if opt_lokasi
      }//if opt_departemen
    }//if txt_karyawan

  }

  function ubah_karyawan(id){

    save_method = 'update';
    $('#form')[0].reset();

    //load data ajax_scripts
    $.ajax({
      url: "<?php echo base_url() . 'karyawan/ubah/';?>"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="txt_id"]').val(data.id);
        $('[name="txt_karyawan"]').val(data.nama);
        $('[name="txt_nik"]').val(data.nik);
        $('[name="opt_lokasi"]').val(data.lokasi).trigger('change');
        $('[name="opt_departemen"]').val(data.departemen).trigger('change');
        $('[name="txt_no_telp"]').val(data.no_telp);
        $('[name="txt_alamat"]').val(data.alamat);
        $('[name="txt_catatan"]').val(data.catatan);

        $('#modalForm').modal('show');
        $('.modal-title').text('Ubah karyawan');
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert('Error get data from Ajax');
      }
    });
  }


  function import_excel(){
    //$('#formImport')[0].reset();
    //tips biar select2 tereset


    $('.modal-title').text('Import Excel');
    $('#modalImport').modal('show');

    function bs_input_file() {
    	$(".input-file").before(
    		function() {
    			if ( ! $(this).prev().hasClass('input-ghost') ) {
    				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
    				element.attr("name",$(this).attr("name"));
    				element.change(function(){
    					element.next(element).find('input').val((element.val()).split('\\').pop());
    				});
    				$(this).find("button.btn-choose").click(function(){
    					element.click();
    				});
    				$(this).find("button.btn-reset").click(function(){
    					element.val(null);
    					$(this).parents(".input-file").find('input').val('');
    				});
    				$(this).find('input').css("cursor","pointer");
    				$(this).find('input').mousedown(function() {
    					$(this).parents('.input-file').prev().click();
    					return false;
    				});
    				return element;
    			}
    		}
    	);
    }
    $(function() {
    	bs_input_file();
    });
  }

  function bs_input_file() {
    $(".input-file").before(
      function() {
        if ( ! $(this).prev().hasClass('input-ghost') ) {
          var element = $("<input type='file' class='input-ghost' name='file_excel' style='visibility:hidden; height:0'>");
          element.attr("name",$(this).attr("name"));
          element.change(function(){
            element.next(element).find('input').val((element.val()).split('\\').pop());
          });
          $(this).find("button.btn-choose").click(function(){
            element.click();
          });
          $(this).find("button.btn-reset").click(function(){
            element.val(null);
            $(this).parents(".input-file").find('input').val('');
          });
          $(this).find('input').css("cursor","pointer");
          $(this).find('input').mousedown(function() {
            $(this).parents('.input-file').prev().click();
            return false;
          });
          return element;
        }
      }
    );
  }
  $(function() {
    bs_input_file();
  });



</script>
