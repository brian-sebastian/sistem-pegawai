@extends('layout.main')


@section('container')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">{{ $title }}</h6>
                    <form action="/pegawai/{{ $pegawai->id_pegawai }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_lengkap"
                                    class="form-control @error('nama_lengkap') is-invalid @enderror" id="inputEmail3"
                                    value="{{ old('nama_lengkap', $pegawai->nama_lengkap) }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios1"
                                        value="laki_laki">
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2"
                                        value="perempuan">
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label for="datepicker" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', $pegawai->tanggal_lahir) }}"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" id="datepicker">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="datepicker" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="" cols="10"
                                    rows="5">{{ old('alamat', $pegawai->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_telpon" class="col-sm-2 col-form-label">Nomor Telpon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('no_telpon') is-invalid @enderror"
                                    onkeypress="return isNumber(event);" name="no_telpon" id="no_telpon"
                                    value="{{ old('no_telpon', $pegawai->no_telpon) }}">
                                @error('no_telpon')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fileinput" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="foto" id="fileinput">
                                @error('foto')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="inputEmail3">
                                @error('email')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-sm mb-3 @error('jabatan') is-invalid @enderror"
                                    name="jabatan" id="select2" aria-label=".form-select-sm example">
                                    <option>-- Pilih --</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Wakil">Wakil</option>
                                    <option value="Bendahara">Bendahara</option>
                                </select>
                                @error('jabatan')
                                    <div class="invalid-feedback">
                                        <p class="text-dark">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                        <a class="btn btn-secondary btn-sm" href="{{ url('/') }}">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection
