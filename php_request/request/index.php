<?php
// if(isset($_POST['']))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Request Method</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <!-- Method GET -->
                <h2>From Method GET</h2>
                <form class="border rounded p-4" method="GET" action="index.php">
		            <input class="form-control mt-2"   type="text" name="nama" placeholder="Nama"><br>
		            <input class="form-control mt-2"  type="text" name="email" placeholder="Email"><br>
		            <input class="btn btn-primary"  type="submit" name="action" value="Daftar">
	            </form>

	            <?php
	            if ($_GET)
	            {
	            	echo 'Nama: ' . $_GET['nama'];
	            	echo '<br>';
	            	echo 'Email: ' . $_GET['email'];
	            }
                ?>
            </div>

            <div class="col-4">
                <!-- Method POST -->
                <h2>From Method POST</h2>
                <form class="border rounded p-4" method="POST" action="index.php">
	            	<input class="form-control mt-2" type="text" name="nama" placeholder="nama"><br>
	            	<input class="form-control mt-2" type="text" name="email" placeholder="email"><br>
	            	<input class="btn btn-primary" type="submit" name="action" value="Tambah">
	            </form>

	            <?php
	            if ($_POST)
	            {
	            	echo 'Nama: ' . $_POST['nama'];
	            	echo '<br>';
	            	echo 'Email: ' . $_POST['email'];
	            }
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- JQuery first ,then poper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>