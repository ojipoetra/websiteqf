<?php

namespace App\Http\Controllers;

use App\Models\FormulirPendaftaran;
use Illuminate\Http\Request;

class FormulirPendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = FormulirPendaftaran::latest()->paginate(10);
        return view('formulirpendaftaran.index', compact('pendaftaran'));
    }

    public function create()
    {
        return view('formulirpendaftaran');
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['pernyataan'] = $request->boolean('pernyataan');
        $storedDocuments = [];

        try {
            $this->storeDocuments($request, $data, null, $storedDocuments);
            FormulirPendaftaran::create($data);
        } catch (\Throwable $exception) {
            foreach ($storedDocuments as $path) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
            }

            throw $exception;
        }

        return redirect()->route('formulirpendaftaran.index')
            ->with('success', 'Data formulir pendaftaran berhasil disimpan.');
    }

    public function show(FormulirPendaftaran $formulirPendaftaran)
    {
        return view('formulirpendaftaran.show', ['pendaftaran' => $formulirPendaftaran]);
    }

    public function edit(FormulirPendaftaran $formulirPendaftaran)
    {
        return view('formulirpendaftaran.edit', ['pendaftaran' => $formulirPendaftaran]);
    }

    public function update(Request $request, FormulirPendaftaran $formulirPendaftaran)
    {
        $data = $this->validatedData($request, true, $formulirPendaftaran);
        $data['pernyataan'] = $request->boolean('pernyataan');
        $storedDocuments = [];
        $replacedDocuments = [];

        try {
            $this->storeDocuments($request, $data, $formulirPendaftaran, $storedDocuments, $replacedDocuments);
            $formulirPendaftaran->update($data);

            foreach ($replacedDocuments as $path) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
            }
        } catch (\Throwable $exception) {
            foreach ($storedDocuments as $path) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
            }

            throw $exception;
        }

        return redirect()->route('formulirpendaftaran.index')
            ->with('success', 'Data formulir pendaftaran berhasil diperbarui.');
    }

    public function destroy(FormulirPendaftaran $formulirPendaftaran)
    {
        foreach (['pas_foto', 'kartu_keluarga', 'ijazah', 'akta_kelahiran'] as $field) {
            if ($formulirPendaftaran->{$field}) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($formulirPendaftaran->{$field});
            }
        }

        $formulirPendaftaran->delete();

        return redirect()->route('formulirpendaftaran.index')
            ->with('success', 'Data formulir pendaftaran berhasil dihapus.');
    }

    private function validatedData(Request $request, bool $updating = false, ?FormulirPendaftaran $pendaftaran = null): array
    {
        $nisnRule = $updating ? 'unique:formulirpendaftaran,nisn,'.$pendaftaran->id : 'unique:formulirpendaftaran,nisn';
        $nikRule = $updating ? 'unique:formulirpendaftaran,nik,'.$pendaftaran->id : 'unique:formulirpendaftaran,nik';

        return $request->validate([
            'nisn' => ['required', 'digits:10', $nisnRule],
            'nik' => ['required', 'digits:16', $nikRule],
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nama_panggilan' => ['nullable', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'gender' => ['required', 'in:L,P'],
            'agama' => ['required', 'string', 'max:100'],
            'alamat' => ['required', 'string'],
            'jenjang' => ['required', 'in:MTS,SMA'],
            'nama_ayah' => ['required', 'string', 'max:255'],
            'nik_ayah' => ['required', 'digits:16'],
            'pekerjaan_ayah' => ['nullable', 'string', 'max:255'],
            'pendidikan_ayah' => ['nullable', 'string', 'max:255'],
            'telepon_ayah' => ['required', 'string', 'max:20'],
            'nama_ibu' => ['required', 'string', 'max:255'],
            'nik_ibu' => ['required', 'digits:16'],
            'pekerjaan_ibu' => ['nullable', 'string', 'max:255'],
            'pendidikan_ibu' => ['nullable', 'string', 'max:255'],
            'telepon_ibu' => ['required', 'string', 'max:20'],
            'penghasilan_keluarga' => ['nullable', 'string', 'max:255'],
            'nama_sekolah_asal' => ['required', 'string', 'max:255'],
            'tahun_kelulusan' => ['required', 'digits:4'],
            'alamat_sekolah_asal' => ['nullable', 'string'],
            'pas_foto' => [$updating ? 'nullable' : 'required', 'file', 'mimes:jpg,jpeg,png', 'max:2560'],
            'kartu_keluarga' => [$updating ? 'nullable' : 'required', 'file', 'mimes:pdf,jpg,jpeg,png', 'max:2560'],
            'ijazah' => [$updating ? 'nullable' : 'required', 'file', 'mimes:pdf', 'max:2560'],
            'akta_kelahiran' => [$updating ? 'nullable' : 'required', 'file', 'mimes:pdf', 'max:2560'],
            'pernyataan' => ['accepted'],
        ]);
    }

    private function storeDocuments(
        Request $request,
        array &$data,
        ?FormulirPendaftaran $pendaftaran = null,
        array &$storedDocuments = [],
        array &$replacedDocuments = [],
    ): void {
        foreach (['pas_foto', 'kartu_keluarga', 'ijazah', 'akta_kelahiran'] as $field) {
            if (!$request->hasFile($field)) {
                continue;
            }

            $path = $request->file($field)->store('formulirpendaftaran', 'public');
            $data[$field] = $path;
            $storedDocuments[] = $path;

            if ($pendaftaran && $pendaftaran->{$field} && $pendaftaran->{$field} !== $path) {
                $replacedDocuments[] = $pendaftaran->{$field};
            }
        }
    }
}
