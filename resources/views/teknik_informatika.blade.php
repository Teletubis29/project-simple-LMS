@extends('partial.main')
@section('teknik-informatika')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">WELCOME {{auth()->user()->name}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
  <div class="accordion mt-4" id="accordionExample">
    <div class="accordion mt-4" id="accordionExample">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              DASAR INFORMATIKA
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a href="https://www.slideshare.net/sigitpamuji/ho-bab1?qid=5cb98f2a-3aba-4c63-8c5a-cac7174e0f7e&v=&b=&from_search=3" class="list-group-item list-group-item-action">Pengertian Dasar Informatika</a>
              <a href="https://www.slideshare.net/AfdanPMIKabBogor/perangkat-lunak-sofwere?qid=5cb98f2a-3aba-4c63-8c5a-cac7174e0f7e&v=&b=&from_search=7" class="list-group-item list-group-item-action">Perangkat Lunak Software</a>
              <a href="https://www.slideshare.net/AfdanPMIKabBogor/perangkat-keras-hardwere?qid=5cb98f2a-3aba-4c63-8c5a-cac7174e0f7e&v=&b=&from_search=8" class="list-group-item list-group-item-action">Perangkat Keras Hardware</a>
              <a href="https://www.slideshare.net/AfdanPMIKabBogor/dasar-sistem-telekomunikasi-40557638?qid=8e158a6b-cbfe-409d-9774-207a08de01d4&v=&b=&from_search=15" class="list-group-item list-group-item-action">Dasar Sistem Telekomunikasi</a>
              <a href="https://www.slideshare.net/RosyidRidlo2/pengantar-algoritma?qid=a8bffd03-1817-474c-b176-e6af9d919a1a&v=&b=&from_search=5" class="list-group-item list-group-item-action">Pengantar Algoritma</a>
              <a href="https://www.slideshare.net/RahmatHidayat9/algoritma-10436970?qid=a8bffd03-1817-474c-b176-e6af9d919a1a&v=&b=&from_search=21" class="list-group-item list-group-item-action">Algoritma</a>
              <a href="https://www.slideshare.net/tresyaTF/algoritma-02?qid=a8bffd03-1817-474c-b176-e6af9d919a1a&v=&b=&from_search=4" class="list-group-item list-group-item-action">Algoritma Pemrograman</a> 
            </div>
          </div>
        </div>
        <div class="accordion-item ">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              PEMROGRAMAN
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a href="https://www.slideshare.net/DwiMuktianto/bahasa-pemrograman" class="list-group-item list-group-item-action">Bahasa Pemrograman</a>
              <a href="https://www.slideshare.net/seegeed/pemrograman-dasar-i?qid=fb2656e0-d190-4386-be3c-ed19c0689d69&v=&b=&from_search=14" class="list-group-item list-group-item-action">Pemrograman Dasar</a>            
              <a href="https://www.slideshare.net/geasevengeaseven/generasi-bhs-pemrogramanppt" class="list-group-item list-group-item-action">Generasi Bahasa Pemrograman</a>
              <a href="https://www.slideshare.net/wiensayangyuli/pengenalan-pemrograman-java-32967168?qid=fb2656e0-d190-4386-be3c-ed19c0689d69&v=&b=&from_search=15" class="list-group-item list-group-item-action">Pengenalan Pemrograman Java</a>
              <a href="https://www.slideshare.net/faizin2q1/tipe-data-pada-java?qid=4ec33a7c-8496-4449-bfdd-433e5b5be70f&v=&b=&from_search=8" class="list-group-item list-group-item-action">Tipe Data Pada Java</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              BASIS DATA
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">            
          <a href="https://www.slideshare.net/edysmartnow/pengantar-basis-data?qid=8824d5ec-7eb4-4b30-91a8-49d219867812&v=&b=&from_search=4" class="list-group-item list-group-item-action">Pengertian Basis Data</a>
          <a href="https://www.slideshare.net/parispermadi/presentasi-modul-5-data-dan-basis-data" class="list-group-item list-group-item-action">Data Dan Basis Data</a>
          <a href="https://www.slideshare.net/nanikrahmini/konsep-dasar-sistem-basis-data-ppt" class="list-group-item list-group-item-action">Konsep Basis Data</a>
          <a href="https://www.slideshare.net/ardiawanbagus/arsitektur-basis-data?qid=7a83df8a-729d-4a0a-82f2-b320b092cd79&v=&b=&from_search=14" class="list-group-item list-group-item-action">Arsitektur Basis Data</a>
          <a href="https://www.slideshare.net/hloebiz/mengoperasikan-software-aplikasi-basis-data-910111213-ok?next_slideshow=46633862" class="list-group-item list-group-item-action">Mengoperasikan software aplikasi basis data</a>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection