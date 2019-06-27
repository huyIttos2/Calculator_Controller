<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('calculate')}}" method="post">
    @csrf
    <input type="number" name="num1" />
    <input type="number" name="num2" />
    <select name="calculate">
        <option value="+">ADD</option>
        <option value="-">SUB</option>
        <option value="*">MULTI</option>
        <option value="/">DIV</option>
    </select>
    <button type="submit" name="submit" value="submit"/>Submit
</form>

</body>
</html>
