@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman Laptops</h1>
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
          @foreach ($laptops as $laptop)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <th>{{ $laptop->no_seri }}</th>
                  <td>{{ $laptop->merek }}</td>
                  <td>{{ $laptop->tanggal_diterbitkan }}</td>
                  <td>{{ $laptop->model }}</td>
                  <td>{{ $laptop->harga }}</td>
                  <td>
                    <a class="btn btn-primary" href="/laptop/detail/{{ $laptop->id }}">Detail</a>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection