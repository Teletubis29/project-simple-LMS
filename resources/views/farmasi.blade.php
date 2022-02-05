@extends('partial.main')
@section('farmasi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">WELCOME {{auth()->user()->name}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>
  <div class="accordion mt-4" id="accordionExample">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button bg-info text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            FARMASI PENGANTAR
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a href="https://www.slideshare.net/wafaaufia/peran-ilmu-sejarah-peradaban-kedokteran-islam?qid=9fcfa662-2f6d-48f2-8de6-043437638262&v=&b=&from_search=5" class="list-group-item list-group-item-action">Peran ilmu sejarah peradaban kedokteran islam</a>
            <a href="https://www.slideshare.net/MrZedd/formulasi-dasar-farmasi1?qid=9fcfa662-2f6d-48f2-8de6-043437638262&v=&b=&from_search=10" class="list-group-item list-group-item-action">Formulasi dasar farmasi</a>
            <a href="https://www.slideshare.net/SuryaAmal/pendidikan-kefarmasian-indonesia-47968847?qid=b5358a1e-6810-4f5d-9158-10b2fdae0699&v=&b=&from_search=18" class="list-group-item list-group-item-action">Pendidikan Kefarmasian Indonesia</a>
            <a href="https://www.slideshare.net/heryanti1/makalah-pekerjaan-farmasi-dan-ham?qid=ebcd06ed-15d3-4755-9ff6-a830e0e12eb8&v=&b=&from_search=84" class="list-group-item list-group-item-action">Pekerjaan Farmasi dan Ham</a>
            <a href="https://www.slideshare.net/wafaaufia/farmasi-dalam-khazanah-islam?qid=75340bff-8ec1-4ecb-b3f0-25f42522c963&v=&b=&from_search=191" class="list-group-item list-group-item-action">Farmasi dalam Khazanah Islam</a>
            <a href="https://www.slideshare.net/SuryaAmal/produk-farmasi-dalam-perspektif-islam" class="list-group-item list-group-item-action">Produk Farmasi Dalam Perspektif Islam</a> 
            <a href="https://www.slideshare.net/raidiw/sejarah-kefarmasian-26826663?qid=3c0ba269-c86e-4636-854a-fc409132f9a7&v=&b=&from_search=3" class="list-group-item list-group-item-action">Sejarah Kefarmasian</a>
          
          </div>
        </div>
      </div>
      <div class="accordion-item ">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed bg-info text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            FARMAKOLOGI
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <a href="https://www.slideshare.net/LatarissaTomarala/farmakologi-pengertian-obatpdf?qid=81ec67c8-f55f-4592-8a5a-e60988da693b&v=&b=&from_search=2" class="list-group-item list-group-item-action">Farmakologi pengertian Obat</a>
            <a href="https://www.slideshare.net/Satsukilovenatsuke/farmakologi-i?qid=81ec67c8-f55f-4592-8a5a-e60988da693b&v=&b=&from_search=1" class="list-group-item list-group-item-action">Farmakologi</a>
            <a href="https://www.slideshare.net/SapanNada/pendahuluan-farmakologi?qid=81ec67c8-f55f-4592-8a5a-e60988da693b&v=&b=&from_search=12" class="list-group-item list-group-item-action">Pendahuluan Farmakologi</a>
            <a href="https://www.slideshare.net/MuhammadMunandar2/farmakologi-pencernaan?qid=81ec67c8-f55f-4592-8a5a-e60988da693b&v=&b=&from_search=5" class="list-group-item list-group-item-action">Farmakologi Pencernaan</a>
            <a href="https://www.slideshare.net/LiaOktaviani4/farmakologi-analgetik?qid=2234f15d-0e98-49a2-a768-89e5dd30de65&v=&b=&from_search=24" class="list-group-item list-group-item-action">Farmakologi Analgetik</a>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed bg-info text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            FARMAKOGNOSI
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">            
        <a href="https://www.slideshare.net/SuryaAmal/pengatar-farmakognosi?qid=cba90016-2e84-4f50-bc83-cafc8c18a2fc&v=&b=&from_search=8" class="list-group-item list-group-item-action">Pengantar Farmakognosi</a>
        <a href="https://www.slideshare.net/SapanNada/pendahuluan-farmakognosi?qid=cba90016-2e84-4f50-bc83-cafc8c18a2fc&v=&b=&from_search=12" class="list-group-item list-group-item-action">Pendahuluan Farmakognosi</a>
        <a href="https://www.slideshare.net/YusiKanita/farmakognosi-fructus?qid=16122985-004d-4b2d-b994-54bf31fa0b7d&v=&b=&from_search=16" class="list-group-item list-group-item-action">Farmakognosi Fructus(buah)</a>
        <a href="https://www.slideshare.net/septianraha/farmakognosi-32064711?qid=16122985-004d-4b2d-b994-54bf31fa0b7d&v=&b=&from_search=19" class="list-group-item list-group-item-action">Farmakognosi</a>
        <a href="https://www.slideshare.net/cweh/biji-pptx?qid=1beb179d-b656-484b-ac13-3443d1a8693a&v=&b=&from_search=34" class="list-group-item list-group-item-action">Farmakognosi Semen (Biji)</a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
