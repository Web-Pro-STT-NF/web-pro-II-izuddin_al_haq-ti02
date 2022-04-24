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
            <h1>praktikum 4</h1>
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
              <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MAHASISWA</title>
</head>

<body>
    <div class="content">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><b>WEB02</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PHP OOP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Review PHP
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                            </li>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="" aria-label="">
                                <button class="btn btn-success" type="submit">SUBMIT</button>
                            </form>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><b>Login</b></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <b> Dropdown</b>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3</a></li>
                                </ul>
                    </div>
                </div>
            </nav>
            
            <div class="row mt-4">
                <div class="col-4">
                    <span><b>Show</b></span>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3</a></li>
                            <li><a class="dropdown-item" href="#">4</a></li>
                            <li><a class="dropdown-item" href="#">5</a></li>
                            <li><a class="dropdown-item" href="#">6</a></li>
                            <li><a class="dropdown-item" href="#">7</a></li>
                            <li><a class="dropdown-item" href="#">8</a></li>
                            <li><a class="dropdown-item" href="#">9</a></li>
                            <li><a class="dropdown-item" href="#">10</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <span><b>entries</b></span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <label for="" class=""><b>Search : </b></label>
                    <input type="text" class="ms-1">
                </div>
            </div>
            <div class="row">
                <?php
                require_once "praktikum4/class_mahasiswa.php";

                $ns1 = new Mahasiswa("00012", "Septo Suryano", "TI", 2019, 3.9, "Cum Laude");
                $ns2 = new Mahasiswa("00014", "Zilonk", "SI", 2019, 1.9, "Cukup");
                $ns3 = new Mahasiswa("00015", "Robert Herlino", "TI", 2019, 2.9, "Baik");
                $ns4 = new Mahasiswa("00016", "Devit Rocably", "SI", 2019, 3.2, "Memuaskan");

                $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                ?>
                
                <div class="container-fluid">
                <table class="table table-success table-striped"><br>
                        <thead>
                            <tr>
                                <th scope="col">No<i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">NIM <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Nama <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Prodi <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Thn Angkatan <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">IPK <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Predikat <i class="bi bi-chevron-expand"></i></th>
                                <th scope="col">Ubah <i class="bi bi-chevron-expand"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            foreach ($ar_nilai as $ns) {
                                echo '<tr><td>' . $nomor . '</td>';
                                echo '<td>' . $ns->nim . '</td>';
                                echo '<td>' . $ns->nama . '</td>';
                                echo '<td>' . $ns->prodi . '</td>';
                                echo '<td>' . $ns->thn_angkatan . '</td>';
                                echo '<td>' . $ns->ipk . '</td>';
                                echo '<td>' . $ns->predikat_ipk() . '</td>';
                                echo '<td> <a><i class="bi bi-eye" style="color: blue"></i> <i class="bi bi-pencil" style="color: blue"></i></a></td>';
                                $nomor++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <span>Showing 1 to 4 of 4 entries</span>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row my-2 ">
                <hr>
            </div>
            <div class="row">
                <div class="bagian_bawah">
                    <h6>Lab Pemrograman Web Lanjutan</h6>
                    <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
                        STT-NF-Kampus B
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Nilai Mahasiswa</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">WEB02</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Review PHP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        PHP5 OOP
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="" placeholder="" aria-label="">
                                <button class="btn btn-outline-secondary" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row mt-3 ">
                <h3 class="ms-3">Form Nilai Ujian</h3>
                <hr>
            </div>
            <div class="row mt-2 mb-5 justify-content-center">
                <div class="col-6 offset-1 justify-content-center">
                    <form method="POST" action="">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label">NIM</label>
                            <div class="col-6">
                                <input id="nim" name="nim" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label for="matkul" class="col-4 col-form-label">pilih MK</label>
                            <div class="col-6">
                                <select id="matkul" name="matkul" type="text" class="form-select">
                                <option value="PILIH"></option>
                                <option value="BD">Basis Data</option>
                                <option value="JK">Jaringan Komputer</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row pt-3">
                            <label for="nilai" class="col-4 col-form-label">Nilai</label>
                            <div class="col-6">
                                <input id="nilai" name="nilai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-6 pt-3">
                                <button name="proses" type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row ms-2">
                <div class="khusus_php">

                </div>
                <?php
                require_once "praktikum4/class_nilaimahasiswa.php";
                if (isset($_POST['proses'])) {
                    $proses = $_POST['proses'];
                    $nim = $_POST['nim'];
                    $mata_kuliah = $_POST['matkul'];
                    $nilai = $_POST['nilai'];
                    $nilai_mahasiswa = new NilaiMahasiswa($mata_kuliah, $nilai, $nim);
                    echo "NIM : " . $nilai_mahasiswa->nim;
                    echo "<br>Nama Mata Kuliah : " . $nilai_mahasiswa->matakuliah;
                    echo "<br>Nilai : " . $nilai_mahasiswa->nilai;

                    $hasil_ujian = $nilai_mahasiswa->grade($nilai);
                    echo "<br>Hasil Ujian : $hasil_ujian <br>";

                    $hasil_grade = $nilai_mahasiswa->hasil($nilai);
                    echo "Grade : $hasil_grade";
                }
                ?>
            </div>
            <div class="row">
                <?php
                if (isset($_POST['proses'])) {
                    echo '<hr style="margin-top: 15px; margin-left:0;>';
                }
                ?>
            </div>
            <div class="row">
                <div class="bagian_bawah ms-2">
                    <h6>Lab Pemrograman Web Lanjutan</h6>
                    <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
                        STT-NF-Kampus B
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
              </div>
              <div class="card-body">
              <?php
    require_once "praktikum4/class_lingkaran.php";
    echo "NILAI PHI : " . Lingkaran::PHI;
    $lingkar1 = new Lingkaran(10);
    $lingkar2 = new Lingkaran(4);

    echo "<br>Luas Lingkaran I : " . $lingkar1->getLuas();
    echo "<br>Luas Lingkaran II : " . $lingkar2->getLuas();

    echo "<br>Keliling Lingkaran I : " . $lingkar1->getKeliling();
    echo "<br>Keliling Lingkaran II : " . $lingkar2->getKeliling();
?>
              </div>
              <div class="card-body">
              <?php
    require_once "praktikum4/class_persegipanjang.php";
    $persegi1 = new PersegiPanjang(10,15);
    $persegi2 = new PersegiPanjang(18,9);
    echo "<br> Luas Persegi Panjang Ke - 1 : " . $persegi1->luasPersegiPanjang();
    echo "<br> Luas Persegi Panjang Ke - 2 : " . $persegi2->luasPersegiPanjang();

    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi1->kllPersergiPanjang();
    echo "<br> Keliling Persegi Panjang Ke - 1 : " . $persegi2->kllPersergiPanjang();
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