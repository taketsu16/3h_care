@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', '会社概要 | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('Company_Profile') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('Company_Profile') }}</h2>
    <div class="Company_Profile">
    <table class="table mb-5 mobile-stacked">
        <tr>
            <th class="px-5">企業名</th>
            <td class="px-5">株式会社スリーエイチケア</td>
        </tr>
        <tr>
            <th class="px-5">業種</th>
            <td class="px-5">医療・福祉系</td>
        </tr>
        <tr>
            <th class="px-5">代表者名</th>
            <td class="px-5">竹津　健亮</td>
        </tr>
        <tr>
            <th class="px-5">設立年月</th>
            <td class="px-5">2020年8月</td>
        </tr>
        <tr>
            <th class="px-5">従業員数</th>
            <td class="px-5">6名（パートも含む）</td>
        </tr>
        <tr>
            <th class="px-5">本所在地</th>
            <td class="px-5">〒332‐0021　埼玉県川口市西川口4‐18‐24</td>
        </tr>
        <tr>
            <th class="px-5">事業内容</th>
            <td class="px-5">接骨、鍼灸マッサージ、訪問マッサージ、緩和型デイサービス</td>
        </tr>
    </table>
    </div>
@endsection
