<x-layouts.app>
<table border="1">
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jenis Kelamin</th>
      <th>Aksi</th>
    </tr>
    @foreach ($students as $student)
        <tr>
          <td> {{$student->nama}} </td>
          <td> {{$student->nim}} </td>
          <td> {{$student->jenis_kelamin}} </td>
          <td>
            <a href="#">Detail | </a>
            <a href="#">Edit | </a>
            <a href="#">Hapus</a>
          </td>
        </tr>
    @endforeach
  </table>
</x-layouts.app>


