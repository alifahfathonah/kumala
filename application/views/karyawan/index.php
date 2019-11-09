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
                    <h4 class="pull-left page-title">Data Karyawan</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li class="active">Karyawan</li>
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
                                  <div class="btn-group">
                                      <button type="button" class="btn btn-default dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">Excel <span class="caret"></span></button>
                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="javascript:import_excel();"><i class="md-file-download"></i>Import</a></li>
                                          <li><a href="<?= base_url('karyawan/exportexcel'); ?>"><i class="md-file-upload"></i>Export</a></li>
                                      </ul>
                                  </div>
                                    <button class="btn btn-primary pull-right waves-effect waves-light" name="button" onclick="tambah_karyawan()" rel="tooltip" data-original-title="Tambah data pengguna"><i class="fa fa-plus"></i> Add</button>
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
                                       <th>Nama </th>
                                       <th>NIK </th>
                                       <th>Departemen </th>
                                       <th>Lokasi </th>
                                       <th>No Telp</th>
                                       <th>Alamat</th>
                                       <th>Catatan</th>
                                       <th>Action</th>
                                     </tr>
                                  </thead>
                                   <tbody>
                                      <?php
                                       if($d_karyawan){
                                         foreach($d_karyawan as $d){
                                     ?>
                                     <tr>
                                       <td><?php echo $d->id; ?></td>
                                       <td><?php echo $d->nama; ?></td>
                                       <td><?php echo $d->nik; ?></td>
                                       <td><?php echo $d->departemen; ?></td>
                                       <td><?php echo $d->lokasi; ?></td>
                                       <td><?php echo $d->no_telp; ?></td>
                                       <td><?php echo $d->alamat; ?></td>
                                       <td><?php echo $d->catatan; ?></td>
                                       <td class="text-center">
                                         <nobr>
                                           <a onclick="ubah_karyawan(<?php echo $d->id; ?>)" class="btn btn-sm btn-warning" rel="tooltip" data-tooltip="true" title="" data-original-title="Ubah"><i class="fa fa-pencil"></i></a>&nbsp;
                                           <!--a onclick="hapus_karyawan(< ?php echo $d->id; ?>)" class="btn btn-danger btn-sm hapus-data" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="Anda yakin?" data-title="Delete" onclick="return confirm('Anda yakin?');" data-original-title="Hapus" title=""><i class="fa fa-trash"></i></a-->
                                           <a class="hapus-data btn btn-danger btn-sm" data-url="<?php echo base_url('karyawan/hapus_karyawan/') . $d->id; ?>" rel="tooltip" data-tooltip="true" data-toggle="modal" data-content="<?php echo $d->nama; ?>" data-title="Hapus"  title=""><i class="fa fa-trash"></i></a>
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
        <form id="form" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id"><br/>
            <!-- pengguna -->
            <div class="form-group ">
                <label for="pengguna" class="col-md-3 control-label">Nama Pengguna</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_karyawan" class="form-control" required placeholder="Masukkan Nama pengguna...">
                </div>
            </div>
            <!-- nik -->
            <div class="form-group ">
              <label for="no_telp" class="col-md-3 control-label">NIK</label>
              <div class="col-md-7 col-sm-12 required">
                <input type="text" name="txt_nik" class="form-control" required placeholder="Masukkan NIK...">
              </div>
            </div>

            <!-- departemen -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Departemen</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_departemen" id="optDepartemen">
                    <option></option>
                     <?php
                     if($d_departemen){
                       foreach($d_departemen as $d){
                         echo "<option value='$d->id'>$d->departemen</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- lokasi -->
            <div class="form-group ">
                <label for="tipe" class="col-md-3 control-label">Lokasi</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_lokasi" id="optLokasi">
                    <option></option>
                    <?php
                     if($d_lokasi){
                       foreach($d_lokasi as $d){
                         echo "<option value='$d->id'>$d->lokasi</option>";
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- no_telp -->
            <div class="form-group ">
                <label for="no_telp" class="col-md-3 control-label">No Telp</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_no_telp" class="form-control" required placeholder="Masukkan No Telp...">
                </div>
            </div>
            <!-- alamat -->
            <div class="form-group ">
                <label for="no_telp" class="col-md-3 control-label">Alamat</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_alamat" class="form-control" required placeholder="Masukkan Alamat...">
                </div>
            </div>
            <!-- catatan -->
            <div class="form-group ">
                <label for="catatan" class="col-md-3 control-label">Catatan</label>
                <div class="col-md-7 col-sm-12 required">
                  <textarea style="resize:none;" rows="3" name="txt_catatan" class="form-control" placeholder="Catatan ..."></textarea>
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

<div id="modalImport" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <br/>

        <?php echo form_open_multipart('karyawan/importexcel',array('name' => 'spreadsheet')); ?>
       	<div class="form-group">
       		<div class="input-group input-file">
       			<span class="input-group-btn">
               		<button class="btn btn-default btn-choose" type="button">Browse</button>
           		</span>
           		<input type="text" name="file_excel" class="form-control" placeholder='Choose a file...' />
       		</div>
       	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit"  class="btn btn-success"><i class="fa fa-check icon-white"></i> Upload</button>
      </div>
      <?php echo form_close();?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
