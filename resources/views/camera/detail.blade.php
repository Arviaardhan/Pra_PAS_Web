@extends('layouts.main')

@section('container')
    <h1>Detail Camera</h1>
    <div style="display: flex; align-items: center; justify-content: center;">
        <table class="table table-bordered" style="text-align: center; width: 600px;">
            <tr>
                <th>No Seri</th>
                <td>{{ $camera->no_seri }}</td>
            </tr>
            <tr>
                <th>Merek</th>
                <td>{{ $camera->merek }}</td>
            </tr>
            <tr>
                <th>Tanggal Diterbitkan</th>
                <td>{{ $camera->tanggal_diterbitkan }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $camera->model }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>{{ $camera->harga }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $camera->deskripsi }}</td>
            </tr>
            <tr>
                <th>Penyimpanan</th>
                <td>{{ $camera->penyimpanan }}</td>
            </tr>
            <tr>
                <th>Baterai</th>
                <td>{{ $camera->baterai }}</td>
            </tr>
            <tr>
                <th>Prosesor</th>
                <td>{{ $camera->prosesor }}</td>
            </tr>
            <tr>
                <th>Ukuran Layar</th>
                <td>{{ $camera->ukuran_layar }}</td>
            </tr>
        </table>
    </div>
@endsection
