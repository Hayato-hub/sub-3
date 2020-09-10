<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>テスト</title>
        <link href="{{ secure_asset('css/omiai.css') }}" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <!--LP名-->
            <h3><span class="header-span">LEMON.</span></h3>
        </header>
        
        <div class="body">
            <div class="title">
                <!--タイトル-->
                <h3>【画像あり】「流石にお腹いっぱいやわ。」37歳おっさんが『真剣に』婚活アプリを3ヶ月使った結果...</h3>
                <!--日付-->
                <p>2020-09-11 18:37</p>
                <!--画像-->
                <img src="{{ asset('image/lp_omi_1.jpg') }}"></img>
            </div>
            
            <div class="content">
                <h5>時は遡り。およそ3ヶ月前...<br>高校時代の友達、同じく独身ブス面から~</h5>
                <div class="line-bc"><!--①LINE会話全体を囲う-->
                
                    <!--②左コメント始-->
                    <div class="balloon6">
                        <div class="faceicon">
                            <!--アイコン画像-->
                            <!--<img src="{{ asset('image/line_friend.png') }}"></img>-->
                        </div>
                        <div class="chatting">
                            <div class="says">
                                <p>左ふきだし文</p>
                            </div>
                        </div>
                    </div>
                    <!--②/左コメント終-->
                
                    <!--③右コメント始-->
                    <div class="mycomment">
                        <p>右ふきだし文</p>
                    </div>
                  <!--/③右コメント終-->
                  
                </div><!--/①LINE会話終了-->
            </div>
        </div>
        
        <footer>
            
        </footer>
    </body>
</html>