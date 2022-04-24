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
            <h1>praktikum 5</h1>
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
    <title>Abdullah Izuddin Al-Haq  Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container mt-5">
    <table class="table text-center table-bordered">
    <thead>
     <tr>
        <th>Nomor</th>
        <th>Nomor Account</th>
        <th>Pelanggan</th>
        <th>Saldo</th>
      </tr>
    </thead>

<tbody>        
<?php
    include_once 'praktikum5/Acountbank/class_bankAccount.php';
      $customer1 = new BankAccount('C001', 6000000, 'jefri');
      $customer2 = new BankAccount('C002', 5350000, 'susi');
      $customer3 = new BankAccount('C003',2500000, 'rini');
    $array1 = [$customer1, $customer2, $customer3];   
      $customer1->deposit(1000000);
      $customer1->transfer($customer2, 500000);
      $customer1->transfer($customer3, 1500000);
      $customer1->withdraw(2500000);
    $array2 = [$customer1, $customer2, $customer3];
    $nomor = 1;
     foreach ($array1 as $ar1) : ?>
     <tr>
     <th><?= $nomor++;?>
    </th>
      <td><?= $ar1->nomor?></td>
      <td><?= $ar1->costumer?></td>
      <td><?= $ar1->saldo?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div>
</body>
</html>
              </div>
              <div class="card-body">
              <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdullah Izuddin Al-Haq Dispenser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<div class="text-center">
    <div class="card mt-3 ms-4" style="width: 50rem;">
    <h1 class="card-header">Data Dispenser </h1>
    <div class="card-body">
<?php
    include_once "praktikum5/dispenser/class_dispenser.php";
    $pelanggan1 = new dispenser("Pelanggan", "Kopi", 20000);

    echo "Nama : " . $pelanggan1->getNama() . "<br>";
    echo "Membeli : " . $pelanggan1->getMinum() . "<br>"; 

    $pelanggan1->setVolume(7000);

    echo "Volume Wadah : " . $pelanggan1->getVolume() . "<br>";
    echo $pelanggan1->Kopi() . "<br>";
    echo $pelanggan1->Menambah_Kopi() . "<br>";
    echo $pelanggan1->Menambah_Kopi_Lagi() . "<br>";
    echo "Volume Sisa Dari Wadah Kopi : " . $pelanggan1->getVolume() . "<br>";
?>
</div>
</div>
</div>
</body>
</html>
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