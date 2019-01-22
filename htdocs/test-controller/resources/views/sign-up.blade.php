<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="{{asset('sign-up-success')}}" method="POST">
        {{csrf_field()}}
        <!-- token ma hoa data -->
        <label for="">Email address</label>
        <input name="email" type="email" placeholder="Enter your email">
        <label for="">Email address</label>
        <input name="password" type="password" placeholder="Enter your password">
        <button class="btn btn-primary" type="submit">Create Account</button>
    </form>
</body>
</html>