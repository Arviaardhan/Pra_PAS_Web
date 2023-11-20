@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman Cameras</h1>
<div style="display: flex; align-item: center; justify-content:center;">
    <table class="table table-bordered" style="text-align: center; width: 1000px; ">
      <thead>
          <th>NO</th>
          <th>No Seri</th>
          <th>Merek</th>
          <th>Tanggal Diterbitkan</th>
          <th>Model</th>
          <th>Harga</th>
          <th>Action</th>
      </thead>
      <tbody>
            @php
                $no = 1
            @endphp
          @foreach ($cameras as $camera)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <th>{{ $camera->no_seri }}</th>
                  <td>{{ $camera->merek }}</td>
                  <td>{{ $camera->tanggal_diterbitkan }}</td>
                  <td>{{ $camera->model }}</td>
                  <td>{{ $camera->harga }}</td>
                  <td>
                    <a class="btn btn-primary" href="/camera/detail/{{ $camera->id }}">Detail</a>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection