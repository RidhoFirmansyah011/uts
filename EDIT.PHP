<?php
$id  =  $_GET['KODEPRODI'];
include  'model.php';
$model = new Model();
$data  =  $model->edit($id);
?>
<!doctype  html>
<html lang="en">
<head>
<title>Edit  PRODI</title>
</head>
<body>
<h1>Edit  PRODI</h1>
<a  href="index.php">Kembali</a><br><br>
<form  action="prcess.php"  method="post">
<label>KODE PRODI</label><br>
<input  type="text"  name="KODEPRODI"  value="<?php  echo  $data->KODEPRODI  ?>"><br>
<label>NAMA PRODI</label><br>
<input  type="text"  name="NAMAPRODI"  value="<?php  echo  $data->NAMAPRODI ?>"><br>
<br><br>
<button  type="submit"  name="submit_edit">Submit</button>
</form>
</body>
</html>