<!doctype html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Edit Pendaftaran</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-slate-100 p-6"><main class="mx-auto max-w-3xl rounded-xl bg-white p-6 shadow">
<h1 class="mb-5 text-2xl font-bold">Edit Pendaftaran</h1>
@if($errors->any())<div class="mb-4 rounded bg-red-100 p-3 text-red-800"><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ route('formulirpendaftaran.update',$pendaftaran) }}" enctype="multipart/form-data" class="grid gap-4 md:grid-cols-2">
@csrf @method('PUT')
@php
$fields=[['nisn','NISN'],['nik','NIK'],['nama_lengkap','Nama Lengkap'],['nama_panggilan','Nama Panggilan'],['tempat_lahir','Tempat Lahir'],['tanggal_lahir','Tanggal Lahir'],['alamat','Alamat'],['nama_ayah','Nama Ayah'],['nik_ayah','NIK Ayah'],['telepon_ayah','Telepon Ayah'],['nama_ibu','Nama Ibu'],['nik_ibu','NIK Ibu'],['telepon_ibu','Telepon Ibu'],['nama_sekolah_asal','Sekolah Asal'],['tahun_kelulusan','Tahun Kelulusan'],['alamat_sekolah_asal','Alamat Sekolah Asal']];
@endphp
@foreach($fields as [$name,$label])<label class="flex flex-col">{{ $label }}<input class="rounded border p-2" type="{{ $name==='tanggal_lahir'?'date':'text' }}" name="{{ $name }}" value="{{ old($name,$name==='tanggal_lahir'?$pendaftaran->{$name}?->format('Y-m-d'):$pendaftaran->{$name}) }}" {{ str_starts_with($name,'alamat')?'':'required' }}></label>@endforeach
<label>Jenis Kelamin<select class="rounded border p-2" name="gender"><option value="L" @selected($pendaftaran->gender==='L')>Laki-laki</option><option value="P" @selected($pendaftaran->gender==='P')>Perempuan</option></select></label>
<label>Jenjang<select class="rounded border p-2" name="jenjang"><option value="MTS" @selected($pendaftaran->jenjang==='MTS')>MTS</option><option value="SMA" @selected($pendaftaran->jenjang==='SMA')>SMA</option></select></label>
<label>Agama<input class="rounded border p-2" name="agama" value="{{ old('agama',$pendaftaran->agama) }}" required></label>
@foreach([['pas_foto','Pas Foto'],['kartu_keluarga','Kartu Keluarga'],['ijazah','Ijazah'],['akta_kelahiran','Akta Kelahiran']] as [$name,$label])<label>{{ $label }}<input class="w-full rounded border p-2" type="file" name="{{ $name }}"></label>@endforeach
<input type="hidden" name="pernyataan" value="1">
<div class="md:col-span-2 flex gap-3"><button class="rounded bg-blue-600 px-4 py-2 text-white" type="submit">Simpan</button><a class="rounded bg-slate-200 px-4 py-2" href="{{ route('formulirpendaftaran.index') }}">Batal</a></div>
</form></main></body></html>
