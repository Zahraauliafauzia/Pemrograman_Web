<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Contoh sederhana Pendaftaran</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w700">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Online</h2>
                    <form method="POST" action = "konfigurasipmb.php">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Depan</label>
                                    <input class="input--style-4" type="text" name="nama_depan">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Belakang</label>
                                    <input class="input--style-4" type="text" name="nama_belakang">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tempat Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tgl_lahir">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Jenis Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomor Handphone</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>

                        <!-- Mulai dari sini -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Agama </label>
                                    <input class="input--style-4" type="text" name="agama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alamat</label>
                                    <input class="input--style-4" type="text" name="alamat">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kode Pos</label>
                                    <input class="input--style-4" type="text" name="kodePos">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Status</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Menikah
                                            <input type="radio" checked="checked" name="status">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Belum Menikah
                                            <input type="radio" name="status">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> 
                        </div>
        
                        <h2 class="title"> <br>DATA SEKOLAH ASAL CALON MAHASISWA</h2>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Asal Sekolah</label>
                                    <input class="input--style-4" type="text" name="asal_sekolah">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tahun Lulus</label>
                                    <input class="input--style-4" type="text" name="tahun_lulus">
                                </div>
                            </div>  
                        </div>

                        <h2 class="title"> <br>PEMINATAN PROGRAM STUDI</h2>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label">Pilihan Program Studi</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Akutansi
                                            <input type="radio" checked="checked" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Manajemen
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Ilmu Komunikasi
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Psikologi
                                            <input type="radio" checked="checked" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Desain Komunikasi Visual
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Informatika
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Sistem Informasi
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Teknik Sipil
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Arsitektur
                                            <input type="radio" name="prodi">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <h2 class="title"> <br>Ujian Saringan Masuk</h2>
                        <div class="row row-space">
                            <div class="col-2">
                            <div class="input-group">
                                    <label class="label">Pilihan Gelombang</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Gelombang 1
                                            <input type="radio" checked="checked" name="gelombang">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Gelombang 2
                                            <input type="radio" name="gelombang">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Gelombang 3
                                            <input type="radio" name="gelombang">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container m-r-45">Gelombang 4
                                            <input type="radio" checked="checked" name="gelombang">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sumber Informasi</label>
                                    <input class="input--style-4" type="text" name="sumber_infor">
                                </div>
                            </div>  
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue"  type="submit" 
                            input type="submit" value="kirim2" name="submit">Submit
                             </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    

        

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script>

</body>

</html>
