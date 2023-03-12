@extends('admin.default')
@section('title')
<title>Courier &mdash; SMG</title>>
@endSection
@section('content')
<section class="section">
    {{-- <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?> --}}
    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <h4 class="font-weight-bold text-primary">KURIR</h4>
            </div>
            <div class="col mt-3">
                <a href="/dashboard/data/courier/tambah" class="btn btn-primary mb-3">Tambah Data Kurir</a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                    <tr>
                        @php $i = 1; @endphp
                        @foreach ($courierData as $cr)
                            <td style="vertical-align: middle;">{{ $i }}</td>
                            <td style="vertical-align: middle;">{{ $cr->nama_kurir }}</td>
                            <td style="vertical-align: middle;">{{ $cr->harga_kurir }}</td>

                            <td style="text-align: center;"><a href="/dashboard/data/courier/edit/{{ $cr->id}}" class="btn btn-warning">Edit</a>

                                <form action="/dashboard/data/courier/data_courier/{{ $cr->id}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </table>
            </div>
        </div>
    </div>


@endSection