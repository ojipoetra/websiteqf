<!doctype html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Detail Pendaftaran</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-slate-100 p-6"><main class="mx-auto max-w-3xl rounded-xl bg-white p-6 shadow">
<a href="{{ route('formulirpendaftaran.index') }}" class="text-blue-700">← Kembali</a>
<h1 class="mt-3 text-2xl font-bold">Detail {{ $pendaftaran->nama_lengkap }}</h1>
<div class="mt-5 grid gap-3 md:grid-cols-2">
@foreach($pendaftaran->toArray() as $field => $value)
    @unless(in_array($field, ['id','created_at','updated_at']))
    <div class="rounded bg-slate-50 p-3"><b>{{ str($field)->replace('_',' ')->title() }}</b><br>{{ is_bool($value) ? ($value ? 'Ya' : 'Tidak') : ($value ?? '-') }}</div>
    @endunless
@endforeach
</div>
</main></body></html>
