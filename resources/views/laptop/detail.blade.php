@extends('layouts.main')

@section('container')
    <h1>Detail Laptop</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>No Seri</th>
                <td>{{ $laptop->no_seri }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $laptop->merek }}</td>
            </tr>
            <tr>
                <th>Tanggal Diterbitkan</th>
                <td>{{ $laptop->tanggal_diterbitkan }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $laptop->model }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $laptop->harga }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $laptop->deskripsi }}</td>
            </tr>
            <tr>
                <th>Penyimpanan</th>
                <td>{{ $laptop->penyimpanan }}</td>
            </tr>
            <tr>
                <th>Baterai</th>
                <td>{{ $laptop->baterai }}</td>
            </tr>
            <tr>
                <th>Prosesor</th>
                <td>{{ $laptop->prosesor }}</td>
            </tr>
            <tr>
                <th>Ukuran Layar</th>
                <td>{{ $laptop->ukuran_layar }}</td>
            </tr>
        </table>
    </div>
@endsection
