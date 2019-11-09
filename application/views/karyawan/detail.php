<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header" style="padding-bottom: 30px;">
    <h1 class="pull-left">
      <i class="fa fa-user"></i>  <?php if($d_pengguna) echo $d_pengguna->nama; ?>
    </h1>
    <div class="pull-right">
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Aksi &nbsp;
          <span class="fa fa-caret-down"></span></button>
        <ul class="dropdown-menu pull-right open" role="menu">
          <li><a   onclick="ubah_pengguna(<?php if($d_pengguna) echo $d_pengguna->id; ?>)"><i class="fa fa-pencil"></i> Ubah</a></li>


          <li class="divider"></li>
          <li><a href="<?php echo base_url('pengguna')?>"><i class="fa fa-arrow-left"></i> Kembali</a></li>

        </ul>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#detail" data-toggle="tab">Detail</a></li>
                  <li><a href="#asset" data-toggle="tab">Asset</a></li>
                  <li ><a href="#asesoris" data-toggle="tab">Asesoris</a></li>
                  <li><a href="#inventory" data-toggle="tab">Inventory</a></li>
                  <li><a href="#history" data-toggle="tab">History</a></li>
                </ul>
                <div class="tab-content">

                  <div class="tab-pane active" id="detail">
                    <input type="hidden" name="txt_id" value="<?php if($d_pengguna) echo $d_pengguna->id;?>">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive " style="margin-top:10px;">
                          <table class="table table-hover">
                            <tbody>
                              <tr>
                                <td style="width:25%;">NIK:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->nik; ?></td>
                              </tr>
                              <tr>
                                <td>Departemen:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->departemen; ?></td>
                              </tr>
                              <tr>
                                <td>Lokasi:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->lokasi; ?></td>
                              </tr>
                              <tr>
                                <td>Alamat:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->alamat; ?></td>
                              </tr>
                              <tr>
                                <td>No Telp:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->no_telp; ?></td>
                              </tr>


                                <?php
                                  // if($d_asset->assign_type == "pengguna")
                                  // {
                                  //   echo '<td>Nama Pengguna:</td>';
                                  //   echo '<td>'.$d_asset->nama_pengguna; '</td>';
                                  // }
                                  // elseif ($d_asset->assign_type == "lokasi")
                                  // {
                                  //   echo '<td>Lokasi:</td>';
                                  //   echo '<td>'.$d_asset->nama_lokasi; '</td>';
                                  // }
                                  // elseif ($d_asset->assign_type == "asset")
                                  // {
                                  //   echo $d_asset->nama_asset;
                                  // }
                                  // else
                                  // {
                                  //
                                  // }
                                  ?>
                              </tr>
                              <tr>
                                <td>Catatan:</td>
                                <td><?php if($d_pengguna) echo $d_pengguna->catatan; ?></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="asset">
                     <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive " style="margin-top:10px;">
                          <table class="table table-hover" id="tableDetailPengguna">
                            <thead>
                               <tr>
                                  <th>Nama </th>
                                  <th>Asset Tag</th>
                                  <th>Aksi</th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php
                                 if($d_asset){
                                   foreach($d_asset as $d){
                                 ?>
                               <tr>
                                 <td><a href="<?php echo base_url('asset/').$d->id;?>"><?php echo $d->nama_aset; ?></a></td>
                                 <td><a href="<?php echo base_url('asset/').$d->id;?>"><?php echo $d->asset_tag; ?></a></td>
                                 <td><a class="btn bg-purple btn-sm" href="<?php echo base_url('asset/checkin/').$d->id;?>" rel="tooltip" title="" data-original-title="CheckIn"><i class="glyphicon glyphicon-save"></i> Checkin</a></td>
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
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="asesoris">
                     <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive " style="margin-top:10px;">
                          <table class="table table-hover" id="tableDetailPengguna">
                            <thead>
                               <tr>
                                  <th>ID</th>
                                  <th>Nama</th>
                                  <th>Aksi</th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php
                                 if($d_asesoris)
                                 {
                                   //$CI = & get_instance();
                                   foreach($d_asesoris as $d){
                                     //$kategori=$CI->getNamaKategori($d->model_asesoris);
                                 ?>
                               <tr>
                                 <td><?php echo $d->id; ?></td>
                                 <td><a href="<?php echo base_url('asesoris/detail/').$d->id_asesoris;?>"><?php echo $d->nama_model . ' ('. $d->manufaktur .')'; ?></a></td>
                                 <td><button type="button" class="btn bg-purple btn-sm" onclick="tampil_checkin(<?php echo $d->id_asesoris; ?>,<?php echo $d->id; ?>)" data-dismiss="modal" data-toggle="modal" rel="tooltip"><i class="glyphicon glyphicon-save"></i> Checkin</button></td>
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
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="inventory">
                     <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive " style="margin-top:10px;">
                          <table class="table table-hover" id="tableDetailPengguna">
                            <thead>
                               <tr>
                                   <th>Nama</th>
                                   <th>Jumlah</th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php
                                 if($d_inventory){
                                   foreach($d_inventory as $d){
                                     $CI = & get_instance();
                                     $kategori=$CI->getNamaKategori($d->model_inventori);
                                 ?>
                               <tr>
                                 <td><a href="<?php echo base_url('inventori/detail/').$d->model_inventori;?>"><?php echo $d->nama_model . ' ('. $kategori .')'; ?></a></td>
                                 <td><?php echo $d->qty_out; ?></td>
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
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="history">
                     <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive " style="margin-top:10px;">
                          <table class="table table-hover" id="tableDetailPengguna">
                            <thead>
                               <tr>
                                 <th></th>
                                 <th>Tanggal</th>
                                 <th>Admin</th>
                                 <th>Aksi</th>
                                 <th>Item</th>
                               </tr>
                             </thead>
                             <tbody>
                                <?php
                                 if($d_history){
                                   foreach($d_history as $d){
                                 ?>
                               <tr>
                                 <td><i class="fa
                                   <?php
                                     $vtipe = $d->log_tipe;
                                     if (strtolower($vtipe) == "asset"){ //asset
                                         $tipe   = "fa-barcode";
                                     }
                                     elseif(strtolower($vtipe) == "inventori")
                                     {
                                         $tipe   = "fa-tint";
                                     }
                                     elseif(strtolower($vtipe) == "asesoris")
                                     {
                                         $tipe   = "fa-keyboard-o";
                                     }
                                     elseif(strtolower($vtipe) == "komponen")
                                     {
                                         $tipe  = "fa-hdd-o";
                                     }
                                     else{
                                         $tipe  = "fa-times";
                                     }
                                   echo $tipe; ?>">
                                 </td>
                                 <td><?php echo $d->log_time; ?></td>
                                 <td><?php echo $d->log_user; ?></td>
                                 <td><?php echo $d->log_aksi; ?></td>
                                 <td>
                                   <?php if($d->log_tipe=='asset')
                                   {?>
                                     <a href="<?php echo base_url('asset/detail/') . $d->log_item; ?>">
                                       <?php echo $d->nama_aset." (".$d->asset_tag.")" ;?>
                                     </a>
                                   <?php
                                   }
                                   elseif($d->log_tipe=='inventori')
                                   {?>
                                     <a href="<?php echo base_url('inventori/detail/') . $d->log_item; ?>">
                                       <?php
                                           echo $d->nama_model;
                                       ?>
                                     </a>
                                   <?php
                                   }
                                   elseif($d->log_tipe=='asesoris')
                                   {?>
                                     <a href="<?php echo base_url('asesoris/detail/') . $d->log_item; ?>">
                                       <?php
                                           echo $d->nama_model;
                                       ?>
                                     </a>
                                   <?php
                                   }
                                   elseif($d->log_tipe=='komponen')
                                   {?>
                                     <a href="<?php echo base_url('komponen/detail/') . $d->log_item; ?>">
                                       <?php
                                           echo $d->nama_model;
                                       ?>
                                     </a>
                                   <?php
                                   }?>
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
                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.nav-tabs-custom -->

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- ./box-body -->
    </div>
    <!-- /.box -->
  </section>
<!-- /.content Main Content-->

</div>
<!-- /.content-wrapper-->

<!-- modalForm Pengguna -->
<div id="modalForm" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="form" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <!-- pengguna -->
            <div class="form-group ">
                <label for="pengguna" class="col-md-3 control-label">Nama Pengguna</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_pengguna" class="form-control" required placeholder="Masukkan Nama pengguna...">
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

<!-- modalCheckinAsesoris -->
<div id="modalCheckinAsesoris" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title2">Belum Ada Judul</h4>
      </div>
      <div class="box-body">
        <form id="formCheckIn" action="#" method="post" class="form-horizontal">
            <input type="hidden" name="txt_id">
            <!-- nama barang -->
            <div class="form-group ">
                <label for="namabarang" class="col-md-3 control-label">Nama Barang</label>
                <div class="col-md-7 col-sm-12 required">
                  <input type="text" name="txt_nama" class="form-control" disabled>
                </div>
            </div>
            <!-- tgl_checkin-->
            <div class="form-group ">
                <label for="tanggal" class="col-md-3 control-label">Tanggal</label>
                <div class="col-md-7 col-sm-12 required">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="txt_tgl_checkin" class="form-control pull-right" id="datepickerIn" data-date-format="dd/mm/yyyy">
                  </div>
                </div>
            </div>
            <!-- status -->
            <div class="form-group ">
                <label for="status" class="col-md-3 control-label">Status Aset</label>
                <div class="col-md-7 required">
                  <select class="form-control select2" style="min-width:350px;" required name="opt_status" id="optStatus">
                    <option></option>
                     <?php
                     if($d_status){
                       foreach($d_status as $d){
                         if($d->status<>"Digunakan" && $d->status<>"Diperbaiki")
                         {
                           echo "<option value='$d->id'>$d->status</option>";
                         }
                        }
                      }
                    ?>
                  </select>
                </div>
            </div>
            <!-- catatan -->
            <div class="form-group ">
                <label for="catatan" class="col-md-3 control-label">Catatan</label>
                <div class="col-md-7 col-sm-12 required">
                  <textarea style="resize:none;" rows="3" name="txt_catatan" class="form-control" placeholder="Catatan ..."></textarea>
                </div>
            </div>
            <!-- hidden -->
            <div class="form-group ">
              <input type="hidden" name="txt_id_asesoris" value=""/>
              <input type="hidden" name="txt_stok" value=""/>
              <input type="hidden" name="txt_id_asesoris_out" value=""/>
              <input type="hidden" name="txt_id_model" value=""/>
              <input type="hidden" name="txt_id_pengguna" value="<?php if($d_pengguna) echo $d_pengguna->id; ?>"/>            
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close icon-white"></i> Batal</button>
        <button type="submit" onclick="simpan_checkin()" class="btn btn-success"><i class="fa fa-check icon-white"></i> Simpan</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
