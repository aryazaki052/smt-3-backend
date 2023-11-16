<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Admin</title>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Fonts and icons -->
<script src="../../front/assets/js/plugin/webfont/webfont.min.js"></script>
<script>
    WebFont.load({
        google: {"families":["Lato:300,400,700,900"]},
        custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../front/assets/css/fonts.min.css']},
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="../../front/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../front/assets/css/atlantis.min.css">

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="../../front/assets/css/demo.css">
</head>
<body>
<!-- session -->
<div>
	<?php
	include "../../koneksi.php";
	// Mulai sesi atau dapatkan sesi yang sudah ada
	session_start();

	if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
		header("Location: ../login.php"); // Redirect ke halaman login jika belum login
		exit();
	}

	// // Set waktu timeout sesi dalam detik (contoh: 5 menit)
	// $timeout = 300; // 5 menit * 60 detik

	// // Periksa apakah sesi terakhir lebih dari waktu timeout
	// if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
	// 		// Sesuaikan pesan sesuai kebutuhan
	// 		echo "Sesi Anda telah berakhir. Silakan login kembali.";
			
	// 		// Hapus semua variabel sesi
	// 		session_unset();

	// 		// Hancurkan sesi
	// 		session_destroy();

	// 		// Redirect ke halaman login atau tindakan lainnya
	// 		header("Location: ../login.php");
	// 		exit();
	// }

	// // Perbarui waktu terakhir akses ke sesi
	// $_SESSION['last_activity'] = time();

	$username = $_SESSION['admin'];


	// Query SELECT untuk menampilkan data mahasiswa berdasarkan NIM
	$query = "SELECT * FROM admin_user WHERE usname_admin = '$username'";
	$result = mysqli_query($kon, $query);
	?>

</div>
<!-- end session -->

<!-- header -->
<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<!-- <a href="index.html" class="logo" style="display: flex; justify-content:center; align-items:center;">
					<img src="../back/css/logo1.png" width="70px">
					<p style="margin-top: 20px; color:black;"><b>ITB STIKOM BALI</b></p>
				</a> -->
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
	<!-- end header -->

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../front/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
									<span>
									<?php
									if ($data = mysqli_fetch_assoc($result)) {
										// Menampilkan Nama dan NIM dari data mahasiswa
										echo $data['usname_admin']; // Gantilah 'NIM' dengan nama kolom yang sesuai di database
										echo "<span class='user-level'>" . $data['id_admin'] . "</span>";
								}
								?>
									</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
					<li class="nav-item">
               <a href="../admin.php">
								<i class="fas fa-desktop"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">MENU</h4>
						</li>
						<li class="nav-item ">
						<a href="../dapodik/dapodik.php">
								<i class="fas fa-desktop"></i>
								<p>Data Pokok Mahasiswa</p>
							</a>
						</li>
            <li class="nav-item active">
                <a href="pengumuman.php">
								<i class="fas fa-desktop"></i>
								<p>Pengumuman</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="../logout.php">
									<i class="fas fa-undo"></i>
									<p>Logout</p>
							</a>
					</li>


						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<!-- content -->
		<div class="main-panel">
			<div class="content">
        <div class="panel-header bg-primary-gradient">
          <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            </div>
          </div>
        </div>
        <div class="page-inner mt--5">
          <div class="row">
            <div class="col-md-12">
              <div class="card full-height">
                <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Tambah Pengumuman</div>
                  <a href="pengumuman.php" class="btn btn-primary btn-sm ml-auto">Back</a>
                </div>
                </div>
                <div class="card-body">
                  <form action="store.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="judul">Judul Pengumuman</label>
                      <input type="text" name="judul" class="form-control" id="text" placeholder="Masukan Judul">
                    </div>
                    <div class="form-group">
                      <label for="judul">Deskripsi Pengumuman</label>
                      <input type="text" name="deskripsi" class="form-control" id="text" placeholder="Deskripsi Pengumuman">
                    </div>
                  <div class="form-group" id="dokumenFormGroup">
                    <label for="dokumen">Dokumen Pengumuman (doc, docx, pdf)</label>
                    <input type="file" name="dokumen" class="form-control" accept=".doc,.docx,.pdf">
                </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-sm" type="submit">Save</button>
                      <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                    </div>
                  </form>
				        </div>
              </div>
            </div>
          </div>
        </div>
			</div>

		</div>
		<!-- End content -->







	<!--   Core JS Files   -->
	<div>
		<script src="../../front/assets/js/core/jquery.3.2.1.min.js"></script>
		<script src="../../front/assets/js/core/popper.min.js"></script>
		<script src="../../front/assets/js/core/bootstrap.min.js"></script>

		<!-- jQuery UI -->
		<script src="../../front/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src="../../front/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

		<!-- jQuery Scrollbar -->
		<script src="../../front/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


		<!-- Chart JS -->
		<script src="../../front/assets/js/plugin/chart.js/chart.min.js"></script>

		<!-- jQuery Sparkline -->
		<script src="../../front/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

		<!-- Chart Circle -->
		<script src="../../front/assets/js/plugin/chart-circle/circles.min.js"></script>

		<!-- Datatables -->
		<script src="../../front/assets/js/plugin/datatables/datatables.min.js"></script>

		<!-- Bootstrap Notify -->
		<script src="../../front/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

		<!-- jQuery Vector Maps -->
		<script src="../../front/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
		<script src="../../front/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

		<!-- Sweet Alert -->
		<script src="../../front/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

		<!-- Atlantis JS -->
		<script src="../../front/assets/js/atlantis.min.js"></script>

		<!-- Atlantis DEMO methods, don't include it in your project! -->
		<script src="../../front/assets/js/setting-demo.js"></script>
		<script src="../../front/assets/js/demo.js"></script>
		<script>
			Circles.create({
				id:'circles-1',
				radius:45,
				value:60,
				maxValue:100,
				width:7,
				text: 5,
				colors:['#f1f1f1', '#FF9E27'],
				duration:400,
				wrpClass:'circles-wrp',
				textClass:'circles-text',
				styleWrapper:true,
				styleText:true
			})

			Circles.create({
				id:'circles-2',
				radius:45,
				value:70,
				maxValue:100,
				width:7,
				text: 36,
				colors:['#f1f1f1', '#2BB930'],
				duration:400,
				wrpClass:'circles-wrp',
				textClass:'circles-text',
				styleWrapper:true,
				styleText:true
			})

			Circles.create({
				id:'circles-3',
				radius:45,
				value:40,
				maxValue:100,
				width:7,
				text: 12,
				colors:['#f1f1f1', '#F25961'],
				duration:400,
				wrpClass:'circles-wrp',
				textClass:'circles-text',
				styleWrapper:true,
				styleText:true
			})

			var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

			var mytotalIncomeChart = new Chart(totalIncomeChart, {
				type: 'bar',
				data: {
					labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
					datasets : [{
						label: "Total Income",
						backgroundColor: '#ff9e27',
						borderColor: 'rgb(23, 125, 255)',
						data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
					}],
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: false,
					},
					scales: {
						yAxes: [{
							ticks: {
								display: false //this will remove only the label
							},
							gridLines : {
								drawBorder: false,
								display : false
							}
						}],
						xAxes : [ {
							gridLines : {
								drawBorder: false,
								display : false
							}
						}]
					},
				}
			});

			$('#lineChart').sparkline([105,103,123,100,95,105,115], {
				type: 'line',
				height: '70',
				width: '100%',
				lineWidth: '2',
				lineColor: '#ffa534',
				fillColor: 'rgba(255, 165, 52, .14)'
			});
		</script>
	</div>

</body>
</html>