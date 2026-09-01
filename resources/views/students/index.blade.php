<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pendikom</title>
</head>
<body>
  <table>
    <tr>
      <td>Nama</td>
      <td>NIM</td>
      <td>Jenis Kelamin</td>
    </tr>
    @foreach ($students as $student)
        <tr>
          <td> {{$student->nama}} </td>
          <td> {{$student->nim}} </td>
          <td> {{$student->jenis_kelamin}} </td>
        </tr>
    @endforeach
    
  </table>
</body>
</html>