<?php 

$conn = mysqli_connect("localhost","root","","praktikum8");

$id_produk = $_GET["id_produk"];

mysqli_query($conn,"DELETE FROM item WHERE id_produk = $id_produk");

if (mysqli_affected_rows($conn)>0) {
	echo "
		<script>
			alert('Data Terhapus');
			document.location.href = 'etalase.php';
		</script>
	";
}
?>