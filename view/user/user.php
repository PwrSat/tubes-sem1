<form form action="" method="post" enctype="multipart/form-data">
	<div class="contact_section layout_padding">
		<div class="container">
			<h1 class="contact_taital">Tulis Laporan Kamu</h1>

		</div>
		<div class="contact_section_2 layout_padding">
			<div class="container">
				<div class="mail_section">
					<div class="row">
						<div class="col-md-6">
							<input type="" class="input_text" placeholder="Name" name="nama">
						</div>
						<div class="col-md-6">
							<input type="" class="input_text" placeholder="judul" name="judul">
						</div>
					</div>
					<input type="date" class="input_text" placeholder="tanggal" name="tanggal">
					<input type="file" class="input_text" placeholder="upload" name="gambar">
					<textarea class="massage_box" name="laporan" placeholder="type here" required></textarea>
					<button class="btn btn-danger" type="submit" name="simpan">Submit</button>
					<?php
					if (isset($_POST['simpan'])) {
						require_once '../fungsi/db.php';

						$user = $_POST['nama'];
						$judul = $_POST['judul'];
						$tanggal = $_POST['tanggal'];
						$namagambar = $_FILES['gambar']['name'];
						$lokasigambar = $_FILES['gambar']['tmp_name'];
						$konten = $_POST['laporan'];


						move_uploaded_file($lokasigambar, "../view/gambar/" . $namagambar);

						$sql = "INSERT INTO laporan (nama, judul, tanggal, isi_laporan, gambar, status) VALUES ('$user', '$judul', '$tanggal', '$konten' , '$namagambar' , 'pending')";
						// $execQuery = mysqli_query($koneksi, $sql);

						if ($koneksi->query($sql) === TRUE) {
							echo "<h2>Postingan Anda Berhasil</h2>";
						} else {
							echo "Terjadi kesalahan: ";
						}
						$koneksi->close();
					}
					?>
					<div class="send_bt">
						<div class="send_text"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>