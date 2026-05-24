<x-layouts.app title="Data Anak Asuh">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Data Anak Asuh</h2>
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Nomor Induk</th>
                    <th class="p-2 border">Nama</th>
                    <th class="p-2 border">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anak as $item)
                <tr>
                    <td class="p-2 border">{{ $item->nomor_induk }}</td>
                    <td class="p-2 border">{{ $item->nama_lengkap }}</td>
                    <td class="p-2 border">{{ $item->status_anak }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
