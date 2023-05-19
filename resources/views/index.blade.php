<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maritim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Maritim</h1>
    <div class="container-sm">
      <a href="/create_maritim" type="button" class="btn btn-primary">Tambah+</a>
      <div class="row">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
        @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Kapal</th>
          <th scope="col">Foto Kapal</th>
          <th scope="col">Jenis Kapal</th>
          <th scope="col">Nomor Seri</th>
          <th scope="col">Tahun Dibuat</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $row->nama_kapal }}</td>
          <td>
            <img src="{{ asset('fotokapal/'.$row->foto) }}" style="width: 40px;" alt="">
          </td>
          <td>{{ $row->jenis_kapal }}</td>
          <td>{{ $row->nomor_seri}}</td>
          <td>{{ $row->tahun_dibuat }}</td>
          <td>
            <a href="/delete/{{ $row->id }}" type="button" class="btn btn-danger delete" data-id="{{ $row->id }}">Delete</a>
            <a href="/tampil/{{ $row->id }}" type="button" class="btn btn-warning">Edit</a>
          </td>
        </tr>   
        @endforeach
      </tbody>
    </table>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  {{-- <script>
   $('.delete').click(function(){
    var maritimid = $(this).atr('data-id');
    swal({
  title: "Yakin nich?",
  text: "Kamu akan menghapus data maritim dengan id "+maritimid+" ",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location = "/delete/"+maritimid+""
    swal("Data berhasil dihapus!", {
      icon: "success",
    });
  } else {
    swal("Ok deh nggak dihapus:p");
  }
}); 
   });
   
  </script> --}}
</html>