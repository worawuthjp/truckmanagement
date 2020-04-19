<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @include('partials.header')
</head>
<body class="container ">
<style>
    body {
        background-color: #003879;
    }
</style>
<div class="content col-12" style="height: 100vh;">
    <section class="center-page">
        <div class="card center col-5 ml-auto mr-auto">
            <div class="card-body">
                <div class="header">
                    <label style="font-size: 20px">Truck Management Login</label>
                </div>
                <div class="dropdown-divider pb-3"></div>
                <div class="container">
                    <div class="row text-center ml-auto mr-auto">
                        <div class="col-3 padding-5px text-right">
                            <label style="font-size: 18px">username </label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="col-11 input-group input-outline">
                        </div>
                    </div>
                    <div class="row pt-2 ml-auto mr-auto">
                        <div class="col-3 padding-5px text-right">
                            <label style="font-size: 18px">password </label>
                        </div>
                        <div class="col-9">
                            <input type="password" class="col-11 input-group input-outline">
                        </div>
                    </div>
                    <div class="row pt-2 ml-auto mr-auto">
                        <div class="input-group custom-checkbox ml-5 pt-1 d-block">
                            <input type="checkbox" class="mt-1" style="font-size: 16px">
                            <label class="font-weight-light pl-2" style="font-size: 16px">Remember me</label><br>
                            <a href="#" class="text-underline">Register</a>
                        </div>
                    </div>
                    <div class="row pt-3 ml-auto mr-auto">
                        <div class="col-1"></div>
                        <div class="col-5 text-right">
                           <button class="button btn-primary col-12">เข้าสู่ระบบ</button>
                        </div>
                        <div class="col-5">
                            <button class="button btn-warning col-12">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@include('partials.footer')

</body>
</html>
