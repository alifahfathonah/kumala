<!DOCTYPE html>
<html>
<head>
	<title>Data Pengguna Aset</title>
    <style type="text/css">  
        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 11px;
            line-height: 1.42857143;
            color: #333;
        }
        
        .h2, h2 {
            font-size: 16px;
        }

        .h3, h3 {
            font-size: 13px;
            }

        .h1, .h2, h1, h2 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .h3, h3 {
            margin-top: 10px;
            margin-bottom: 5px;
            font-family: inherit;
            font-weight: 300;
            line-height: 1.1;
            color: inherit;
        }

        .h1, .h2,  h1, h2 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit;
        }
        
        h1{
            text-align:center; 
            margin-bottom:10px;
            font-weight:600;
        }

        .table {
            width: 50%;
        }
        .table td {    
            border: 0.01em solid #000;
            text-align: left;
            font-size: 10px;
            padding: 2px 5px 5px;  
        }
        
        .table {
            border-collapse: collapse;
        }
        
        .table th {
            border: 0.01em solid #000;
            padding: 5px 5px;
            background: #ddd;
            text-align: center;
            font-size: 11px;
            font-weight: 600;
        }   

        .logo{
            height:100px;
            width: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;   
            text-align: center;
        } 

        
   
  </style>
  

</head>


<body>
<table style="width:100%;">
  <tr>
    <td align="center">
      <img width="100px" src="<?php echo base_url('/assets/img/asset-ku.png') ;?>"/>
    </td>
   </tr>
</table>

<h1>IT Departemen</h1>

 
<h2>Data Pengguna Aset</h2>  
<hr />
    <table style="width:50%;">
        <tbody >
            <tr>
                <td style="width:30%;">Nama:</td>
                <td><?php if($d_pengguna) echo $d_pengguna->nama; ?></td>
            </tr>
            <tr>
            <td>NIK:</td>
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
            <tr>
            <td>Catatan:</td>
            <td><?php if($d_pengguna) echo $d_pengguna->catatan; ?></td>
            </tr>
        </tbody>
        </table>
<br />
<h3>Aset</h3>  
 
        <table class="table">
        <thead>
            <tr>
                <th>Nama </th>
                <th >Asset Tag</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if($d_asset){
                foreach($d_asset as $d){
                ?>
            <tr>
                <td><?php echo $d->nama_aset; ?></td>
                <td><?php echo $d->asset_tag; ?></td>
            </tr>
            <?php
                }
                }
            ?>
            </tbody>
        </table>
<br/>
<h3>Asesoris</h3>  
 
        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if($d_asesoris)
                {
                foreach($d_asesoris as $d){
                ?>
            <tr>
                <td><?php echo $d->id; ?></td>
                <td><?php echo $d->nama_model . ' ('. $d->manufaktur .')'; ?></td>
            </tr>
            <?php
                }
                }
            ?>
            </tbody>
        </table>

<br/>
<h3>Inventori</h3>  
        <table class="table">
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
                <td><?php echo $d->nama_model . ' ('. $kategori .')'; ?></td>
                <td><?php echo $d->qty_out; ?></td>
            </tr>
            <?php
                }
            
                }
                else
                {
                    echo '<tr><td>&nbsp;</td><td>&nbsp;</td></tr>';
                }
            ?>
            </tbody>
        </table>


    </body>
</html>