@extends('layouts.app')

@section('content')

<div class="container-fluid block block-one">
  <h1>This is our pellets</h1>
  <div class="header-link">
    <a href="#order">Try them for free</a>
  </div>
</div>
<div id="pellets" class="container-fluid block block-text">
  <h1>What are pellets?</h1>
  <div class="col-sm-4 sub-block">Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</div>
  <div class="col-sm-4 sub-block">Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</div>
  <div class="col-sm-4 sub-block">Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</div>
</div>
<div class="container-fluid block block-two">
  Text here
</div>
<div id="product" class="container-fluid block block-text">

  @include('layouts.posts_trio')

</div>
<div class="container-fluid block block-three">
  More text
</div>
<div id="order" class="container-fluid block block-text">

  @include('layouts.form')

</div>
<div class="container-fluid block block-four">
  Orange text
</div>
<div class="container-fluid block block-text">
  Map and stuff
</div>
<div id="contacts" class="container-fluid block block-five">
  <div class="col-sm-4">
    <div class="col-md-12">Pellco Oy</div>
    <div class="col-md-12">7600 Glover Road</div>
    <div class="col-md-12">Some Small City</div>
  </div>
  <div class="col-sm-4">
    <div class="col-md-12"><a href="callto:+358 40 123 4567">+358 40 123 4567</a></div>
    <div class="col-md-12"><a href="mailto:info@pellco.fi">info@pellco.fi</a></div>
    <div class="col-md-12"></div>
  </div>
  <div class="col-sm-4">
    <div class="col-md-12">More info</div>
  </div>
</div>

@endsection