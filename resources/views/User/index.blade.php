<html>
<head>
    <title>user</title>
</head>
<body>
    <form method="post" action="/api/user">
        @csrf
        用户名：<input name="username" />
        年龄：<input name="age" />
        密码：<input name="password" />
        <button type="submt">提交</button>
    </form>
</body>
</html>