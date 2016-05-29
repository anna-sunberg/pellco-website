<h1>{{ $trio['title'] }}</h1>
<div class="col-sm-4 sub-block">
    <div class="col-sm-8 col-sm-offset-2">
        <img class="img-responsive" src="/img/{{ $trio['image'] }}" />
    </div>
</div>
<div class="col-sm-4 sub-block">{{ strip_tags($trio['text_1']) }}</div>
<div class="col-sm-4 sub-block">{{ strip_tags($trio['text_2']) }}</div>