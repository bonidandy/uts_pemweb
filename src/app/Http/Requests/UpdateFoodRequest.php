<?php

namespace App\Http\Requests;

use App\Models\Pelanggan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePelangganRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pelanggan_edit');
    }

    public function rules()
    {
        return [
            'nama' => [
                'string',
                'required',
            ],
            'alamat' => [
                'string',
                'required',
            ],
            'telepon' => [
                'string',
                'required',
            ],
            'riwayat_transaksi' => [
                'string',
                'required',
            ],
        ];
    }
}
