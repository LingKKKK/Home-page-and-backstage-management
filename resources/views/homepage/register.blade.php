<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">
    <title>Robocom-账号注册</title>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/style-responsive.css" rel="stylesheet">
</head>

<body class="login-body">
    <div class="container">
        <form class="form-signin" id="form" enctype="multipart/form-data" method="post" action="/doRegister" novalidate>
            <div class="form-signin-heading text-center">
                <img src="/assets/img/login-logo.png" alt=""/>
            </div>
            <div class="login-wrap">
                <p>账号信息</p>
                <input type="text" autofocus="" placeholder="姓名" class="form-control">
                <input type="text" autofocus="" placeholder="手机号" class="form-control">
                <input type="text" autofocus="" placeholder="电子邮箱" class="form-control">
                <input type="password" placeholder="登录密码" class="form-control">
                <input type="password" placeholder="再次登录密码" class="form-control">
                <button type="submit" class="btn btn-lg btn-login btn-block">
                    <i class="fa fa-check"></i>
                </button>

                <div class="registration">
                    Already Registered.
                    <a href="/login" class="">
                        Login
                    </a>
                </div>
            </div>
        </form>
    </div>
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/modernizr.min.js"></script>
</body>
</html>
<!-- <div class="radios">
    <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
        <input type="radio" checked="" value="1" id="radio-01" name="sample-radio"> Male
    </label>
    <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
        <input type="radio" value="1" id="radio-02" name="sample-radio"> Female
    </label>
</div> -->
