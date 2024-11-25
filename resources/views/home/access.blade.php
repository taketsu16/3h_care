@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', 'アクセス | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('access') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('access') }}</h2>
    <div class="googlemap ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.645896971821!2d139.7073709741438!3d35.80862552296809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018935fba2c1bb1%3A0x6e33f920b00a844b!2z44Gf44GR44Gk5o6l6aqo6Zmi!5e0!3m2!1sja!2sjp!4v1716292559314!5m2!1sja!2sjp"
            width="1300" height="600" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row flex-column flex-md-row">
        <div class="col px-5 mt-5">
            <ul class="list-group">
                <li><i class="fa fa-home orange fa-2x"></i>　〒332‐0021　埼玉県川口市西川口4‐18‐24</li>
                <li><i class="fa fa-phone orange fa-2x"></i>　TEL / FAX　048‐252-6644</li>
                <li><i class="fa fa-subway orange fa-2x"></i>　京浜東北線 川口駅から徒歩15分</li>
                <li><i class="fa fa-car orange fa-2x"></i>　駐車場6台　近くにコインパーキングあり</li>
                <li><i class="fa fa-bicycle orange fa-2x"></i>　駐輪場完備　バイクもOK</li>
            </ul>
        </div>
        <div class="col px-5 mt-5">
            <table class="table py-4 text-center">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">月</th>
                    <th scope="col">火</th>
                    <th scope="col">水</th>
                    <th scope="col">木</th>
                    <th scope="col">金</th>
                    <th scope="col">土</th>
                    <th scope="col">日</th>
                </tr>
                <tr>
                    <th scope="row">9：00～13：00</th>
                    <td>〇</td>
                    <td>〇</td>
                    <td>-</td>
                    <td>〇</td>
                    <td>〇</td>
                    <td>〇</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">14：00～19：30</th>
                    <td>〇</td>
                    <td>〇</td>
                    <td>-</td>
                    <td>〇</td>
                    <td>〇</td>
                    <td>※</td>
                    <td>-</td>
                </tr>
            </table>
            <p class="pull-right">※　営業時間は17：00まで</p>
            <a href="tel:048‐252-6644">
                <button class="btn orangebg" type="button"
                    style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 2rem;">
                    TEL / FAX　048‐252-6644</button>
            </a>
            <p class="orange text-center">※お越しの際は保険証をお持ちください。</p>
        </div>
    </div>
@endsection
