<?php
include 'CONNECTION.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($KODEPRODI, $NAMAPRODI)
{
 $sql = "INSERT INTO tblprodi (KODEPRODI, NAMAPRODI ) VALUES
('$KODEPRODI', '$NAMAPRODI')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tblprodi";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($KODEPRODI)
{
 $sql = "SELECT * FROM tblprodi WHERE KODEPRODI='$KODEPRODI'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($KODEPRODI, $NAMAPRODI)
{
 $sql = "UPDATE tblprodi SET KODEPRODI='$KODEPRODI', NAMAPRODI='$NAMAPRODI'
WHERE KODEPRODI='$KODEPRODI'";
 $this->conn->query($sql);
} 
public function delete($KODEPRODI)
{
 $sql = "DELETE FROM tblprodi WHERE KODEPRODI='$KODEPRODI'";
 $this->conn->query($sql);
}
}
