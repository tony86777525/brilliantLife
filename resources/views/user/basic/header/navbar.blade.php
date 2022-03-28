@inject('mainPresenter', 'App\Presenters\MainPresenter')

<div class="burger on" data-id="close-nav">

    <div class="burger__content">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <span class="burger__text">Menu</span>
</div>
<ul class="menu">
    <li><a href="{{ route('user.about') }}" class="menu__link"><span>mysore taipei</span></a></li>
    <li><a href="{{ route('user.ashtanga') }}" class="menu__link"><span>what is ashtanga</span></a></li>
    <li><a href="{{ route('user.news.list') }}" class="menu__link"><span>news</span></a></li>
    <li><a href="{{ route('user.teacher') }}" class="menu__link"><span>teachers</span></a></li>
    <li><a href="{{ route('user.classes') }}" class="menu__link"><span>classes & schedule</span></a></li>
    <li><a href="{{ route('user.moondays') }}" class="menu__link"><span>moon days</span></a></li>
    <li><a href="{{ route('user.prices') }}" class="menu__link"><span>prices</span></a></li>
    <li><a href="{{ route('user.contact') }}" class="menu__link"><span>contact us</span></a></li>
</ul>
<ul class="language">
    <li><a href="{{ url()->current() }}?lang=en">English</a></li>
    <li><a href="{{ url()->current() }}?lang=zh-TW">繁體中文</a></li>
</ul>
