@extends('admin.layouts.master')

@section('admin.contents')
<div class="content-wrapper">
    <!-- コンテンツヘッダ -->
    <section class="content-header">
        <h1>Dashboard</h1>
        <ol class="breadcrumb">
            <li>Dashboard</li>
        </ol>
    </section>

    <!-- メインコンテンツ -->
    <section class="content">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <!-- Apply any bg-* class to to the icon to color it -->
              <span class="info-box-icon bg-blue"><i class="fa fa-building-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">顧客登録数(クライアント)</span>
                <span class="info-box-number">150社</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <!-- Apply any bg-* class to to the info-box to color it -->
            <div class="info-box bg-purple">
              <span class="info-box-icon"><i class="fa fa-bicycle" aria-hidden="true"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">登録ジム数</span>
                <span class="info-box-number">3,000店舗</span>
                <!-- The progress section is optional -->
                <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <!-- Apply any bg-* class to to the icon to color it -->
              <span class="info-box-icon bg-orange"><i class="fa fa-group"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">登録トレーナー数</span>
                <span class="info-box-number">523人</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <!-- Apply any bg-* class to to the icon to color it -->
              <span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">利用者登録数</span>
                <span class="info-box-number">5,000人</span>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>

<!-- コンテンツ1 -->
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">利用ジム利用回数</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>名前</th>
                                    <th>回数</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>AAA XXX店</td>
                                    <td>323</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BBB XXX店</td>
                                    <td>255</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CCC XXX店</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>DDD XXX店</td>
                                    <td>160</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>EEE XXX店</td>
                                    <td>155</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">利用者利用頻度</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>名前</th>
                                    <th>回数</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XXX XXX</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>XXX XXX</td>
                                    <td>255</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>XXX XXX</td>
                                    <td>200</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>XXX XXX</td>
                                    <td>160</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>XXX XXX</td>
                                    <td>155</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">顧客/利用者増加傾向</h3>
                </div>
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div style="height:300px;">
                            <canvas id="graph-1"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div style ="height: 300px;">
                            <canvas id="graph-2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</div>
@stop