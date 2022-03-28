@inject('mainPresenter', 'App\Presenters\MainPresenter')

<div class="wrap">
    <div class="burger burger--pages" data-id="open-nav">
        <div class="burger__content">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <span class="burger__text">menu</span>
    </div>
    <a href="{{ route('user.top') }}" class="logo">
        <img class="image" src="{{ asset("img") }}" alt="THE YOGA SHALA-Mysore Taipei" />
    </a>
</div>
