<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function simpanHilang(Request $request)
    {
        return $this->simpan($request, 'Hilang');
    }

    public function simpanDitemukan(Request $request)
    {
        return $this->simpan($request, 'Ditemukan');
    }

    private function simpan(Request $request, string $jenis)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'warna_barang' => 'nullable|string|max:100',
            'nama_pelapor' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:30',
            'email' => 'nullable|email|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|integer|min:1|max:31',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|min:2000|max:2100',
            'waktu' => 'nullable|string|max:50',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|max:5120',
        ]);

        $tanggal = sprintf(
            '%04d-%02d-%02d',
            $validated['tahun'],
            $validated['bulan'],
            $validated['tanggal']
        );

        if (!checkdate(
            (int) $validated['bulan'],
            (int) $validated['tanggal'],
            (int) $validated['tahun']
        )) {
            return back()
                ->withErrors(['tanggal' => 'Tanggal yang dipilih tidak valid.'])
                ->withInput();
        }

        $fotoPath = null;

        try {
            DB::transaction(function () use (
                $validated, $jenis, $tanggal, $request, &$fotoPath
            ) {
                $laporan = Laporan::create([
                    'id_user' => $request->user()->id,
                    'jenis_laporan' => $jenis,
                    'nama_barang' => $validated['nama_barang'],
                    'warna_barang' => $validated['warna_barang'] ?? null,
                    'nama_pelapor' => $validated['nama_pelapor'],
                    'kontak' => $validated['whatsapp'],
                    'lokasi_kejadian' => $validated['lokasi'],
                    'tanggal_kejadian' => $tanggal,
                    'waktu_kejadian' => $validated['waktu'] ?? null,
                    'deskripsi' => $validated['deskripsi'],
                    'status' => 'Menunggu Verifikasi',
                ]);

                if ($request->hasFile('foto')) {
                    $fotoPath = $request->file('foto')
                        ->store('foto-laporan', 'public');

                    $laporan->foto()->create([
                        'url_foto' => $fotoPath,
                    ]);
                }
            });

            return back()->with('laporan_berhasil', true);
        } catch (\Throwable $e) {
            if ($fotoPath) {
                Storage::disk('public')->delete($fotoPath);
            }

            report($e);

            return back()
                ->with('error', 'Laporan belum berhasil disimpan. Silakan coba lagi.')
                ->withInput();
        }
    }
    public function setujui($id)
{
    $laporan = Laporan::findOrFail($id);

    if ($laporan->status !== 'Menunggu Verifikasi') {
        return back()->with('error', 'Laporan ini sudah diverifikasi.');
    }

    $laporan->update([
        'status' => 'Dipublikasikan',
        'alasan_penolakan' => null,
    ]);

    return back()->with('success', 'Laporan berhasil disetujui.');
}

public function tolak(Request $request, $id)
{
    $validated = $request->validate([
        'alasan_penolakan' => 'required|string|max:1000',
    ]);

    $laporan = Laporan::findOrFail($id);

    if ($laporan->status !== 'Menunggu Verifikasi') {
        return back()->with('error', 'Laporan ini sudah diverifikasi.');
    }

    $laporan->update([
        'status' => 'Ditolak',
        'alasan_penolakan' => $validated['alasan_penolakan'],
    ]);

    return back()->with('success', 'Laporan berhasil ditolak.');
}
}
