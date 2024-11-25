@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', 'スリーエイチケア')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/home_top1.jpg" class="img-fluid" alt="...">
            <div class="card-img-overlay blur">
                <h5 class="card-title">Health</h5>
                <h5 class="card-title">Hand</h5>
                <h5 class="card-title">Heart</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/home_top2.jpg" class="img-fluid" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">皆様の健康を</h5>
                <h5 class="card-title">　　確かな技術で</h5>
                <h5 class="card-title">　　　心を込めて</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/home_top3.jpg" class="img-fluid" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@section('content')
    <h2>おしらせ</h2>
    <div class="col box26">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">　2024 9.30　　　　　臨時休業11月16日</li>
            <li class="list-group-item">　2024 9.30　　　　　鍼のご予約承ります</li>
            <li class="list-group-item">　2024 9.30　　　　　正社員、パート募集中</li>
        </ul>
    </div>
    <h2>３つの事業内容</h2>
    <div class="row row-cols-1">
        <div class="col my-5">
            <div class="card h-100 businessimg card_taketsu">
                <div class="row g-0 flex-column flex-md-row">
                    <div class="col-md-4 img-fluid-wrapper">
                        <img src="images/card_img1.jpg" class="img-fluid w-100" style="object-fit: cover; height: 100%;"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('home.show') }}#taketsu">
                            <div class="card-body">
                                <h3 class="card-head">たけつ接骨院（ほねつぎ）</h3>
                                <h4>― 柔道整復術 ―</h4>
                                <p class="card-text text-start">
                                    お身体の痛み・ケガなどがございましたらお気軽にご相談ください。<br>
                                    健康保険・交通事故治療・労災保険など取り扱っております。
                                </p>
                                <div class="tag_area0 tag_taketsu">
                                    <ul>
                                        <li>骨折</li>
                                        <li>脱臼</li>
                                        <li>打撲</li>
                                        <li>ねんざ</li>
                                        <li>肉離れ</li>
                                        <li>予約不要</li>
                                    </ul>
                                </div>
                                <p class="text-end detail">詳細はこちら > </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col my-5">
            <div class="card h-100 businessimg card_3h_care">
                <div class="row g-0 flex-column flex-md-row">
                    <div class="col-md-4 img-fluid-wrapper">
                        <img src="images/card_img2.jpg" class="img-fluid w-100" style="object-fit: cover; height: 100%;"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('home.show') }}#3h_care">
                            <div class="card-body">
                                <h3 class="card-head">スリーエイチ</h3>
                                <h4>― マッサージ ―</h4>
                                <p class="card-text text-start">
                                    マッサージは筋肉の緊張を緩和、循環の改善、リラクゼーション効果などがございます。※女性施術者も在籍
                                </p>
                                <div class="tag_area0 tag_3h_care">
                                    <ul>
                                        <li>マッサージ</li>
                                        <li>あん魔・指圧</li>
                                        <li>肩こり</li>
                                        <li>腰痛</li>
                                        <li>往診</li>
                                        <li>完全予約制</li>
                                    </ul>
                                </div>
                                <h4>― はり・きゅう ―</h4>
                                <p class="card-text text-start">筋肉のコリ、痛みなどの症状に対して幅広く施術ができます。<br>
                                    ※マッサージ・鍼灸治療は予約制となっております。</p>
                                <div class="tag_area0 tag_3h_care">
                                    <ul>
                                        <li>マッサージ</li>
                                        <li>あん魔・指圧</li>
                                        <li>鍼・灸</li>
                                        <li>往診</li>
                                        <li>完全予約制</li>
                                    </ul>
                                </div>
                                <p class="text-end detail">詳細はこちら > </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col my-5">
            <div class="card h-100 businessimg card_anki">
                <div class="row g-0 flex-column flex-md-row">
                    <div class="col-md-4 img-fluid-wrapper">
                        <img src="images/card_img3.jpg" class="img-fluid w-100" style="object-fit: cover; height: 100%;"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('home.show') }}#anki">
                            <div class="card-body">
                                <h3 class="card-head">緩和型デイサービス あんき</h3>
                                <h4>― 機能訓練 ―</h4>
                                <p class="card-text text-start">
                                    運動不足が気になる、手術後などのリハビリをしたい、生活習慣を改善したいなど、いつまでも健康でいたい方におすすめです。<br>
                                    介護予防することが目的となり、要支援１・要支援２・事業対象者の認定を受けている方は介護保険が適用となるのでご相談ください。<br>
                                    ※ご相談の際は、たけつ接骨院の窓口またはお電話にてご連絡ください。</p>
                                <div class="tag_area0 tag_anki">
                                    <ul>
                                        <li>マッサージ</li>
                                        <li>あん魔・指圧</li>
                                        <li>鍼・灸</li>
                                        <li>往診</li>
                                        <li>完全予約制</li>
                                    </ul>
                                </div>
                                <p class="text-end detail">詳細はこちら > </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <h2>アクセス</h2>
    <div class="googlemap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.645896971821!2d139.7073709741438!3d35.80862552296809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018935fba2c1bb1%3A0x6e33f920b00a844b!2z44Gf44GR44Gk5o6l6aqo6Zmi!5e0!3m2!1sja!2sjp!4v1716292559314!5m2!1sja!2sjp"
            width="1300" height="600" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row p-5 d-flex">
        <div class="col-sm">
            <ul class="list-group">
                <li><i class="fa fa-home orange fa-2x"></i>　〒332‐0021　埼玉県川口市西川口4‐18‐24</li>
                <li><i class="fa fa-phone orange fa-2x"></i>　TEL / FAX　048‐252-6644</li>
                <li><i class="fa fa-subway orange fa-2x"></i>　京浜東北線 川口駅から徒歩15分</li>
                <li><i class="fa fa-car orange fa-2x"></i>　駐車場6台　近くにコインパーキングあり</li>
                <li><i class="fa fa-bicycle orange fa-2x"></i>　駐輪場完備　バイクもOK</li>
            </ul>
        </div>
        <div class="col-sm">
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
    <h2>採用情報</h2>
    <h3 class="recruit_text">スリーエイチケアでは
        一緒に働くスタッフを募集しています。</h3>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <a href="{{ route('home.recruit') }}#employee">
            <div class="col">
                <div class="card recruit_hover h-100">
                    <h3 class="card-head recruit_title">正社員・契約社員</h3>
                    <p class="card-text">募集要項を見る
                        <i class="fa fa-arrow-circle-right fa-2x faa-pulse orange" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        </a>
        <a href="{{ route('home.recruit') }}#part-time">
            <div class="col">
                <div class="card recruit_hover h-100">
                    <h3 class="card-head recruit_title">パート・アルバイト</h3>
                    <p class="card-text">募集要項を見る
                        <i class="fa fa-arrow-circle-right fa-2x faa-pulse orange" aria-hidden="true"></i>
                    </p>
                </div>
            </div>
        </a>
    </div>
@endsection
