Berikut adalah rancangan Entity Relationship Diagram (ERD) dalam bentuk tabel untuk Sistem Absensi Yayasan Yatim Piatu, dengan tabel `users` yang sudah disesuaikan dengan struktur bawaan Laravel Breeze.

### 1. Tabel: `users` (Bawaan Laravel Breeze)

Tabel ini digunakan untuk autentikasi dan menyimpan data akun pengguna sistem (Admin, Pengurus Yayasan, atau Karyawan).

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **name** | String | Nama pengguna |
| **email** | String | Email (Unique) |
| **email_verified_at** | Timestamp | Waktu verifikasi email (Nullable) |
| **password** | String | Password yang dienkripsi |
| **remember_token** | String | Token untuk fitur *remember me* (Nullable) |
| **role** | Enum('admin', 'pengurus', 'karyawan') | Hak akses dalam sistem |
| **created_at** | Timestamp | Waktu data dibuat (Nullable) |
| **updated_at** | Timestamp | Waktu data diubah (Nullable) |

---

### 2. Tabel: `karyawan`

Tabel untuk menyimpan data profil lengkap karyawan/pengurus. Hubungan ke tabel `users` adalah 1-to-1 (opsional jika semua karyawan diberi akses login).

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **user_id** (FK) | BigInteger (Unsigned) | Menghubungkan ke `users.id` (Nullable jika tidak punya akun login) |
| **nip** | String | Nomor Induk Pegawai (Unique) |
| **nama_lengkap** | String | Nama lengkap karyawan |
| **jabatan** | String | Jabatan (Misal: Pengasuh, Juru Masak, Administrasi) |
| **jenis_kelamin** | Enum('L', 'P') | Jenis kelamin |
| **no_hp** | String | Nomor telepon |
| **status_aktif** | Boolean | Status aktif kerja (Default: true) |
| **created_at** | Timestamp | Waktu data dibuat |
| **updated_at** | Timestamp | Waktu data diubah |

---

### 3. Tabel: `anak_asuh`

Tabel untuk menyimpan data anak-anak yatim/piatu yang ada di yayasan.

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **nomor_induk** | String | Nomor induk anak di yayasan (Unique) |
| **nama_lengkap** | String | Nama lengkap anak |
| **jenis_kelamin** | Enum('L', 'P') | Jenis kelamin |
| **tanggal_lahir** | Date | Tanggal lahir |
| **status_anak** | Enum('Yatim', 'Piatu', 'Yatim Piatu') | Status yatim/piatu |
| **tanggal_masuk** | Date | Tanggal mulai menetap/terdaftar di yayasan |
| **status_aktif** | Boolean | Status apakah anak masih di yayasan (Default: true) |
| **created_at** | Timestamp | Waktu data dibuat |
| **updated_at** | Timestamp | Waktu data diubah |

---

### 4. Tabel: `absensi_karyawan`

Tabel untuk mencatat riwayat kehadiran karyawan harian.

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **karyawan_id** (FK) | BigInteger (Unsigned) | Menghubungkan ke `karyawan.id` |
| **tanggal** | Date | Tanggal absensi |
| **jam_masuk** | Time | Jam melakukan absen masuk (Nullable) |
| **jam_pulang** | Time | Jam melakukan absen pulang (Nullable) |
| **status_kehadiran** | Enum('Hadir', 'Izin', 'Sakit', 'Alpha') | Status kehadiran |
| **keterangan** | Text | Catatan tambahan / alasan izin atau sakit (Nullable) |
| **created_at** | Timestamp | Waktu data dibuat |
| **updated_at** | Timestamp | Waktu data diubah |

---

### 5. Tabel: `absensi_anak`

Tabel untuk mencatat riwayat kehadiran anak-asuh (bisa digunakan untuk absensi kegiatan yayasan, sekolah internal, atau absen harian).

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **anak_asuh_id** (FK) | BigInteger (Unsigned) | Menghubungkan ke `anak_asuh.id` |
| **user_id** (FK) | BigInteger (Unsigned) | Menghubungkan ke `users.id` (Pengurus/Karyawan yang mengabsenkan) |
| **tanggal** | Date | Tanggal absensi |
| **waktu_absen** | Time | Jam pelaksanaan absensi |
| **status_kehadiran** | Enum('Hadir', 'Izin', 'Sakit', 'Alpha') | Status kehadiran |
| **keterangan** | Text | Catatan tambahan / alasan sakit (Nullable) |
| **created_at** | Timestamp | Waktu data dibuat |
| **updated_at** | Timestamp | Waktu data diubah |

---

### Hubungan Antar Tabel (Relasi):

* **`users` ke `karyawan**`: One-to-One (1:1) — Satu *user* dapat terhubung ke satu data *karyawan*.
* **`karyawan` ke `absensi_karyawan**`: One-to-Many (1:N) — Satu *karyawan* memiliki banyak catatan *absensi_karyawan*.
* **`anak_asuh` ke `absensi_anak**`: One-to-Many (1:N) — Satu *anak_asuh* memiliki banyak catatan *absensi_anak*.
* **`users` ke `absensi_anak**`: One-to-Many (1:N) — Satu *user* (pengurus) dapat melakukan input/konfirmasi banyak data *absensi_anak*.

Secara struktur database (ERD), rancangan di atas sudah sangat mencukupi untuk kebutuhan standar skripsi. Namun, berdasarkan pengalaman sidang skripsi sistem informasi, dosen penguji sering kali memberikan pertanyaan jebakan atau meminta fitur tambahan terkait **keamanan data** dan **kondisi riil di lapangan**.

Untuk mengantisipasi hal tersebut, berikut adalah beberapa tabel tambahan opsional (namun sangat direkomendasikan) yang bisa Anda masukkan ke dalam ERD untuk menaikkan nilai skripsi Anda:

### 1. Tabel: `kegiatan_anak` (Opsional - Nilai Plus)

Anak-anak di yayasan biasanya tidak absen "masuk kerja" seperti karyawan, melainkan absen berdasarkan kegiatan (misal: Absen Sholat Berjamaah, Absen Mengaji, atau Absen Makan). Tabel ini berfungsi agar absensi anak menjadi lebih logis.

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **nama_kegiatan** | String | Misal: "Mengaji Sore", "Sekolah", "Kajian" |
| **jam_mulai** | Time | Batas awal absensi |
| **created_at** | Timestamp | Waktu data dibuat |
| **updated_at** | Timestamp | Waktu data diubah |

> **Catatan Relasi:** Jika tabel ini ditambah, maka di **Tabel 5 (`absensi_anak`)**, Anda wajib menambahkan **`kegiatan_anak_id` (FK)** yang menghubungkan ke tabel kegiatan ini.

---

### 2. Tabel: `pengajuan_izin` (Antisipasi Pertanyaan Dosen)

*Dosen sering bertanya: "Kalau karyawan atau anak izin/sakit, bagaimana proses inputnya? Apakah langsung diisi 'Izin' di tabel absen?"* Akan lebih rapi jika ada tabel khusus untuk menampung dokumen/bukti izin (seperti surat dokter).

| Nama Kolom | Tipe Data | Keterangan |
| --- | --- | --- |
| **id** (PK) | BigInteger (Unsigned) | Auto Increment |
| **tipe_pendaftar** | Enum('Karyawan', 'Anak') | Menentukan siapa yang mengajukan |
| **subjek_id** | BigInteger (Unsigned) | Berisi ID Karyawan atau ID Anak Asuh |
| **tanggal_mulai** | Date | Tanggal awal izin |
| **tanggal_selesai** | Date | Tanggal akhir izin |
| **alasan** | Text | Alasan izin |
| **bukti_dokumen** | String | Nama file foto/pdf surat izin/sakit (Nullable) |
| **status_persetujuan** | Enum('Pending', 'Disetujui', 'Ditolak') | Diperiksa oleh Admin/Pengurus |
| **created_at** | Timestamp | Waktu data dibuat |

---

### 3. Tambahan Kolom Keamanan & Audit (Wajib di Laravel)

Jika Anda menggunakan fitur bawaan Laravel secara maksimal, pastikan di dalam laporan skripsi Anda menyebutkan fitur **Soft Deletes**.

Dosen sangat suka ini karena data anak yatim atau karyawan tidak boleh benar-benar terhapus dari database demi histori laporan.

* Tambahkan kolom **`deleted_at` (Timestamp, Nullable)** di tabel `users`, `karyawan`, dan `anak_asuh`.
* Di Laravel, Anda cukup menambahkan `use SoftDeletes;` pada Model-nya.

### Kesimpulan untuk Sidang:

Jika Anda hanya ingin sistem yang **simple dan cepat selesai**, gunakan 5 tabel yang saya buatkan sebelumnya.

Namun, jika Anda ingin **nilai A dan meminimalisir revisi** saat sidang, tambahkan tabel `kegiatan_anak` dan `pengajuan_izin` di atas agar analisis sistem Anda dinilai matang dan sesuai dengan kondisi yayasan yang sebenarnya.