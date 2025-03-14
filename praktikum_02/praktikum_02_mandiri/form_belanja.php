<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="row">
				<div class="col-md-4 ms-5">
                    <form method= "POST" action="form_belanja.php">
                            <div class="form-group row">
                                <label for="text1" class="col-4 col-form-label">Customer</label> 
                                <div class="col-8">
                                <input id="text1" name="customer" placeholder="Customer Name" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4">Select Product</label> 
                                <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Television"> 
                                    <label for="radio_0" class="custom-control-label">Television</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Refrigerator"> 
                                    <label for="radio_1" class="custom-control-label">Refrigerator</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Washing Machine"> 
                                    <label for="radio_2" class="custom-control-label">Washing Machine</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="text2" class="col-4 col-form-label">Jumlah</label> 
                                <div class="col-8">
                                <input id="text2" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
				<div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary" aria-disabled="true">Daftar Harga</li>
                        <li class="list-group-item list-group-item-light">TV                : 4.200.000</li>
                        <li class="list-group-item list-group-item-dark">Refrigerator       : 3.100.000</li>
                        <li class="list-group-item list-group-item-light">Washing Machine   : 3.800.000</li>
                        <li class="list-group-item list-group-item-dark">Harga Dapat Berubah Setiap Saat</li>
                    </ul>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ngambil data form
    $customer = isset($_POST['customer']) ? $_POST['customer'] : "";
    $produk = isset($_POST['produk']) ? $_POST['produk'] : "";
    $jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
    
    function hargaBarang($produk){
        $harga  = 0;
        if ($produk == 'Television'){
            $harga = 4200000;
        }
        if ($produk== 'Refrigerator'){
            $harga = 3100000;
        }
        if ($produk == 'Washing Machine'){
            $harga = 3800000;
        }
        return $harga;
    }

    // function hargaBarang($produk){
            
    //         if (isset($_POST['produk']) && $_POST['produk'] == 'Television'){
    //             $harga = 4200000;
    //         }
    //         if (isset($_POST['produk']) && $_POST['produk'] == 'Refrigerator'){
    //             $harga = 3100000;
    //         }
    //         if (isset($_POST['produk']) && $_POST['produk'] == 'Washing Machine'){
    //             $harga = 3800000;
    //         }
    //         return $harga;
    //     }
    $totalHarga = hargaBarang($produk) * $jumlah;


    // Hasil form
    echo "<h2>Data Belanja:</h2>";
    echo "Customer      : " . htmlspecialchars($customer) . "<br>";
    echo "Produk Pilihan: " . htmlspecialchars($produk) . "<br>";
    echo "Jumlah Beli   : " . htmlspecialchars($jumlah) . "<br>";
    echo "Harga   : " . htmlspecialchars($totalHarga) . "<br>";
    
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>