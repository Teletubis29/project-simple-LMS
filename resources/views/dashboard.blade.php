@extends('partial.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">WELCOME {{auth()->user()->name}}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>
      <div class="jumbotron text-center mt-5 mb-5">
        <h3>Learning Management System-256</h3>
        <p>Kita adalah solusi untuk anda yang ingin berkembang<br></p>
      </div>
      <div class="accordion mt-4" id="accordionExample">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://moondoggiesmusic.com/wp-content/uploads/2019/06/Unsur-Unsur-Manajemen.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.pinimg.com/originals/af/d0/9a/afd09a406fcf8ab9cea9342d36607008.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://markey.id/wp-content/uploads/2020/06/informatika-adalah.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <br>
        <br>
        <div class="card">
          <div class="card-header">
            APA ITU MANAJEMEN ?
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Manajemen merupakan program studi yang mempelajari mengenai bagaimana mengelola suatu perusahaan atau organisasi. Manajemen juga termasuk dalam bidang bisnis dan ekonomi, tetapi lebih terfokus pada kegiatan mengelola, merencanakan, dan mengatur (manajemen) semua proses dalam perusahaan untuk mencapai tujuan.</p>
              <footer class="blockquote-footer">Rencanamu </footer>
            </blockquote>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            APA ITU FARMASI ?
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Farmasi adalah program studi yang mempelajari tentang obat-obatan. Disini kamu akan belajar untuk mengenali struktur senyawa obat dan cara sintesisnya, kemudian mengolahnya menjadi obat yang layak dikonsumsi. Pastinya disini kamu akan belajar, mencampur, meracik, melakukan formulasi, mengidentifikasi, mengombinasi, menganalisis, dan menciptakan obat yang memenuhi standar kualitas dan kelayakan. Tidak hanya meracik, kamu juga harus mengetahui bagaimana penggunaan obat-obatan tersebut secara aman.</p>
              <footer class="blockquote-footer">Rencanamu</footer>
            </blockquote>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            Apa itu Teknik Informatika?
          </div>
          <div class="card-body">
            <blockquote class="blockquote mb-0">
              <p>Program studi Teknik Informatika mempelajari dan menerapkan prinsip-prinsip ilmu komputer dan analisa matematis untuk desain, pengembangan, pengujian, dan evaluasi perangkat lunak, sistem operasi dan kerja komputer. Pada prodi ini akan diajarkan mulai dari menghasilkan ide kreatif, kemudian merealisasikan ide tersebut, memecah fungsi-fungsi, dan menciptakan struktur instruksi yang sangat detil dalam bahasa pemrograman untuk mengajarkan komputer apa saja yang harus dilakukan. Mahasiswa Ilmu Komputer harus menjadi ahli dalam sistem operasi dan aplikasi untuk memastikan bahwa dasar sistem operasi bekerja dengan baik.</p>
              <footer class="blockquote-footer">Rencanamu</footer>
            </blockquote>
          </div>
        </div>
        <br>
      
</div>

@endsection