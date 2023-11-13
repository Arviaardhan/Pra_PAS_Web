@extends('layouts.main')

@section('container')
    <h1>Ini adalah halaman Handphones</h1>
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
          @foreach ($handphones as $handphone)
              <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <th>{{ $handphone->no_seri }}</th>
                  <td>{{ $handphone->merek }}</td>
                  <td>{{ $handphone->tanggal_diterbitkan }}</td>
                  <td>{{ $handphone->model }}</td>
                  <td>{{ $handphone->harga }}</td>
                  <td>
                    <a class="btn btn-primary" href="/handphone/detail/{{ $handphone->id }}">Detail</a>
                </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection