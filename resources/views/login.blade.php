<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <form action="postlogin" method="post">
            {{ csrf_field() }}
                <div class="text-center">
                    <h1 class="title "> Login </h1>
                </div>
                <div class="w-25 m-0 m-auto">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tài Khoản</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Tài Khoản">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Mật Khẩu</label>
                        <input type="password" class="form-control" id="exampleFormControlInput2" name="password" placeholder="Mật Khẩu">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                    </div>
                    <a href="{{route('registration')}}">Đăng ký khoản</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>