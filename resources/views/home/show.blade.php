@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', '当院について | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('show') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('show') }}</h2>
    <div class="features">
        <div class="f_item">
            <p class="f_title">Health <small>（健康）</small></p>
            <p>少子高齢化社会やストレス社会と言われている現代を生きる現代人は、
                以前に比べてQuality of Life(生活の質)が低下していると言われています。
                弊社は接骨や鍼灸マッサージ、訪問マッサージ、体操や運動を行うデイサービスなど多様な治療法とケアを通じて、
                皆様の健康を第一に考え様々な取り組みを行いながら、地域の方々をサポートしています。</p>
        </div>
        <div class="f_item">
            <p class="f_title">Hand <small>（確かな技術）</small></p>
            <p>医療の原点はケガの部位や痛みがある部位に手を当てる「手当て」から始まっていると言われています。
                そのような「手当て」を我々は実際に患者様に触れて、病態を把握し、適切な施術をご提案することを心がけております。
                施術を担当するスタッフは国家資格を取得しており専門的な技術と経験を持ち、
                接骨、鍼灸、マッサージ、体操や運動を行う機能訓練などを確かな技術をもって一人ひとりに最適な治療を提供いたします。</p>
        </div>
        <div class="f_item">
            <p class="f_title">Heart <small>（心を込めて）</small></p>
            <p>人と人とのコミュニケーションを大切にし、分け隔たりなく皆様の健康を心のこもった治療やケアをしております。
                治療院業務や訪問業務、緩和型デイサービス業務、すべての業務において利用者の方々に寄り添い、温かい心で対応し、
                アットホームな雰囲気で親しみやすさを大切にしております。開業から30年以上経過した今でもその心は変わることなく、
                これから変わることもありません。</p>
        </div>
    </div>

    <div class="card my-5 director">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title director_under">株式会社<br>
                        スリーエイチケア</h5>
                    <p class="card-text">現代社会は目まぐるしく変化を続けています。
                        その中で弊社では「不易流行」という言葉があるように、開業から培ってきた伝統的な医療の中に、
                        最新の理論や技術を柔軟に取り入れて変化を重ねてまいりました。お子様からご高齢者の患者様に対し、
                        ひたむきに誠実に向き合い、日々努力を積み重ねて皆様が健康で明るい生活ができるようなサポートをスタッフ一同取り組んでまいります。</p>
                    <p class="text-end"><span class="orange">代表取締役</span>　竹津健亮</p>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/director.jpg" class="img-fluid director m-auto" alt="...">
            </div>
        </div>
    </div>

    <h2>3つの事業内容</h2>

    <div class="card taketsu_card business" id="taketsu">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="card-body taketsu_card">
                    <h4 class="card-title taketsu_under py-3">たけつ接骨院</h4>
                    <table class="table py-4 text-center taketsu_card">
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
                            <td scope="row">09：00～12：00</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="row">15：00～19：00</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>※</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p class="pull-right">最終受付は診療時間30分前まで</p>
                    <br>
                    <br>
                    <p class="pull-right">※ 診療時間は17：00まで</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="card-img" src="images/card_img1.jpg" alt="Card image">
            </div>
            <div class="taketsu_detail">
                <p class="card-text">ケガ、慢性疾患（肩こり・腰痛・膝痛など）、スポーツ障害など幅広く施術を行っております。<br>
                    国家資格者（柔道整復師、鍼灸師、あん摩マッサージ指圧師）が施術にあたります。<br>
                    お身体の痛み・ケガなどがございましたらお気軽にご相談ください。<br>
                    健康保険・交通事故治療・労災保険など各種保険を取り扱っております。</p>
            </div>
        </div>
    </div>

    <div class="card threeh_card business" id="threeh">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="card-body threeh_card">
                    <h4 class="card-title threeh_under py-3">スリーエイチケア</h4>
                    <table class="table py-4 text-center threeh_card">
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
                            <td scope="row">09：00～12：00</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="row">15：00～19：00</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>-</td>
                            <td>〇</td>
                            <td>〇</td>
                            <td>※</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <p class="pull-right">※　診療時間は17：00まで</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="card-img" src="images/card_img2.jpg" alt="Card image">
            </div>
            <div class="threeh_detail">
                <h5>マッサージ</h5>
                <p class="card-text">
                    マッサージは筋肉の緊張を緩和、循環の改善、リラクゼーション効果などがございます。<br>
                    通院が難しい方は国家資格者（あん摩マッサージ指圧師）がご自宅へお伺いし施術することも可能です。<br>
                    ※女性施術者も在籍</p>
                <h5>はり・きゅう</h5>
                <p class="card-text">
                    はり治療では、とても細く使い捨ての鍼（ディスポーザブル鍼）を使用するためほとんど痛みなく衛生的な施術を行っております。<br>
                    きゅう治療では、やけどを起こしずらい方法で施術を行っておりますのでご安心ください。<br>
                    はり・きゅう治療はコリから痛み、だるさなど身体の様々な不調に対し幅広く施術することができます。<br>
                    ※マッサージ・鍼灸治療では予約制となっております。ご予約の際は、たけつ接骨院の窓口またはお電話にてご連絡ください。
                </p>
            </div>
        </div>
    </div>

    <div class="card anki_card business" id="anki">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="card-body anki_card">
                    <h4 class="card-title anki_under py-3">緩和型デイサービス<br>あんき</h4>
                    <table class="table py-4 text-center anki_card">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">水</th>
                            <th scope="col">土</th>
                        </tr>
                        <tr>
                            <td scope="row">09：00～11：00</td>
                            <td>〇</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td scope="row">13：00～15：00</td>
                            <td>〇</td>
                            <td>〇</td>
                        </tr>
                        <tr>
                            <td scope="row">15：00～17：00</td>
                            <td>〇</td>
                            <td>-</td>
                        </tr>
                    </table>
                    <div class="anki_detail">
                        <p class="card-text">
                            運動不足が気になる、手術後などのリハビリをしたい、生活習慣を改善したいなど、いつまでも健康でいたい方におすすめです。<br>
                            実費でのご利用も可能ですが、要支援１・要支援２・事業対象者の認定を受けている方は介護保険が適用となります。<br>
                            ご相談の際は、たけつ接骨院の窓口またはお電話にて「デイサービスの件で…」とご連絡ください。
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <img class="img-fluid" src="images/nagare.jpg" alt="Card image">
            </div>
        </div>
    </div>

@endsection
