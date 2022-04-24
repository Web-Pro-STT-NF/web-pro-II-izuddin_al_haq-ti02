<?php
 include_once 'header.php';
 include_once 'sidebar.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="form_belanja.php">
    <h2>Belanja Online</h2>
    <hr>
    <br>
    <br>
    <div class="container">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-6">
      <input id="name" name="name" placeholder="Customer Name" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-5">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pproduk" id="radio_2" type="radio" class="custom-control-input" value="mesinc"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-6">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Item" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-6">
      <button name="submit" type="submit" class="btn btn-primary">Send</button>
    </div>
  </div>
</div>
</form>

<div class="col-3" style="margin-left: 7em;">
<?php

error_reporting(0);
$customer = $_POST['customer'];
$produk = $_POST['pproduk'];
$jumlah = $_POST['jumlah'];


echo '<br/>Customer :________ '.$customer;
echo '<br/>Pilih Produk :________ '.$produk;
echo '<br/>Jumlah :________ '.$jumlah;

?>
</div>
              </div>
               <!-- /.card-body -->
              <div class="card-body">
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET" action="form_nilai.php">
    <br>
    <br>
    <div class="container">
    <h3>Form Nilai Siswa</h3>
    <hr>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label ">Nama Lengkap </label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-2 col-form-label">Mata kuliah </label> 
    <div class="col-8">
      <select id="select" name="matkul" class="custom-select">
        <option value="DDP">Jaringan Komputer</option>
        <option value="BD1">UI/UX</option>
        <option value="WEB1">Komunikasi Efektif</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label " >Nilai UTS </label> 
    <div class="col-4">
      <input id="text1" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label">Nilai UAS </label> 
    <div class="col-4">
      <input id="text2" name="nilai_uas" type="text" class="form-control" >
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label">Nilai Tugas/Praktikum </label> 
    <div class="col-4">
      <input id="text3" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="save" type="save" class="btn btn-primary">save</button>
    </div>
  </div>
</div>
</form>

<div class="col-3" style="margin-left: 7em;">
<?php
error_reporting(0);
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_tugas = $_GET['nilai_tugas'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];



echo '<br/>Nama Lengkap : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai Tugas : '.$nilai_tugas;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;


?>
</div>
              </div>
              <div class="card-body">
                   <!-- /.card-body -->
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container mt-5">
<form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Name" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="PW">UI/UX</option>
        <option value="SO">Basis Data 1</option>
        <option value="ST">Bhs. Inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="TUGAS" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="simpan" name="proses"/>
    </div>
  </div>
  
</form>
<?php
    error_reporting(0);
    if (isset($_POST['proses'])){
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];

    echo "Proses $proses";
    echo "<br/>Nama : $nama_siswa";
    echo "<br/>Mata Kuliah : $mata_kuliah";
    echo "<br/>Nilai UTS : $nilai_uts";
    echo "<br/>Nilai UAS : $nilai_uas";
    echo "<br/>Nilai Tugas : $nilai_tugas";

$hasil_uts = intval($nilai_uts) * 0.3;  $hasil_uas = intval($nilai_uas) * 0.35;  $hasil_tugas = intval($nilai_tugas) * 0.35;           
$nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
            
    echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
    if( $nilai_akhir > 55){
    echo "Lulus </br>";
    }else{
    echo "Tidak Lulus </br>";
    }
        
    $nilai_A = $nilai_akhir >= 85;
    $nilai_B = $nilai_akhir >= 70;
    $nilai_C = $nilai_akhir >= 56;
    $nilai_D = $nilai_akhir >= 36;
    $nilai_E = $nilai_akhir >= 0;

          if($nilai_A){
               echo "Grade : A";
            }elseif($nilai_B){
                echo "Grade : B";
            }elseif($nilai_C){
                echo "Grade : C";
            }elseif($nilai_D){
                echo "Grade : D";
            }elseif($nilai_E){
                echo "Grade : E";
            }else{
                echo "Grade : I";
            }
            switch(true){
                case ($nilai_A):
                    echo "<br/>Predikat : Sangat Bagus";
                    break;
                case ($nilai_B):
                    echo "<br/>Predikat : Bagus";
                    break;
                case ($nilai_C):
                    echo "<br/>Predikat : Cukup";
                    break;
                case ($nilai_D):
                    echo "<br/>Predikat : Kurang";
                    break;
                case ($nilai_E):
                    echo "<br/>Predikat : Sangat Kurang";
                    break;
                default:
                    echo "<br/>Tidak Ada";
            }
        }
    ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php
 include_once 'footer.php';
?> 