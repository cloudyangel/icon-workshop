@extends('master')
@section('container')
    <div class="container container-article">
        <div class="row">
            <div class="col-sm-9">
                <h1>使用教程 - {{ $platform }}</h1>
                <p>程序猿正在拼(wo)命(niu)写教程，请稍候...</p>
            </div>

            <div class="col-sm-3">
                @if(!App::environment('local'))
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:300px;height:600px"
                         data-ad-client="ca-pub-5072970286349933"
                         data-ad-slot="5196596422"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                @endif
            </div>
        </div>
        <div style="margin-top: 40px">
            <!-- UY BEGIN -->
            <div id="uyan_frame"></div>
            <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1724540"></script>
            <!-- UY END -->
        </div>
    </div>

    <script>
        window.state = 'guide';
    </script>
@endsection