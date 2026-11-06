<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Formulir Pendaftaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-6">
<div class="mx-auto max-w-6xl rounded-xl bg-white p-6 shadow">
    <div class="mb-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold">Data Formulir Pendaftaran</h1>
        <a href="{{ route('formulirpendaftaran.create') }}" class="rounded bg-blue-600 px-4 py-2 text-white">Tambah Data</a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded bg-green-100 p-3 text-green-800">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full border-collapse text-sm">
            <thead class="bg-slate-200">
                <tr><th class="border p-2">NISN</th><th class="border p-2">Nama</th><th class="border p-2">Jenjang</th><th class="border p-2">Sekolah Asal</th><th class="border p-2">Aksi</th></tr>
            </thead>
            <tbody>
            @forelse($pendaftaran as $item)
                <tr>
                    <td class="border p-2">{{ $item->nisn }}</td>
                    <td class="border p-2">{{ $item->nama_lengkap }}</td>
                    <td class="border p-2">{{ $item->jenjang }}</td>
                    <td class="border p-2">{{ $item->nama_sekolah_asal }}</td>
                    <td class="border p-2 whitespace-nowrap">
                        <a class="text-blue-700" href="{{ route('formulirpendaftaran.show', $item) }}">Lihat</a>
                        <a class="ml-2 text-amber-700" href="{{ route('formulirpendaftaran.edit', $item) }}">Edit</a>
                        <form class="ml-2 inline" method="POST" action="{{ route('formulirpendaftaran.destroy', $item) }}" onsubmit="return confirm('Hapus data ini?')">
                            @csrf @method('DELETE')
                            <button class="text-red-700" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td class="border p-4 text-center" colspan="5">Belum ada data.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $pendaftaran->links() }}</div>
</div>
</body>
</html>
