@extends('partial.main')
@section('manajemen')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">WELCOME {{auth()->user()->name}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
  <div class="accordion mt-4" id="accordionExample">


 
</div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        DASAR MANAJEMEN
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href="https://www.slideshare.net/titinindrawati33/sejarah-manajemen" class="list-group-item list-group-item-action">Sejarah Manajemen</a>
        <a href="https://www.slideshare.net/yuditaeka1/dasar-manajemen-39950400?qid=fbcb2637-829e-4209-a52d-42f257a0b938&v=&b=&from_search=4" class="list-group-item list-group-item-action">Pengantar Manajemen</a>
        <a href="https://www.slideshare.net/YeYeAlkautsar/perspektif-manajemen?qid=c56ddd79-d5d1-4f0b-aeff-188e3d42ab80&v=&b=&from_search=6" class="list-group-item list-group-item-action">Perspektif manajemen</a>
        <a href="https://www.slideshare.net/yuditaeka1/evoulusi-teori-manajemen" class="list-group-item list-group-item-action">Evolusi Teori Manajemen</a>
        <a href="https://www.slideshare.net/bagusanggardajaya/teori-teori-manajemen" class="list-group-item list-group-item-action">Teori Teori Manajemen</a>
        <a href="https://www.slideshare.net/misty_hanasepti/task-1-fix?next_slideshow=45243780" class="list-group-item list-group-item-action">Pendekatan Klasik Dalam Manajemen</a> 
        <a href="https://www.slideshare.net/massepe/perkembangan-pemikiran-ilmu-manajemen" class="list-group-item list-group-item-action">Perkembangan dan pemikiran Manajemen</a>
      
      </div>
    </div>
  </div>
  <div class="accordion-item ">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        MANAJEMEN OPERASI
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href="https://www.slideshare.net/yuniarputry26/manajemen-operasi-55505147?qid=3b9788f4-12e4-426e-bea9-a5a33e1b6575&v=&b=&from_search=46" class="list-group-item list-group-item-action">Manajemen Operasi</a>
        <a href="https://www.slideshare.net/uchaneijitakumi/proses-manajemen" class="list-group-item list-group-item-action">Proses Manajemen</a>
        <a href="https://www.slideshare.net/angelyputry/sistem-dan-proses-manajemen" class="list-group-item list-group-item-action">Sistem dan Proses Manajemen</a>
        <a href="https://www.slideshare.net/angelyputry/fungsi-pengawasan-dalam-manajemen" class="list-group-item list-group-item-action">Fungsi Pengawasan dalam Manajemen</a>
        <a href="https://www.slideshare.net/UniSrikandi/proses-pengawasan-dalam-manajemen" class="list-group-item list-group-item-action">Proses pengawasan dalam manajemen</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        PENGORGANISASIAN
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href="https://www.slideshare.net/Mazawang/dasardasar-organisasi" class="list-group-item list-group-item-action">Dasar-Dasar Organisasi</a>
        <a href="https://www.slideshare.net/BaiqMiarahayu/fungsi-pengorganisasian-manajemen-73579797" class="list-group-item list-group-item-action">Fungsi Pengorganisasian Manajemen</a>
        <a href="https://www.slideshare.net/hannypotter23/pengorganisasian-dan-struktur" class="list-group-item list-group-item-action">Pengorganisasian dan struktur</a>
        <a href="https://www.slideshare.net/sisteminformasi3403/struktur-organisasi-10317509" class="list-group-item list-group-item-action">Struktur Organisasi</a>
        <a href="https://www.slideshare.net/smklbting6/proses-pengorganisasian" class="list-group-item list-group-item-action">Proses Pengorganisasian</a>
        
      </div>
    </div>
  </div>
</div>
@endsection