</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/waves.js"></script>
<script src="<?php echo base_url();?>js/wow.min.js"></script>


<!-- sweet alerts -->
<script src="<?php echo base_url();?>assets/sweetalert/sweetalert.min.js"></script>


<!-- Select2 -->
<script src="<?php echo base_url();?>assets/select2/js/select2.min.js"></script>



<!-- Counter-up -->
<script src="<?php echo base_url();?>assets/counterup/waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

<!-- CUSTOM JS -->
<script src="<?php echo base_url();?>js/jquery.app.js"></script>

<!-- Dashboard -->
<!-- <script src="js/jquery.dashboard.js"></script> -->




<script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable();
    } );

    $('.hapus-data').on('click', function(e){
        //e.preventDefault(); //cancel default action
        var href = $(this).attr('data-url');
        var data_content = $(this).attr('data-content');
        //pop up
        swal({
            title: "Anda yakin ingin menghapus "+data_content+" ?",
            icon: "warning",
            buttons: ["Tidak", "Ya"],
            dangerMode: true,
        })
        .then((hapus) => {
          if (hapus) {
            window.location.href = href;
          }
        });
      });



</script>

<?php
  if($this->session->flashdata('psn_sukses'))
  {
    $pesan = $this->session->flashdata('psn_sukses');
    echo '<script>';
    echo 'swal("'. $pesan .'", {icon: "success", button:false, timer:1500});';
    echo '</script>';
  }
?>
<?php
  if($this->session->flashdata('psn_error'))
  {
    $pesan = $this->session->flashdata('psn_error');
    echo '<script>';
    echo 'swal("'. $pesan .'", {icon: "error", button:false, timer:1500});';
    echo '</script>';
  }
?>
