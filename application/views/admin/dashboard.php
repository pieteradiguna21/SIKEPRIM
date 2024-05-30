<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('index.php/admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Home</li>
        </ol>
    </section>
    <?php
        date_default_timezone_set('Asia/Jakarta');
    ?>
    <section class="content">
        <?php if($this->session->userdata('level') == "Administrator") { ?>
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_cabang')->num_rows();
                                ?>
                            </h3
                            <p>Total Cabang</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-calendar"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/cabang') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_jabatan')->num_rows();
                                ?>
                            </h3>
                            <p>Total Jabatan</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-edit"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/jabatan') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_shift')->num_rows();
                                ?>
                            </h3>
                            <p>Total Shift</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-android"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/shift') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-maroon">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_kriteria')->num_rows();
                                ?>
                            </h3>
                            <p>Total Kriteria Gaji</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-book"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/kriteria') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi')->num_rows();
                                ?>
                            </h3>
                            <p>Total Presensi</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-bookmark-o"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-navy">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi WHERE status="Izin"')->num_rows();
                                ?>
                            </h3>
                            <p>Total Izin</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-history"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_user WHERE level="Karyawan"')->num_rows();
                                ?>
                            </h3>
                            <p>Total Karyawan</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-user"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/user') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_user WHERE level="Administrator"')->num_rows();
                                ?>
                            </h3>
                            <p>Total Administrator</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-users"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/user') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>    

                                        <?php
                                             {
                                        ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
        <?php } else { ?>
            <section class="content">
            <div class="row">
                <div class="col-lg-6 col-xs-8">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi WHERE idUser="'.$this->session->userdata('id').'"')->num_rows();
                                ?>
                            </h3>
                            <p>Total Presensi Saya</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-android"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    </div>
            <div class="col-lg-6 col-xs-8">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi WHERE idUser="'.$this->session->userdata('id').'" AND MONTH(tanggal)="'.date('m').'" AND YEAR(tanggal)="'.date('Y').'" ')->num_rows();
                                ?>
                            </h3>
                            <p>Total Presensi Bulan Ini (<?= date('F Y') ?>)</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-book"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    </div>
                    <div class="col-lg-6 col-xs-8">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi WHERE idUser="'.$this->session->userdata('id').'" AND MONTH(tanggal)="'.date('m').'" AND YEAR(tanggal)="'.date('Y').'" AND status="Terlambat"')->num_rows();
                                ?>
                            </h3>
                            <p>Terlambat Bulan Ini (<?= date('F Y') ?>)</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-pencil"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    </div>
                    <div class="col-lg-6 col-xs-8">
                    <div class="small-box bg-purple">
                        <div class="inner">
                            <h3>
                                <?php
                                    echo $this->db->query('SELECT id FROM tb_absensi WHERE idUser="'.$this->session->userdata('id').'" AND MONTH(tanggal)="'.date('m').'" AND YEAR(tanggal)="'.date('Y').'" AND status="Izin"')->num_rows();
                                ?>
                            </h3>
                            <p>Izin Bulan Ini (<?= date('F Y') ?>)</p>
                        </div>
                        <div class="icon">
                            <div class="fa fa-bookmark"></div>
                        </div>
                        <a href="<?= base_url('index.php/admin/absensi') ?>" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
</div>