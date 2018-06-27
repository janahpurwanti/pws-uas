<?php
namespace App\Http\Transformers;

use League\Fractal\TransformerAbstract;
use App\ModelMhs;

class TransformerMahasiswa extends TransformerAbstract
{
  public function transform(Mahasiswa $field)
  {
    // ngubah format tampilan di postman
    return [
      'nim' => $field->nim,
      'nama' => $field->nama,
      'alamat' => $field->alamat,
      'email' => $field->email,
      'ttl' => $field->ttl,
      'hoby' => $field->hoby,
      'telp' => $field->telp,
      'fakultas' => $field->fakultas
    ];
  }
}