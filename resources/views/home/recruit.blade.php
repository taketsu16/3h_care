@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', '採用情報 | スリーエイチケア')
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home_top1.jpg" class="img-fluid" alt="...">
        <div class="card-img-overlay blur">
            <h5 class="card-title">{{ __('recruit') }}</h5>
        </div>
    </div>
</div>
@section('content')
    <h2>{{ __('recruit') }}</h2>
    <div class="recruit">
        <h5><i class="fa fa-arrow-circle-right fa-1x orange" aria-hidden="true"></i>　地域の健康に貢献できる</h5>
        <p>当院には、スポーツをしている子供や若者から、慢性的な痛みに悩む高齢者まで、幅広い世代の患者さんが来院します。 <br>
            日常生活や活動をサポートし、痛みや不調からの回復を手助けすることで、地域全体の健康増進に貢献できます。 <br>
            患者さん一人ひとりに寄り添い、身体の状態に合わせた最適な施術を提供することで、感謝や信頼の言葉をいただくことも多いです。</p>
        <h5><i class="fa fa-arrow-circle-right fa-1x orange" aria-hidden="true"></i>　国家資格保持者による専門的な施術</h5>
        <p>柔道整復師などの国家資格を持つプロフェッショナルが施術を担当します。<br>
            そのため、専門知識や技術を活かして、患者さんの身体に直接的なアプローチを行い誇りをもってお仕事ができます。 <br>
            スポーツ障害、交通事故後のリハビリ、日常生活における慢性痛など、様々な症状に対応する中で、技術を磨き続ける機会が得られます。</p>
        <h5><i class="fa fa-arrow-circle-right fa-1x orange" aria-hidden="true"></i>　柔軟な働き方</h5>
        <p>送迎や受付などパート勤務も可能なため、家庭やプライベートと両立しやすい働き方が可能です。<br>
            患者さんの送迎に携わることで、患者さんとより深いコミュニケーションが取れることもやりがいにつながります。</p>
    </div>
    <h2 id="employee">正社員</h2>
    <div class="employee">
        <table class="table table-striped">
            <tr>
                <th>募集職種</th>
                <td>柔道整復師</td>
            </tr>
            <tr>
                <th>応募資格/条件</th>
                <td>柔道整復師　資格保持者/取得予定者</td>
            </tr>
            <tr>
                <th>仕事内容</th>
                <td>整骨院業務全般 <br>
                    外傷治療：エコー評価、検査、整復、ギプス固定 <br>
                    運動機能障害：リハビリ、運動療法指導、インソール作成 <br>
                    自費治療：トリガーポイント手技療法、背骨骨盤矯正、筋膜リリース、姿勢矯正など</td>
            </tr>
            <tr>
                <th>勤務時間</th>
                <td>【月曜～金曜】<br>
                    9:00～12：00/15：00〜20：00 <br>
                    【土曜・祝日】<br>
                    9:00～14:00
                </td>
            </tr>
            <tr>
                <th>給与</th>
                <td>正社員
                    新卒24万円～</td>
            </tr>
        </table>
        <table class="table table-striped">
            <tr>
                <th>募集職種</th>
                <td>あん摩マッサージ指圧師<br>
                    （パートスタッフも募集中）
                </td>
            </tr>
            <tr>
                <th>応募資格/条件</th>
                <td>あん摩マッサージ指圧師免許の保有者（または取得見込みの方）<br>
                    年齢不問、学歴不問</td>
            </tr>
            <tr>
                <th>仕事内容</th>
                <td>主に介護を必要とされている方（高齢者や障がい者）のご自宅、<br>
                    あるいはご入居の施設を訪問し、身体機能や精神機能の維持、向上などのQOL向上を目的として、<br>
                    健康保険制度を利用した訪問マッサージを行います。</td>
            </tr>
            <tr>
                <th>勤務時間</th>
                <td>【月曜～金曜】<br>
                    9:00～12：00/15：00〜20：00 <br>
                    【土曜・祝日】<br>
                    9:00～14:00
                </td>
            </tr>
            <tr>
                <th>給与</th>
                <td>正社員
                    新卒24万円～</td>
            </tr>
        </table>
    </div>
    <h2 id="part-time">パート・アルバイト</h2>
    <div class="part-time">
        <table class="table table-striped">
            <tr>
                <th>募集職種</th>
                <td>受付</td>
            </tr>
            <tr>
                <th>応募資格/条件</th>
                <td>柔道整復師　資格保持者/取得予定者</td>
            </tr>
            <tr>
                <th>仕事内容</th>
                <td>整骨院業務全般 <br>
                    外傷治療：エコー評価、検査、整復、ギプス固定 <br>
                    運動機能障害：リハビリ、運動療法指導、インソール作成 <br>
                    自費治療：トリガーポイント手技療法、背骨骨盤矯正、筋膜リリース、姿勢矯正など</td>
            </tr>
            <tr>
                <th>勤務時間</th>
                <td>【月曜～金曜】<br>
                    9:00～12：00/15：00〜20：00 <br>
                    【土曜・祝日】<br>
                    9:00～14:00
                </td>
            </tr>
            <tr>
                <th>給与</th>
                <td>正社員
                    新卒24万円～</td>
            </tr>
        </table>
        <table class="table table-striped">
            <tr>
                <th>募集職種</th>
                <td>送迎</td>
            </tr>
            <tr>
                <th>応募資格/条件</th>
                <td>あん摩マッサージ指圧師免許の保有者（または取得見込みの方）<br>
                    年齢不問、学歴不問</td>
            </tr>
            <tr>
                <th>仕事内容</th>
                <td>主に介護を必要とされている方（高齢者や障がい者）のご自宅、<br>
                    あるいはご入居の施設を訪問し、身体機能や精神機能の維持、向上などのQOL向上を目的として、<br>
                    健康保険制度を利用した訪問マッサージを行います。</td>
            </tr>
            <tr>
                <th>勤務時間</th>
                <td>【月曜～金曜】<br>
                    9:00～12：00/15：00〜20：00 <br>
                    【土曜・祝日】<br>
                    9:00～14:00
                </td>
            </tr>
            <tr>
                <th>給与</th>
                <td>正社員
                    新卒24万円～</td>
            </tr>
        </table>
    </div>
@endsection
