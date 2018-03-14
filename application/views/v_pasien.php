<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Data Pasien</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th><center>No</center></th>
            <th><center>Nama</center></th>
            <th><center>Umur</center></th>
            <th><center>Jenis Kelamin</center></th>
            <th><center>Alamat</center></th>
            <th><center>No Telepon</center><th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
    
          <tbody>
            <?php
                $no=1;  
                foreach ($data as $key) 
                { ?>
                  <tr>
                     <td class="center"><?php echo $no;?></td>
                    <td class="center"><?php echo $key['nama_pasien'];?></td>
                    <td class="center"><?php echo $key['umur'];?></td>
                    <td class="center"><?php echo $key['jenis_kelamin'];?></td>
                    <td class="center"><?php echo $key['alamat'];?></td>
                    <td class="center"><?php echo $key['no_tlp'];?></td>
                    <td class="center">
                      <center>
                        <a class="btn btn-danger" href="##">
                          <i class="fa fa-trash-o"></i> 
                        </a>
                      </center>
                    </td>
                  </tr>
                   <?php  
                      $no++;
                } ?>
              </tbody>
    </table>
  </div>
</div>