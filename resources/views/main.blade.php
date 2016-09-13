@extends('layouts.app')

@section('content')

<div class="container-fluid block block-one">
  <div class="img img-1"></div>
  <h1>Meidän puupellettimme</h1>
</div>
<div id="pellets" class="container-fluid block block-text">
  <h1>Mitä pelletti on?</h1>
  <div class="col-sm-4 sub-block">
    Pelletti on puunjalostuksen sivutuotteista, turpeesta, oljista, puulastuista yms. valmistettu  biopolttoaine. Laadultaan paras pelletti saadaan puupuruista. Pelletti on ympäristöystävällinen polttoaine, tuhkapitoisuus laadukkaassa pelletissä on 1 - 3 %.
  </div>
  <div class="col-sm-4 sub-block">
    Toisin kuin tavallinen polttopuu laadukas pelletti on erittäin kuiva, kosteuspitoisuus on noin 10%. Pelletti on suunnilleen puolitoista kertaa tiiviimpi puuaines kuin tavallinen puu, mikä takaa pelletin korkean lämpöarvon.
  </div>
  <div class="col-sm-4 sub-block">
    Siirtyminen talojen lämmityksessä öljystä, sähköstä ja kaasusta pelletin käyttöön johtaa säästöön lämmitys-kustannuksissa ja koko maapallon mittakaavassa olennaiseen hiilidioksidipäästöjen alentamiseen.
  </div>
</div>
<div class="container-fluid block block-two">
  <div class="price-tag">
    <div class="price-text">
      <h2>{{ number_format($bag->price, 2) }}</h2>
      <span>euroa/{{ $bag->weight }} kg</span>
    </div>
  </div>
  <div class="img img-2"></div>
  <div class="text-center">
    <div class="heading">
      15 kiloa pellettejä: 24 tuntia lämpöä
    </div>
    Kotiinkuljetus Helsingin seudulla (postinumeroalueet 00000-02999)
    <br />
    3 päivän kuluessa tilauksesta (vähintään 1 säkki)
    <br />
    Nopeasti ja vaivattomasti!
  </div>
</div>
<div id="product" class="container-fluid block block-text">

  @include('layouts.posts_trio')

</div>
<div class="container-fluid block block-three">
  <div class="price-tag">
    <div class="price-text">
      <h2>{{ number_format($storage->price, 2) }}</h2>
      <span>euroa/{{ $storage->weight }} kg</span>
    </div>
  </div>
  <div class="img img-3"></div>
  <div class="text-center">
    <div class="heading">
      Luotettavaa energiaa, joustavat tuotemäärät
    </div>
    Toimitus: 1 - 20 europalettia 3 päivän kuluessa
    <br />
    Maksumuoto: tilisiirto
  </div>
</div>
<div id="order" class="container-fluid block block-text">

  @include('layouts.form')

</div>
<div id="contacts" class="container-fluid block block-five">
  <div class="col-xs-6 col-sm-4">
    <a href="callto:+358 40 123 4567">044 989 6077</a>
  </div>
  <div class="col-xs-6 col-sm-4">
    <a href="mailto:info@pellcompany.fi">info@pellcompany.fi</a>
  </div>
</div>

<div class="popup" id="popup">
  Kiitos tilauksestasi! Olemme sinuun pian yhteydessä tilaukseesi liittyen.
  <button class="form-control ok-btn">OK</button>
</div>

@endsection