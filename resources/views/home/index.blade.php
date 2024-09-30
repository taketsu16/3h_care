@extends('layouts.app')

<!-- 1行で指定することも可能 -->
@section('title', '【公式】スリーエイチケア')

@section('content')
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col px-5 mt-5 border-end">
                <h5 class="text-center py-4">お知らせ</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">2024 9.30　臨時休業11月16日</li>
                    <li class="list-group-item">2024 9.30　鍼のご予約承ります</li>
                    <li class="list-group-item">2024 9.30　正社員、パート募集中</li>
                </ul>
            </div>
            <div class="col px-5 mt-5 ">
                <h5 class="text-center py-4">営業日・休業日</h5>
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
            </div>
        </div>

        <h2>事業内容</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">たけつ接骨院</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">スリーエイチ</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">緩和型デイサービス あんき</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
