<div class="right_col" role="main" style="height: 100%;">
    <div class="clearfix"></div>

    <div class="x_panel card">
        <!--div class="alert alert-info">Daftar Surat Kuasa </div-->
        <div align="center">
            <font color="brown">Asset List </font><br><br>
        </div>
        <!-- search -->

        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12" style="padding: 0 !important; margin: 0 !important">
                <form action="<?= base_url('app/asset_list') ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari nama atau kode asset..." value="<?= $this->input->get('keyword') ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Search!</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" style="padding: 0 !important; margin: 0 !important">
                <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url(); ?>app/asset_list'">Tampilkan Semua</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Tambah Asset</button>
            </div>
        </div>


        <!-- <form method="POST" action="<?= base_url('app/filter_jenis_asset') ?>" style="margin-bottom:20px;">
            <label class="control-label col-md-1 col-sm-1 col-xs-4">Filter Jenis</label>
            <div class="col-md-2 col-sm-2 col-xs-4">
                <select name="jenis" onchange="form.submit()" id="" class="form-control">
                    <?php $jeniss = $this->session->userdata('filterJenis') ? $this->session->userdata('filterJenis') : '' ?>
                    <option selected>Pilih Jenis</option>
                    <option <?= $jeniss == '1' ? 'selected'  : '' ?> value="1">ALAT PRODUKSI</option>
                    <option <?= $jeniss == '2' ? 'selected'  : '' ?> value="2">KENDARAAN</option>
                    <option <?= $jeniss == '3' ? 'selected'  : '' ?> value="3">PERALATAN KANTOR</option>
                    <option <?= $jeniss == '4' ? 'selected'  : '' ?> value="4">PC</option>
                    <option <?= $jeniss == '5' ? 'selected'  : '' ?> value="5">PRINTER</option>
                    <option <?= $jeniss == '6' ? 'selected'  : '' ?> value="6">FURNITURE</option>
                </select>
            </div>
            <a class="btn btn-warning" href="<?= base_url('app/reset_jenis') ?>">Reset</a>
            <a href="<?= base_url('app/export_asset') ?>" class="btn btn-success">Excel <i class="fa fa-file-excel-o"></i></a>

        </form> -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th bgcolor="#008080">
                            <font color="white">No.</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Kode</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Nama</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Spesifikasi</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Ruang</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Lokasi</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Jns</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Jml</font>
                        </th>
                        <th bgcolor="#008080">
                            <font color="white">Detail</font>
                        </th>
                    </tr>
                </thead>
                <?php
                if (empty($users_data)) {
                ?>
                    <?php
                } else {
                    foreach ($users_data as $data) :
                    ?>
                        <!--content here-->
                        <tbody>
                            <tr>
                                <td><?php echo ++$page; ?></td>
                                <td><?php echo $data->kode; ?></td>
                                <td><?php echo $data->nama_asset; ?></td>
                                <td><?php echo $data->spesifikasi; ?></td>
                                <td><?php echo $data->ruangan; ?></td>
                                <td><?php echo $data->lokasi; ?></td>
                                <td><?php echo $data->jenis_asset; ?></td>
                                <td><?php echo $data->jumlah; ?></td>
                                <td>
                                    <form action="<?php echo base_url() . "app/asset_detail/" . $data->Id; ?>" target="">
                                        <button type="submit" class="btn btn-dark btn-xs">View</button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>

                <?php
                    endforeach;
                }
                ?>
            </table>
        </div>

        <div class="clearfix"></div>

        <!--pagination-->
        <div class="row col-12 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>

    <!-- Finish content-->


    <!-- /page content -->
    <form data-parsley-validate enctype="multipart/form-data" action="<?php echo base_url(); ?>app/add_asset" method="post" name="form_fullpayment" id="form_fullpayment" class="form-horizontal form-label-left">
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Tambah Data Asset</h2>
                    </div>
                    <div class="modal-body">
                        <h4>
                            <font color="Grey"><Strong>
                        </h4><br>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kode <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="kode" class="form-control col-md-12 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="kode" placeholder="" required="required" type="text">
                                </div>
                                <br><br>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label style="text-align: left;" class="control-label col-md-3 col-sm-3 col-xs-12">Tgl Perolehan <span class="required">*</span></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class='input-group date' id='myDatepicker'>
                                    <input type='text' id='date_pic' name='date_pic' class="form-control" placeholder="yyyy-mm-dd" data-validate-words="1" required="required" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jenis Asset <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select name="jenis_asset" class="form-control">
                                        <option>Pilih</option>
                                        <option value="1">ALAT PRODUKSI</option>
                                        <option value="2">KENDARAAN</option>
                                        <option value="3">PERALATAN KANTOR</option>
                                        <option value="4">PC</option>
                                        <option value="5">PRINTER</option>
                                        <option value="6">FURNITURE</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Asset <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="nama_asset" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama_asset" placeholder="" required="required" type="text">
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Foto
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="foto_asset" class="form-control col-md-7 col-xs-12" name="foto_asset" placeholder="" type="file">
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Spesifikasi <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="spesifikasi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="spesifikasi" placeholder="" required="required" type="text">
                                </div>
                                <br><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="item form-group">
                                <label style="text-align: left;" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Ruangan</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control js-example-basic-single" style="width:100%;" name="ruangan" id="ruangan">
                                        <?php foreach ($asset_ruang as $data) : ?>
                                            <option value="<?php echo $data->keterangan; ?>"><?php echo $data->keterangan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label style="text-align: left;" class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Lokasi</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control js-example-basic-single" style="width:100%;" name="lokasi" id="lokasi">
                                        <?php foreach ($asset_lokasi as $data) : ?>
                                            <option value="<?php echo $data->keterangan; ?>"><?php echo $data->keterangan; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Jumlah <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="jumlah" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="jumlah" placeholder="" required="required" type="number">
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="kondisi">Kondisi<span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select name="kondisi" class="form-control">
                                        <option value="1">Baik</option>
                                        <option value="2">Rusak</option>
                                        <option value="3">Dalam Perbaikan</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Harga <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp
                                        </span>
                                        <input id="salary" class="uang form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="salary" placeholder="" required="required" type="text">
                                    </div>
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Umur <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input id="jumlah" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="umur" placeholder="" type="number">
                                </div>
                                <br><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Detail <span class="required">*</span></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <textarea name="remark" class="form-control" rows="3" placeholder="Please write your information" required="required"></textarea>
                                </div>
                                <br><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div style="text-align: center;">
                            <?php
                            echo form_submit('Submit', 'Simpan', 'onclick="return clicked();", class="btn btn-primary"');
                            ?>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </form>
</div>