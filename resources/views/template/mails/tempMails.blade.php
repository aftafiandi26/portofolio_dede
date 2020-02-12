<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
use Illuminate\Support\Facades\DB;

$email = db::table('mail_sending')->where('token', csrf_token())->latest()->first();
 ?>
<label>{$email->email}}</label>
<br>
<p>{{$email->description}}</p>
</body>
</html>