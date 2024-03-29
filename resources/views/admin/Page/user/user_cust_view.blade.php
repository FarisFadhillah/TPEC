@extends('admin.default')
@section('title')
<title>User &mdash; SMG</title>>
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
                <h4 class="font-weight-bold text-primary">CUSTOMER ACCOUNT</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-md">
                    <tr>
                        <th>id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                        @php $i = 1; @endphp
                        @foreach ($userCustData as $cmpusr)
                            <td style="vertical-align: middle;">{{ $i }}</td>
                            <td style="vertical-align: middle;">{{$cmpusr->email}}</td>
                            <td style="vertical-align: middle;">{{$cmpusr->password}}</td>
                            <td style="vertical-align: middle;">

                                <a href="/dashboard/data/user/edit/{{ $cmpusr->id}}" class="btn btn-warning">Edit</a>

                                <form action="/dashboard/data/company/data_profile/{{ $cmpusr->id}}" method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Delete</button>
                                </form>
                            </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
@endSection