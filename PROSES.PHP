<?php
include 'MODEL.php';
if (isset($_POST['submit_simpan'])) {
$KODEPRODI = $_POST['KODEPRODI'];
$NAMAPRODI = $_POST['NAMAPRODI'];$model = new Model();
 $model->insert($KODEPRODI, $NAMAPRODI);
header ('location : INDEX.php');
}
if (isset($_POST['submit_edit'])) {
    $KODEPRODI = $_POST['KODEPRODI'];
    $NAMAPRODI = $_POST['NAMAPRODI'];$model = new Model();
     $model->update($KODEPRODI, $NAMAPRODI);
    header ('location : INDEX.php');
}
if (isset($_GET['KODEPRODI'])) {
 $id = $_GET['KODEPRODI'];
 $model = new Model();
 $model->delete($id);
 header('location:INDEX.php');
}

