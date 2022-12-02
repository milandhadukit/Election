{{-- <!DOCTYPE html>
<html>
<head>
    <title>Welcome </title>
</head>

<body>
<h2>Welcome to the site {{$user['name']}}</h2>
<br/>
Your registered email-id is {{$user['email']}}
</body>

</html> --}}



<!DOCTYPE html>
<html>
<head>
 <title>Mail</title>
</head>
<body>
    <h2>~~Welcome  Election Process~~ </h2>
    {!! '<h3>Name: '.$name.'</h3>' !!}
{!! '<h3>Username: '.$username.'</h3>' !!}
{!! '<h3>Your election id is : '.$genrate_ids.'</h3>'!!}
{!! '<h3>email is: '.$useremail.'</h3>' !!}

{!! '<h4>Your Password is : '.$password.'</h4>'!!}


<h6> link is :127.0.0.1.8000/login </h6>
<h2><p>Thank you</p></h2>

</body>
</html>


