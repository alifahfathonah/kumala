<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Data Departemen</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li class="active">Departemen</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <h3 class="panel-title">Datatable</h3> -->
                            <div class="pull-right">
                                <div class="m-b-30">
                                    <button class="btn btn-primary pull-right waves-effect waves-light" name="button" onclick="tambah_departemen()" rel="tooltip" data-original-title="Tambah data departemen"><i class="fa fa-plus"></i> Add</button>
                                    <br/>

                                </div>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <table id="datatable" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                                       <th>ID</th>
                                       <th>Departemen</th>
                                       <th>Action</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                                     <?php
                                      if($d_departemen){
                                        foreach($d_departemen as $d){
                                    ?>
                                    <tr>
                                      <td><?php echo $d->id; ?></td>
                                      <td><?php echo $d->departemen; ?></td>
                                      <td class="text-center">
                                        <nobr>
                                          <a onclick="ubah_departemen(<?php echo $d->id; ?>)" class="btn btn-sm btn-warning" rel="tooltip" data-tooltip="true" title="" data-original-title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                                          <!--a onclick="hapus_departemen(< ?php echo $d->id; ?>)" class="btn btn-danger btn-sm delete-asset" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="Are you sure you wish to delete Laptop?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a-->
                                          <a href="#" class="btn btn-danger btn-sm hapus-data" data-url="<?php echo base_url('departemen/hapus_departemen/') . $d->id;?>" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="<?php echo $d->departemen; ?>" data-title="Hapus" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a>
                                       </nobr>
                                      </td>
                                    </tr>
                                    <?php
                                        }
                                      }
                                    ?>
                                  </tbody>

                                  </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2019 © zdienos.
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- /.content-wrapper-->
<div id="modalForm" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <br/>
        <form id="form" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <div class="form-group ">
                <label for="kategori" class="col-md-4 control-label">Nama departemen</label>
                <div class="col-md-7 col-sm-12 required">
                  <input id="txt_departemen" type="text" name="txt_departemen" class="form-control" required placeholder="Nama departemen...">
                </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit" onclick="simpan_data()" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
