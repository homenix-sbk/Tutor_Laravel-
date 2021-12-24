<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>家庭教師マッチング</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>
    <body>
        <div id="wrapper">
        <header>
            @include('components.header')
        </header>
            <div class="main column">
                <div class="main__bg-left column__item"></div>
                <div class="main__bg-right column__item"></div>
                <h2><code>＼</code>個人契約の<code>／</code><br><span>家庭教師マッチングサイト</span></h2>
                <div class="price">紹介料<span>14,800円</span>のみ</div>

                <p>入会金、中間マージン、教材販売などは一切ありません。<br>
                   個人契約となりますので、時給と交通費は先生に直接お支払い下さい。</p>
            </div>
            <div class="container">
                <div class="flex1">
                    <div class="img-box">
                        <img src="./images/index_01.jpg" alt="" width="640" height="427">
                    </div>
                    <div class="text-box">
                        <h3 class="align-center">中学受験、高校入試に<span>個人指導で目標へゴ〜ル！</span></h3>
                        <p>いい先生と個人契約できます！<br>ぴったりの先生がきっと見つかります！</P>
                        <a class="btn-green" href="#">登録教師の情報を見る</a>
                    </div>
                </div>
                <div class="flex2">
                    <div class="img-box">
                        <img src="./images/index_02.jpg" alt="" width="640" height="427">
                    </div>
                    <div class="text-box">
                        <h3 class="align-center">紹介料は面接して決定後の後払い</h3>
                        <p>何人面接しても、不採用の場合は費用はかかりません。<br>
                            気になる先生が見つかりましたら、まずは体験授業から！<br>
                            その後で先生とご家庭で個人契約できます。</P>
                        <a class="btn-green" href="#">家庭教師を申し込む</a>
                    </div>
                </div>
                <div class="info">
                        <h3 class="align-center">サポートもしているので安心です。</h3>
                        <p>ご要望やご質問がございましたら、お問い合わせフォームよりお気軽にお問い合わせ下さい！</P>
                </div>
            </div>

            @include('components.footer')
        </div><!-- wrapper_End -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/reload.js') }}"></script>
        <script src="{{ asset('js/openNav.js') }}"></script>
        <script src="{{ asset('js/activeNav.js') }}"></script>
        <script src="{{ asset('js/gotoTop.js') }}"></script>
        <script src="{{ asset('js/scroll.js') }}"></script>
    </body>
</html>
