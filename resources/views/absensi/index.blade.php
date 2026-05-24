<x-layouts.app title="Absensi">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Modul Absensi</h2>
        <div class="space-y-4">
            <div class="p-4 bg-gray-50 border rounded">
                <h3 class="font-bold">Absensi Karyawan</h3>
                <p>Fitur untuk mencatat kehadiran harian karyawan.</p>
                <div class="mt-2 flex space-x-2">
                    <form action="{{ route('absensi.karyawan.masuk') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Absen Masuk</button>
                    </form>
                    <form action="{{ route('absensi.karyawan.pulang') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Absen Pulang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
