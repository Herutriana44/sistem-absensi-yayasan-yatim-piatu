<x-layouts.app title="Data Karyawan">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Data Karyawan</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">NIP</th>
                    <th class="p-2 border">Nama</th>
                    <th class="p-2 border">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $item)
                <tr>
                    <td class="p-2 border">{{ $item->nip }}</td>
                    <td class="p-2 border">{{ $item->nama_lengkap }}</td>
                    <td class="p-2 border">{{ $item->jabatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
