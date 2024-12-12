<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modification </h1>
    <form action="/UpdateConfirme" method="POST" enctype="multipart/form-data">
        @csrf
        <img src="{{ $image[0]->image }}" style="width: 100px; height: 100px;">
        <input type="file" name="image" class="custom-file-input" id="customFile">
        <input type="hidden" name="id" value="{{$image[0]->id}}">
        <input type="submit" >
    </form>
</body>
</html>