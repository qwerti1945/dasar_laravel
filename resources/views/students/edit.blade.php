<x-layouts.app>
  <h3>Halaman Ubah Mahasiswa</h3>
  <form action=" {{ route("student-update", $student) }} " method="post">
    @csrf
    @method("PUT")
    <div>
      <label for="nama">Nama: </label>
      <input type="text" id="nama" name="nama" value="{{ old('nama', $student->nama) }}">
      @error('nama'){{ $message }}@enderror
    </div>
    <div>
      <label for="nim">NIM: </label>
      <input type="text" id="nim" name="nim" value="{{ old('nim', $student->nim) }}">
      @error('nim'){{ $message }}@enderror
    </div>
    <div>
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $student->jenis_kelamin) }}">
      @error('jenis_kelamin'){{ $message }}@enderror
    </div>
    <button type="submit">Ubah</button>
  </form>
</x-layouts.app>