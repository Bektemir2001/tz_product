<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification</title>
</head>
<body>
    <h3>Создан новый продукт</h3>

    <h5>{{'Артикул  '.$product->article}}</h5>
    <h5>{{'Название  '.$product->name}}</h5>
    <h5>{{'Статус  '.$product->status}}</h5>
    <h5>{{'Атрибуты'}}</h5>
    @foreach($product->data as $key => $attribute)
        <div>{{$key.": ".$attribute}}</div>
    @endforeach
</body>
</html>
