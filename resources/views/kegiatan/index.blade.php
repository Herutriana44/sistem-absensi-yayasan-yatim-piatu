<x-layouts.app title="Data Kegiatan Anak">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Daftar Kegiatan</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Nama Kegiatan</th>
                    <th class="p-2 border">Jam Mulai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kegiatan as $item)
                <tr>
                    <td class="p-2 border">{{ $item->nama_kegiatan }}</td>
                    <td class="p-2 border">{{ $item->jam_mulai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
