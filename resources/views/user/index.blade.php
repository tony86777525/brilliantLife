@inject('mainPresenter', 'App\Presenters\MainPresenter')

@extends('user.basic.main.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/common/slick-1.8.1/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common/slick-1.8.1/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common/WOW-master/css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/user/index.css') }}">
@endsection

@section('js')
    <script src="{{ asset('assets/common/vendor/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/common/slick-1.8.1/slick.min.js') }}"></script>
    <script src="{{ asset('assets/common/WOW-master/dist/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/user/index.js') }}"></script>
@endsection

@section('main')
    <div class="container">
        <section id="intro" class="section section--intro">
            <div class="wrapper">
                <div class="wrap">
                    <div class="anime anime--top wow fadeIn" data-wow-delay="1.2s">
                        <div class="anime__figure clearfix wow shakeY" data-wow-duration="15s" data-wow-iteration="infinite">
                            <img class="" src="{{ asset("assets/img/user/figure.gif") }}" alt="">
                        </div>
                    </div>
                    <div class="mainTxt">
                        <div class="wow fadeIn" data-wow-delay="1.2s">
                            <div class="slogan slogan--top wow pulse" data-wow-delay="1.5s" data-wow-iteration="infinite"><span>捷運綠線G9站約500米</span></div>
                        </div>
                        <h1 class="logo wow fadeInDown"><img class="image" src="{{ asset("assets/img/user/img-logo.png") }}" alt="定泰翫花同 BRILLIANT LIFE"></h1>
                        <div class="txt">
                            <h2 class="txt__des wow fadeInDown" data-wow-delay="0.3s"><span>市心精品捷運宅</span></h2>
                            <div class="txt__feature wow fadeInDown" data-wow-delay="0.6s">邊間、雙面採光 17-24坪</div>
                            <div class="txt__tel wow fadeInDown" data-wow-delay="0.9s">332-1188</div>
                        </div>
                        <div class="wow fadeIn" data-wow-delay="1.2s">
                            <div class="slogan slogan--bottom wow pulse" data-wow-delay="1.5s" data-wow-iteration="infinite"><span>捷運綠線G9站約500米</span></div>
                        </div>
                    </div>
                    <div class="anime anime--bottom wow fadeIn" data-wow-delay="1.2s">
                        <div class="anime__figure clearfix wow shakeY" data-wow-duration="15s">
                            <img src="{{ asset("assets/img/user/figure.gif") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 桃園市心 start -->
        <div id="content-01" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>桃園市心</span></h3>
                        <h4 class="h4"><span>四大特區 潛力同享</span></h4>
                        <p class="article">【定泰翫花同】坐享市府力行商圈豐富機能，周邊環繞站前商圈、中路重劃區、藝文特區及小檜溪重劃區，當各區增值潛力蓬勃發展，位居核心的【定泰翫花同】同步共享未來碩果。</p>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel" style="visibility: hidden;">
                        <div class="slides" data-slick-slider="media">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                            <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 桃園市心 end -->
        <!-- 捷運名宅 start -->
        <div id="content-02" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>捷運名宅</span></h3>
                        <p class="article">對位台北捷運興建、完工、通車等波段式經濟成效，桃園捷運綠線能量倍受期待。【定泰翫花同】鄰近G09站，2站即達三鐵共構桃園站，燙金實力雄厚。結合國道二號南桃園交流道、力行路，慈文路等核心要道，強化行動效率。</p>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel" style="visibility: hidden;">
                        <div class="slides" data-slick-slider="media">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 捷運名宅 end -->
        <!-- 樂活商圈 start -->
        <div id="content-03" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>樂活商圈</span></h3>
                        <h4 class="h4">
                            <span>力行商圈、觀光夜市</span>
                            <span>豐富生活機能</span>
                        </h4>
                        <p class="article">散步即達力行路、永安路商圈，鄰近中正路商圈、慈文路商圈，貼近桃園觀光夜市、全聯，琳瑯滿目、多元化選擇，滿足全家人生活需求。</p>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel" style="visibility: hidden;">
                        <div class="slides" data-slick-slider="media">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 樂活商圈 end -->
        <!-- 綠意書香 start -->
        <div id="content-04" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>綠意書香</span></h3>
                        <h4 class="h4">
                            <span>近公園、鄰校園</span>
                            <span>靜謐優質天地</span>
                        </h4>
                        <p class="article">輕快步行貼近永康公園，串聯活動中心與球場及YouBike，享有多變化的休閒生活。結合溫州公園、向陽公園及風禾公園，擁抱綠意舒壓環境。散步親近何嘉仁幼兒園及桃園名校慈文國中，坐享書香環抱的優質生活圈。</p>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel" style="visibility: hidden;">
                        <div class="slides" data-slick-slider="media">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 綠意書香 end -->
        <!-- 豪宅團隊 start -->
        <div id="content-05" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>豪宅團隊</span></h3>
                        <h4 class="h4">
                            <span>定泰建設聯手大師團隊</span>
                            <span>勾勒優雅美學</span>
                        </h4>
                        <p class="article">定泰建築林夏森董事長擁有20餘年建設營造雄厚經驗，從「居住者角度」出發，禮聘豪宅大師，為消費者打造新貴精品名宅。</p>
                        <ul class="features">
                            <li><h5 class="h5">留美建築大師</h5><span>呂文程 建築師</span></li>
                            <li><h5 class="h5">藝術景觀大師</h5><span>綠點設計 施仁人 執行總監</span></li>
                            <li><h5 class="h5">耐震結構權威</h5><span>豐立工程顧問 楊永豐 資深技師</span></li>
                            <li><h5 class="h5">金獎空間名師</h5><span>綵韻室內設計 吳金鳳 藝術總監</span></li>
                        </ul>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel">
                        <div class="slides">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 豪宅團隊 end -->
        <!-- 專利精工 start -->
        <div id="content-06" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>專利精工</span></h3>
                        <h4 class="h4 vertical">
                            <span>精</span>
                            <span>工</span>
                            <span>設</span>
                            <span>備</span>
                            <span>&nbsp;</span>
                            <span>專</span>
                            <span>利</span>
                            <span>工</span>
                            <span>法</span>
                        </h4>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel">
                        <div class="slides">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 專利精工 end -->
        <!-- 超值坪效 start -->
         <div id="content-07" class="section section--content">
            <div class="wrapper flexGroup">
                <div class="flexGroup__item flexGroup__item--text">
                    <div class="mainText wow fadeInLeft">
                        <h3 class="h3"><span>超值坪效</span></h3>
                        <h4 class="h4">
                            <span>自然建築</span>
                            <span>邊間雙面採光17-24坪</span>
                        </h4>
                        <p class="article">以自然、舒適為核心，【定泰翫花同】規劃邊間、雙面採光，運用自然的光風，帶來通暢氣流。結合17坪1+1房－24坪2+1房，提升坪效機能，為消費者帶來貼近需求的輕鬆置產方案。</p>
                    </div>
                </div>
                <div class="flexGroup__item flexGroup__item--media">
                    <div class="carousel" style="visibility: hidden;">
                        <div class="slides" data-slick-slider="media">
                            @php $section = $sections->shift() ?? collect() @endphp
                            @foreach($section->sectionSliders as $sectionSlider)
                                <div class="slides__item"><img class="image" src="{{ $mainPresenter->getSectionSliderImage($sectionSlider->image) }}" alt="{{$sectionSlider->alt }}"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 超值坪效 end -->
    </div>
@endsection
