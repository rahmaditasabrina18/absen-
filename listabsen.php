<!DOCTYPE HTML>
<html>
<head>
<?php $this->load->view('pegawai/_partials/header.php')?>
</head>
<body>
      <div id="wrapper">
     <!-- Navigation -->
     <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <?php $this->load->view('pegawai/_partials/head.php')?>
      <div class="navbar-default sidebar" role="navigation">
        <?php $this->load->view('pegawai/_partials/sidebar.php')?>
      </div>
      <!-- /.navbar-header -->
      <li class="dropdown">
        <ul class="dropdown-menu">
          <li class="dropdown-menu-header text-center">
            <strong>Account</strong>
          </li>
          <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
          <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
          <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
          <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
          <li class="dropdown-menu-header text-center">
            <strong>Settings</strong>
          </li>
          <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
          <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
          <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
          <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
          <li class="divider"></li>
          <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
          <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>  
        </ul>
      </li>
    </nav>

    <div id="page-wrapper">
      <div class="col-md-12 graphs">
        <div class="xs">
          <h4 class="text-center">LIST ABSEN PEGAWAI</h4>
          
          <div class="col-md-12 ">
            <div class="wid_blog-desc">
              <div class="wid_blog-left">
                <img src="<?= base_url('assets/')?>images/5.png" class="img-responsive" alt="">
              </div>
              <div class="wid_blog-right">
                <h2>Yudha Mulyana</h2>
                <p>Direktur Utama</p>
              </div>
              <div class="clearfix"> </div>
              
              
              <div class="bs-example4" data-example-id="contextual-table">
               <div class="panel panel-danger" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-body no-padding">
                  <table class="table">
                    <thead>
                      <tr class="danger">
                        <th>Tanggal Absen</th>
                        <th>Waktu Absen</th>
                        <th>Waktu Selesai</th>
                        <th>Keterangan</th>
                      </tr>
                      <?php foreach ($absen as $absen):?>
                        <tr >
                          <td><?php echo $absen['tgl_absen']?></td>
                          <td><?php echo $absen['jam_masuk']?></td>
                          <td><?php echo $absen['jam_keluar']?></td>
                          <td><?php echo $absen['keterangan']?></td>
                        </tr>
                      <?php endforeach; ?>
                    </thead>
                    
                  </table>

                  <!-- Button Cetak -->
                  <div class="buttons">
                    <div class="text-center"> 
                    <input type="button" class="btn btn_5 btn-md btn-primary" value="Cetak Absen"  onclick="window.location = 'editpegawai'"/> 
                  </div>

                  <div class="clearfix"> </div> 
                </div> 
                </div>
              </div>
            </div>
          </div>


          <div class="copy_layout">
            <p>GeekGarden Software House © 2020</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Nav CSS -->
<link href="<?= base_url('assets/')?>css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?= base_url('assets/')?>js/metisMenu.min.js"></script>
<script src="<?= base_url('assets/')?>js/custom.js"></script>
</body>
</html>
