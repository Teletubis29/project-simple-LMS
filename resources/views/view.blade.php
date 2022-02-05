<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS-256</title>
</head>
<body>
    @extends('partial/navbar')
    @section('content')
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">       
          <div class="carousel-item active">
            <img src="https://cdn.pixabay.com/photo/2017/10/10/21/47/laptop-2838921_960_720.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block p-3">
                <h1 class="display-5">Learning Management System</h1>
                <h3 class="lead mb-3">LMS-256</h3>
                {{-- <a class="btn btn-dark btn-lg" href="#" role="button">Info Material</a> --}}
                <a class="btn btn-primary btn-lg" href="{{url('/register')}}" role="button">Sign up</a>
              </div>
        </div>
      </div>
      <!-- <div class="alert alert-warning allert-dismissible fade show" role="alert" id="allrt" >
          A simple warning alert—check it out! 
          <button type="button" class="btn-close text-end" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <script>
        $(document).ready(function(){
          document.getElementById('allrt').style.display='none';
        });
        function alert(){
          document.getElementByid('allrt').style.display='block';
        }
      </script> -->
    <div class="jumbotron text-center mt-5 mb-5">
        <h4>Welcome To Learning Management System-256</h4>
        <p>Kita adalah solusi untuk anda yang ingin berkembang<br> Dapatkan ilmu baru disini</p>
      </div>
      <div class="container justify-content-xxl-center mb-5 pb-3">
        <div class="row ">
        <div class="col-md-4">
            <div class="card" style="width: 22rem;">
            <img src="https://moondoggiesmusic.com/wp-content/uploads/2019/06/Unsur-Unsur-Manajemen.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">MANAJEMEN</h5>
                    <p class="card-text">Manajemen termasuk dalam bidang bisnis dan ekonomi, tetapi lebih terfokus pada kegiatan mengelola, merencanakan, dan mengatur (manajemen) semua proses dalam perusahaan untuk mencapai tujuan.<br><br></p>
                    <a href="{{url('/login')}}" class="btn btn-primary">Learn</a>
                  </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="card" style="width: 22rem;">
              <img src="https://i.pinimg.com/originals/af/d0/9a/afd09a406fcf8ab9cea9342d36607008.png" class="card-img-top " alt="...">
                  <div class="card-body">
                    <h5 class="card-title">FARMASI</h5>
                    <p class="card-text">Bidang farmasi tidak ada matinya,Farmasi selalu berkaitan tentang obat-obatan. Disini kamu akan belajar untuk mengenali struktur senyawa obat dan cara sintesisnya, kemudian mengolahnya menjadi obat yang layak dikonsumsi.</p>
                    <a href="{{url('/login')}}" class="btn btn-primary">Learn</a>
                  </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 22rem;">
              <img src="https://markey.id/wp-content/uploads/2020/06/informatika-adalah.jpg" class="card-img-top" alt="..." style="">
                    <div class="card-body">
                      <h5 class="card-title">INFORMATIKA</h5>
                      <p class="card-text"> Teknik Informatika mempelajari dan menerapkan prinsip-prinsip ilmu komputer dan analisa matematis untuk desain, pengembangan, pengujian, dan evaluasi perangkat lunak.<br><br></p>
                      <a href="{{url('/login')}}" class="btn btn-primary">Learn</a>
                    </div>
              </div>
          </div>
        </div>
      </div>
    @endsection
</body>
</html>
