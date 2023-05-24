@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pelanggan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id') }}
                        </th>
                        <td>
                            {{ $pelanggan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nama') }}
                        </th>
                        <td>
                            {{ $pelanggan->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.alamat') }}
                        </th>
                        <td>
                            {{ $pelanggan->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.telepon') }}
                        </th>
                        <td>
                            {{ $pelanggan->telepon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.riwayat_transaksi') }}
                        </th>
                        <td>
                            {{ $pelanggan->riwayat_transaksi }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
