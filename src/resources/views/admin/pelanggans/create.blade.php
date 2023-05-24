@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggans.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.pelanggan.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', '') }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.nama_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="alamat">{{ trans('cruds.pelanggan.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat', '') }}" required>
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.alamat_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="telepon">{{ trans('cruds.pelanggan.fields.telepon') }}</label>
                <input class="form-control {{ $errors->has('telepon') ? 'is-invalid' : '' }}" type="text" name="telepon" id="telepon" value="{{ old('telepon', '') }}" required>
                @if($errors->has('telepon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('telepon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.telepon_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="riwayat_transaksi">{{ trans('cruds.pelanggan.fields.riwayat_transaksi') }}</label>
                <input class="form-control {{ $errors->has('riwayat_transaksi') ? 'is-invalid' : '' }}" type="text" name="riwayat_transaksi" id="riwayat_transaksi" value="{{ old('riwayat_transaksi', '') }}" required>
                @if($errors->has('riwayat_transaksi'))
                    <div class="invalid-feedback">
                        {{ $errors->first('riwayat_transaksi') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.riwayat_transaksi_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
