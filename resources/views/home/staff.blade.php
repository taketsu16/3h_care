@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', 'スタッフ紹介 | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('staff') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('staff') }}</h2>

@endsection
