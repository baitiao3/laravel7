<html>
<head>
    <title>form</title>
</head>
<body>
    <form action="/task/add" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}"  />
        <input type="hidden" name="_method" value="PUT"  />
        <input name="age" />
        <button type="submit">提交</button>
    </form>
    <br/>

</body>
</html>