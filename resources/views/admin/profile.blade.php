<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro</title>
</head>
<body>
   <table class="table table-hover">
       <thead>
           <th>name</th>
           <th>email</th>
           <th></th>
       </thead>
       <tbody>
           <td>{{ $LoggedUserInfo->name}}</td>
           <td>{{ $LoggedUserInfo->email}}</td>
           <td><a href="logout">logout</td>
       </tbody>
</body>
</html>