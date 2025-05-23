<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data User</title>
    <style>
        body {
            font-family: sans-serif;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #eee;
        }
    </style>
</head>
<body>
    <h2>Data User</h2>
   <table>
<thead>
<tr>
<th>No</th>
<th>ID User</th>
<th>Username</th>
<th>Password</th>
<th>Level</th>
</tr>
</thead>
<tbody>
@foreach($data as $index => $u)
<tr>
<td>{{ $index + 1 }}</td>
<td>{{ $u['id_user'] }}</td>
<td>{{ $u['username'] }}</td>
<td>{{ $u['password'] }}</td>
<td>{{ $u['level'] }}</td>
</tr>
@endforeach
</tbody>
</table>

</body>
</html>
