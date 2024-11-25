@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', '当院について | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('features') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('features') }}</h2>
    <div class="features">
        <div class="f_item">
            <p class="f_title">Health <small>（健康）</small></p>
            <p>スリーエイチケアは、皆様の健康を第一に考えています。接骨院や鍼灸治療、マッサージ、訪問マッサージ、デイサービス、往診など、多様な治療とケアを通じて、地域の方々の健康をサポートしています。</p>
        </div>
        <div class="f_item">
            <p class="f_title">Hand <small>（確かな技術）</small></p>
            <p>専門的な技術と経験を持つスタッフが、鍼灸やマッサージ、リハビリなどの治療を丁寧に提供します。手を使って行う施術は、痛みの緩和や健康維持に重要で、確かな技術をもって一人ひとりに最適な治療を施しています。</p>
        </div>
        <div class="f_item">
            <p class="f_title">Heart <small>（心を込めて）</small></p>
            <p>心のこもったケアを大切にしている会社です。訪問マッサージやデイサービスでは、利用者の方々に寄り添い、温かい心で対応することで、安心感と信頼を築いています。地元の皆さんに愛される存在であり、アットホームな雰囲気で親しみやすさを大切にしています。
            </p>
        </div>
    </div>

    <div class="card my-5 director">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title under">株式会社<br>
                        スリーエイチケア</h5>
                    <p class="card-text">患者さまや地域の方がいつでも気軽に立ち寄っていただける
                        コミュニティのような接骨院でありたいと思っています。
                        医療の枠にとらわれず、新しいことにチャレンジしながらも
                        スタッフ一人ひとりが患者さまに寄り添う気持ちは変わらずに。
                        皆さまに「選ばれる接骨院」を目指して、
                        これからもスタッフ一同、力を尽くして参ります。</p>
                    <p class="text-end"><span class="orange">代表取締役</span>　竹津健亮</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/director.jpg" class="img-fluid director m-auto" alt="...">
            </div>
        </div>
    </div>

    <h2>3つの事業内容</h2>
    <div class="business" id="taketsu">
        <img src="images/card_img1.jpg" class="img-fluid rounded-start business_img" alt="...">
        <h5 class="card-title top-left">たけつ接骨院<br>
            （ほねつぎ）
        </h5>
        <div class="tag_area06 tag_taketsu">
            <ul>
                <li>骨折</li>
                <li>脱臼</li>
                <li>打撲</li>
                <li>ねんざ</li>
                <li>肉離れ</li>
                <li>マッサージ</li>
                <li>肩こり</li>
                <li>腰痛</li>
                <li>予約不要</li>
            </ul>
        </div>
        <div class="card-body card_taketsu1">
            <h5>外傷や身体の痛みをケアします</h5>
            <p class="card-text text-start">骨折・脱臼・打撲（うちみ）・捻挫（くじき）・挫傷（肉離れ等）の施術を行っております。<br>
                施術するのは、日本の国家資格である柔道整復師が施術にあたります。<br>
                お身体の痛み・ケガなどがございましたらお気軽にご相談ください。<br>
                健康保険・交通事故治療・労災保険など取り扱っております。</p>
            <div class="col box26 box_business">
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
                        <td scope="row">9：00～13：00</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>-</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="row">14：00～19：30</td>
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
            </div>
        </div>
    </div>
    <div class="business" id="3h_care">
        <img src="images/card_img2.jpg" class="img-fluid rounded-start business_img" alt="...">
        <h5 class="card-title top-left">スリーエイチケア</h5>
        <div class="tag_area06 tag_3h_care">
            <ul>
                <li>マッサージ</li>
                <li>あん魔・指圧</li>
                <li>鍼・灸</li>
                <li>肩こり</li>
                <li>腰痛</li>
                <li>往診</li>
                <li>完全予約制</li>
            </ul>
        </div>
        <div class="card-body card_3h_care1">
            <div class="row">
                <h5>マッサージ</h5>
                <p class="col card-text text-start">
                    マッサージは筋肉の緊張を緩和、循環の改善、リラクゼーション効果などがございます。通院が難しい方は国家資格者（あん摩マッサージ指圧師）がご自宅へお伺いし施術することも可能です。※女性施術者も在籍</p>
                <h5>はり・きゅう</h5>
                <p class="col card-text text-start">
                    筋肉のコリ、痛みなどの症状に対して幅広く施術ができます。<br>
                    ※マッサージ・鍼灸治療は予約制となっております。ご予約の際は、たけつ接骨院の窓口またはお電話にてご連絡ください。</p>
            </div>
            <div class="col box26 box_business">
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
                        <td scope="row">9：00～13：00</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>-</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>〇</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td scope="row">14：00～19：30</td>
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
            </div>
        </div>
    </div>
    <div class="business" id="anki">
        <img src="images/card_img3.jpg" class="img-fluid rounded-start business_img" alt="...">
        <h5 class="card-title top-left">緩和型デイサービス <br>
            あんき</h5>
        <div class="tag_area06 tag_anki">
            <ul>
                <li>デイサービス</li>
                <li>機能訓練</li>
                <li>運動不足解消</li>
                <li>ストレッチ</li>
                <li>リハビリ</li>
                <li>体操</li>
            </ul>
        </div>
        <div class="card-body card_anki1">
            <h5>機能訓練</h5>
            <p class="card-text text-start">
                運動不足が気になる、手術後などのリハビリをしたい、生活習慣を改善したいなど、いつまでも健康でいたい方におすすめです。<br>
                介護予防することが目的となり、要支援１・要支援２・事業対象者の認定を受けている方は介護保険が適用となるのでご相談ください。<br>
                ※ご相談の際は、たけつ接骨院の窓口またはお電話にてご連絡ください。</p>
            <div class="col box26 box_business">
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
                        <td>-</td>
                        <td>-</td>
                        <td>〇</td>
                        <td>-</td>
                        <td>-</td>
                        <td>〇</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row">14：00～19：30</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>※</td>
                        <td>-</td>
                    </tr>
                </table>
                <p class="pull-right">※　営業時間は17：00まで</p>
            </div>
        </div>
    </div>
@endsection
