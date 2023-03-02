<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
    }
    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }
    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
    }
    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
    }
    .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
    }
</style>
<body>
<div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
    </div>
    <h1>با موفقیت انجام شد</h1>
    @if($num_1=='auth_1')
        <p>این مرحله 1 از احراز هویت با موفقیت انجام شد<br>
            <a href="/panel/customer/authentication/personal_identity@2">
                    <button class="btn btn-block btn-success" > رفتن به مرحله 2 </button>
            </a>
        </p>
    @endif
    @if($num_1=='auth_2')
        <p>این مرحله 2 از احراز هویت با موفقیت انجام شد<br>
            <a href="/panel/customer/authentication/personal_identity@3">
                <button class="btn btn-block btn-success" > رفتن به مرحله 3 </button>
            </a>
        </p>
    @endif
    @if($num_1=='auth_3')
        <p>منتظر تایید احراز هویت خود باشید<br>
            <a href="/panel/customer/dashboard">
                <button class="btn btn-block btn-success" > رفتن به داشبورد </button>

            </a>
        </p>
    @endif
    @if($num_1=='sell')
        <p>فروش به سایت با موفقیت انجام شد<br>
            <a href="/panel/customer/dashboard">
                <button class="btn btn-block btn-success" > رفتن به داشبورد </button>

            </a>
        </p>
    @endif
    @if($num_1=='buy')
        <p>خرید از سایت با مفقیت انجام شد<br>
            <a href="/panel/customer/dashboard">
                <button class="btn btn-block btn-success" > رفتن به داشبورد </button>

            </a>
        </p>
    @endif
    @if($num_1=='confirm_user')
        <p>کاربر با موفقیت تایید شد<br>
            <a href="/panel/admin/confirm_auth">
                <button class="btn btn-block btn-success" > رفتن به صفحه تایید </button>

            </a>
        </p>
    @endif
    @if($num_1=='sell_confirm')
        <p>پول را با موفیت پرداخت شد<br>
            <a href="/panel/admin/buy">
                <button class="btn btn-block btn-success" > رفتن به صفحه خرید </button>

            </a>
        </p>
    @endif
    @if($num_1=='buy_confirm')
        <p>واریز را با موفیت پرداخت شد<br>
            <a href="/panel/admin/sell">
                <button class="btn btn-block btn-success" > رفتن به صفحه tv,a </button>

            </a>
        </p>
    @endif
</div>
</body>
</html>