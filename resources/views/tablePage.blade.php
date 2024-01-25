<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body> 
<h2>List of Users</h2>
<!-- table to display active users -->
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Birthday</th>
    <th>Created At</th>
    <th>Action</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>  
    <td>{{$user->name}}</td>    
    <td>{{$user->email}}</td>   
    <td>{{$user->gender}}</td>
    <!-- display birthday in format (dd/mm/yyyy) -->
    <td>{{date('d/m/Y', strtotime($user->birthday));}}</td>
    <!-- display created at in format (dd/mm/yyyy) -->
    <td>{{date('d/m/Y', strtotime($user->created_at));}}</td> 
    <td></td>
  </tr>
  @endforeach

</table>

</body>
</html>

