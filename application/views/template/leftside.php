
            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="<?= base_url('dashboard'); ?>" class="waves-effect <?php if($this->uri->segment('1')=='dashboard') {echo 'active';} ?>"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('karyawan'); ?>" class="waves-effect <?php if($this->uri->segment('1')=='karyawan') {echo 'active';} ?>"><i class="md md-people"></i><span> Karyawan </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('departemen'); ?>" class="waves-effect <?php if($this->uri->segment('1')=='departemen') {echo 'active';} ?>"><i class="md md-group-work"></i><span> Departemen </span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('lokasi'); ?>" class="waves-effect <?php if($this->uri->segment('1')=='lokasi') {echo 'active';} ?>"><i class="md md-place"></i><span> Lokasi </span></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
