<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<style>
.bgjumbotron {
background-color:#e8f1ff;
}
#projek{
background-color:#e8f1ff;
}

</style>

<section class="jumbotron bgjumbotron text-center">
<img src="img/logo.png" alt="menunggu" width="200"
class="rounded-circle img-thumbnail"/>
  <h1 class="display-4">Joina Florist Nusantara</h1>
  <p class="lead">Melayani Keseluruh Indonesia</p>
</section>

<!--about-->
<section id="about">
<div class="container">
<div class="row text-center mb-3">
<div class="col">
<h2>Perizinan</h2>
</div> 
 </div>
<div class="row justify-content-center fs-5"> 
	<div class="col-md-4 text-center">Izin adalah Keputusan Pejabat Pemerintahan yang berwenang sebagai wujud persetujuan atas permohonan Warga Masyarakat sesuai dengan ketentuan peraturan perundang-undangan
	Referensi:Undang-Undang Nomor 30 Tahun 2014 (Administrasi Pemerintahan)
</div>
	<div class="col-md-4 text-center">TUGAS, FUNGSI DAN URAIAN TUGAS. Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu mempunyai tugas melaksanakan urusan Bidang Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu yang menjadi kewenangan Provinsi dan tugas pembantuan kepada Daerah Provinsi. </div>
	<div class="col-md-4 text-center">TUGAS, FUNGSI DAN URAIAN TUGAS. Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu mempunyai tugas melaksanakan urusan Bidang Penanaman Modal dan Pelayanan Perizinan Terpadu Satu Pintu yang menjadi kewenangan Provinsi dan tugas pembantuan kepada Daerah Provinsi. </div>

	</div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="0.8" d="M0,128L40,144C80,160,160,192,240,197.3C320,203,400,181,480,154.7C560,128,640,96,720,101.3C800,107,880,149,960,186.7C1040,224,1120,256,1200,250.7C1280,245,1360,203,1400,181.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
</path></svg>
</section>
<section id="projek">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2> Perizinan online</h2>
        </div>
      </div>
      <div class="row">
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/4.jpg" class="card-img-top" alt="projek1">
            <div class="card-body">
              <p class="card-text">Langkah pertama dalam mengajukan permohonan adalah mengajukan permohonan melalui smartphone anda </div>
          </div>
            </div>
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="projek2">
            <div class="card-body">
              <p class="card-text">Setelah Permohonan anda sudah diajukan, maka permohonan anda akan diproses oleh pegawai dan akan memberitahukan informasi terkait permohonan yang diajukan</p>
            </div>
          </div>
            </div>
            <div class="col-md-4 mb-3">
            <div class="card">
            <img src="img/2.jpg" class="card-img-top" alt="projek1">
            <div class="card-body">
              <p class="card-text">Setelah di proses, maka Anda mendapatkan nomer antrian untuk mendapatkan Surat izin terkait permohonan yang anda ajukan.</div>
          </div>
            </div>
          </div>
  </div>
 
 </section>
 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e8f1ff" fill-opacity="1" d="M0,192L34.3,202.7C68.6,213,137,235,206,229.3C274.3,224,343,192,411,176C480,160,549,160,617,176C685.7,192,754,224,823,213.3C891.4,203,960,149,1029,154.7C1097.1,160,1166,224,1234,256C1302.9,288,1371,288,1406,288L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
<section id="contact">
  <div class="container">
<div class="row justifiy-content text-center">
  <div class="col-5">
    <h2>Kontak</h2>
  </div>
	<div class="row">
	  <div class="col-5 mb-3">
				<div class="card" style="width: 25rem;">
				<ul class="list-group list-group-flush">
				  <li class="list-group-item">Dinas Penanaman Modal dan Pelayanan Perizinan Terpadu SAtu Pintu Provsu</li>
				  <li class="list-group-item">Jl. K.H. Wahid Hasyim No.8A, Merdeka
					Kec. Medan Baru, Kota Medan
					Sumatera Utara 20154</li>
				  <li class="list-group-item">Telepon: (061) 451-4614 � (061) 457-2953</li>
			  </ul>
			  </div>
			  </div>
		</div>
	  </div>
	  </div>
</section>
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>