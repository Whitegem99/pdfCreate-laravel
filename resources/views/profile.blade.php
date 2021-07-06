
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .page-break {
      page-break-after: always;
    }
    .profile-page {
      padding-top: 50px
    }
    .styled-table {
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table th,
    .styled-table td {
      padding: 12px 15px;
    }
    .styled-table tbody tr {
      border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
      background-color: #f3f3f3;
    }
  </style>
</head>
<body>
  <div class="profile-page">
    <img src="data:image/png;base64,{{ $image }}">
    <h1>{{$profile->name}}</h1>
    <p>{{$profile->sex}}, {{$profile->age}} years old</p>
    <p><b>OFFICE NAME</b></p>
    <P>{{$profile->office_name}}</P>
    <p><b>ADDRESS</b></p>
    <P>{{$profile->address}}</P>
    <p><b>EMAIL</b></p>
    <P>{{$profile->email}}</P>
    <p><b>PHONE</b></p>
    <P>{{$profile->phone}}</P>
  </div>
  <div class="page-break"></div>
  <div class="diagnoses">
    <table class="styled-table">
      <tr>
          <th>VISIT DATE</th>
          <th>DIAGNOSIS</th>
          <th>REASON</th>
          <th>DDX</th>
      </tr>
      @foreach ($diagnoses as $diagnose)
      <tr>
        <td>{{ $diagnose->visit_data }}</td>
        <td>{{ $diagnose->diagnosis }}</td>
        <td>{{ $diagnose->skeletal }}</td>
        <td>{{ $diagnose->dental }}</td>
      </tr>
      @endforeach
  </table>
  </div>
</body>
</html>