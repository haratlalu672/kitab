@extends('dashboard.template.app')

@section('main')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">{{ $judul }}</h4>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                        <i class="ti-plus btn-icon-prepend"></i>Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">
                    <p class="card-title">Tabel {{ $judul }}</p>
                    <table id="datatable" class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Terverifikasi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'users_server_side',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'username', name: 'username' },
            { data: 'email', name: 'email' },
            { data: 'email_verified_at', render:function (data) {
                if ({data : 'email_verified_at'}) {
                    return 'Iya'
                } else {
                    return 'Tidak'
                }
            },  name: 'email_verified_at' },
        ],
        "language": {
            "url":"//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTabel":"Tidak ada data"
        }
    });
});
</script>
@endpush