@extends('layouts.main')

@section('container')
    <h1>Detail Handphone</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>No Seri</th>
                <td>{{ $handphone->no_seri }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $handphone->merek }}</td>
            </tr>
            <tr>
                <th>Tanggal Diterbitkan</th>
                <td>{{ $handphone->tanggal_diterbitkan }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $handphone->model }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $handphone->harga }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $handphone->deskripsi }}</td>
            </tr>
            <tr>
                <th>Penyimpanan</th>
                <td>{{ $handphone->penyimpanan }}</td>
            </tr>
            <tr>
                <th>Baterai</th>
                <td>{{ $handphone->baterai }}</td>
            </tr>
            <tr>
                <th>Prosesor</th>
                <td>{{ $handphone->prosesor }}</td>
            </tr>
            <tr>
                <th>Ukuran Layar</th>
                <td>{{ $handphone->ukuran_layar }}</td>
            </tr>
        </table>
    </div>
@endsection
