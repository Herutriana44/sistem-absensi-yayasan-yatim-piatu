<x-layouts.app title="Dashboard">
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-blue-100 p-4 rounded">Total Karyawan: {{ $total_karyawan }}</div>
        <div class="bg-green-100 p-4 rounded">Total Anak: {{ $total_anak }}</div>
        <div class="bg-yellow-100 p-4 rounded">Absensi Hari Ini: {{ $absensi_hari_ini }}</div>
    </div>
</div>
</x-layouts.app>
