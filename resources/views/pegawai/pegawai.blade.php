@extends('layout.main')


@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-11" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="col-md-2">
                    <h6 class="mb-4">{{ $title }}</h6>
                    <a class="btn btn-primary btn-sm mb-2" href="{{ url('/pegawai/create') }}"><i
                            class="fas fa-solid fa-plus me-2"></i>
                        Tambah</a>
                </div>

                <div class="bg-light rounded h-100 p-4">
                    <div col="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-10">
                                <form action="" method="get">
                                    <div class="row">
                                        <h6 class="mb-4">Tanggal Lahir</h6>
                                        <div class="col-sm-5">
                                            <input type="text" name="tanggal_lahir" class="form-control form-control-sm"
                                                id="daterangepicker">
                                        </div>
                                        <div class="col-sm-3 ">
                                            <button type="submit" class="btn btn-info btn-sm">Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table display responsive nowrap" id="datatables">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telpon</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Gaji</th>
                                    <th scope="col">Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawai as $d)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="/pegawai/{{ $d->id_pegawai }}/edit"><i
                                                    class="fas fa-solid fa-pen me-2"></i>
                                                Edit</a>
                                            <form action="/pegawai/{{ $d->id_pegawai }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah yakin nama {{ $d->nama_lengkap }} di hapus ?')"><i
                                                        class="fas fa-solid fa-trash me-2"></i> Hapus</button>

                                            </form>
                                        </td>
                                        <td>{{ $d->nama_lengkap }}</td>
                                        <td>{{ $d->jenis_kelamin }}</td>
                                        <td>{{ $d->tanggal_lahir }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>{{ $d->no_telpon }}</td>
                                        <td><img src="{{ $d->foto }}" width="40" height="40"></td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->jabatan }}</td>
                                        <td>{{ $d->gaji }}</td>
                                        <td>{{ $d->tanggal_masuk }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
