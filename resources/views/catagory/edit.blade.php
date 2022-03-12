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

    <h1 class="w-100 text-center">edit</h1>

    <form action="{{route('update',$data->id)}}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{$data->name}}"
                placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="number" id="exampleFormControlInput2"
                value="{{$data->number}}" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="description" id="exampleFormControlInput3"
                value="{{$data->description}}" placeholder="name@example.com">
        </div>
        <button type="submit" class="btn btn-primary">Cập nhập</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>