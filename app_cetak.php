<?php
	include("sess_check.php");

	include("dist/function/format_tanggal.php");
	include("dist/function/format_rupiah.php");
	$no 	 = $_GET['no'];
	$sql = "SELECT cuti.*, employee.* FROM cuti, employee WHERE cuti.npp=employee.npp
			AND cuti.no_cuti ='$no'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	// deskripsi halaman
	$pagedesc = " ";
	$pagetitle = str_replace(" ", "_", $pagedesc)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Institut Sains Dan Teknologi Nasional">

	<title><?php echo $pagetitle ?></title>

	<link href="libs/images/isk-logo.jpg" rel="icon" type="images/x-icon">

	<!-- Bootstrap Core CSS -->
	<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/offline-font.css" rel="stylesheet">
	<link href="dist/css/custom-report.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="libs/jquery/dist/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<section id="header-kop">
		<div class="container-fluid">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td class="text-left" width="20%">
							<img src="libs/images/isk-logo.jpg" alt="logo-dkm" width="70"
						</td>
						<h4><td class="text-center">
						<b>Veselka.id</b> <br>
						Cibinong, Kabupaten Bogor, Jawa Barat 16913<br>
						Telp: (021) 89115030<br></h4>
						<td class="text-right" width="20%">
							<img src="libs/images/isk-logo.jpg" alt="logo-dkm" width="70"/>
						</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>
<br/>
<br/>
	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center"><b>SURAT PERMOHONAN PENGAJUAN CUTI</b></h4>
			<br />
			<br />
			
<h3>
				<tbody>

			<tr>
				<td> Bogor, </td>
				<td><?php echo IndonesiaTgl($result['tgl_pengajuan']);?></td>
					<br/>
					<br/>
			</tr>
			<tr>
						<td width="30%">Nomor :	</td>
						<td><?php echo $result['no_cuti'];?></td>
					</tr>
			<br/>
			<br/>
</p>
<p>
    Yth. HRD Veselka.id
</p>
<p>
    Di Tempat
    <br/>
    <br/>
<p>
	Dengan hormat,
</p>
<p>
	Saya yang bertandatangan di bawah ini:
</p>
<br/>
					
					<tr>
						<td>Nama	:	</td>
						<td><?php echo $result['nama_emp'] ?></td>
					</tr>
					<br/>
					<tr>
						<td>npp	:	</td>
						<td><?php echo $result['npp'] ?></td>
					</tr>
					<br/>
					<tr>
						<td>Telepon	:	</td>
						<td><?php echo $result['telp_emp'];?></td>
					</tr>
					<br/>
					<tr>
						<td>divisi:	</td>
						<td><?php echo $result['divisi'];?></td>
					</tr>
					<br/>
					<tr>
						<td>jabatan	:	</td>
						<td><?php echo $result['jabatan'];?></td>
					</tr>
					<br/>
					<tr>
						<td>keterangan	:	</td>
						<td><?php echo $result['keterangan'];?></td>
					</tr>
					<br/>
					<br/>
					<tr>
						Bermaksud mengajukan cuti terhitung dari tanggal <td><?php echo IndonesiaTgl($result['tgl_awal']);?></td> sampai dengan tanggal <td><?php echo IndonesiaTgl($result['tgl_akhir']);?></td>.
						</tr>
						<br/> 
								<tr>	Demikian surat permohonan cuti ini saya ajukan. Atas perhatiannya saya ucapkan terima kasih.
								</tr>
					<tr>
					<br/>
					<br/>
					<br/>
					<br/>
					<h5 class="text-right">Hormat Saya</h5>
					</tr>
					<tr>
					<br/>
					<br/>
					<br/>
					<br/>
					<h5 class="text-right"><td><?php echo $result['nama_emp'] ?></td>
					</h5>
					</tr>
				</tbody>
				</h3>
			
			<br>
			<div>
			</div>
			
		</div><!-- /.container -->
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
			window.print();
		});
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- jTebilang JavaScript -->
	<script src="libs/jTerbilang/jTerbilang.js"></script>

</body>
</html>