<x-layouts.app>
<table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jenis Kelamin</th>
      <th>Aksi</th>
    </tr>
    @foreach ($students as $student)
        <tr>
          <td> {{ $loop->iteration }} </td>
          <td> {{$student->nama}} </td>
          <td> {{$student->nim}} </td>
          <td> {{$student->jenis_kelamin}} </td>
          <td>
            <a href=" {{ route("student-show", $student->id) }} ">Detail | </a>
            <a href=" {{ route("student-edit", $student) }} ">Edit | </a>
            <form action="{{ route("student-destroy", $student) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" onclick="return confirm('yakin hapus {{ $student->nama }}?')">Hapus</button>
            </form>
          </td>
        </tr>
    @endforeach
  </table>
</x-layouts.app>


