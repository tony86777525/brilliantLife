@inject('mainPresenter', 'App\Presenters\MainPresenter')

<div id="form" class="section section--form">
    <div class="wrapper">
        <div class="section__title"><span>預約鑑賞</span></div>
        <div class="section__content">
            <form class="form" method="POST" action="{{ route('api.post.store') }}" data-js="post-form">
                <div class="row">
                    <div class="row__title">姓名</div>
                    <div class="row__col">
                        <div data-js="form-error" class="form-error"></div>
                        <input name="name" id="name" type="text" class="fancyInput fancyTextarea--full" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="row__title">性別</div>
                    <div class="row__col">
                        <div data-js="form-error" class="form-error"></div>
                        <div class="selectWrapper">
                            <select name="gender" id="gender" class="fancySelect fancySelect--full">
                                <option value="" disabled selected>請選擇性別</option>
                                @foreach($mainPresenter->getPostFormGender() as $value => $gender)
                                    <option value="{{ $value }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row__title">手機</div>
                    <div class="row__col">
                        <div data-js="form-error" class="form-error"></div>
                        <input name="phone" id="phone" type="phone" class="fancyInput fancyTextarea--full" autocomplete="off">
                    </div>
                </div>
                <div class="row">
                    <div class="row__title">諮詢內容</div>
                    <div class="row__col">
                        <div data-js="form-error" class="form-error"></div>
                        <textarea name="content" id="content" rows="4" class="fancyTextarea fancyTextarea--full"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="row__title">驗證碼</div>
                    <div class="row__col">
                        <div data-js="form-error" class="form-error"></div>
                        <input name="captcha" type="text" class="fancyInput fancyInput--captcha" autocomplete="off">
                        <div class="captcha">
                            <img src="{{ captcha_src() }}" alt="">
                            <i class="refresh" data-js="refresh-captcha" data-js-url="{{ route('api.captcha.reload') }}"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row__col">
                        <ul class="formAction">
                            <li><button class="btn btn--clear" type="reset"><span class="btn__text">清除</span></button></li>
                            <li><button data-js="form-submit" class="btn btn--submit" type="submit"><span class="btn__text">確認</span></button></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
