# Sistem Absensi Yayasan Yatim Piatu

Metodologi penelitian : waterfall
Pengujian/Evaluasi : blackbox

2. Metodologi/Metode Lain yang Wajib Dicantumkan

Di dalam skripsi, "Waterfall" adalah Metodologi Pengembangan Perangkat Lunak (SDLC), sedangkan pengujian adalah tahap akhir dari SDLC tersebut. Namun, dosen penguji biasanya akan menagih beberapa metode atau alat bantu spesifik yang mendasari perancangan sistem Anda.

Berikut adalah hal-hal yang wajib Anda cantumkan di Bab 3 (Metodologi Penelitian):
A. Metode Pengumpulan Data (Wajib)

Sebelum bikin aplikasi, Anda harus tahu kebutuhan yayasan. Cantumkan metode ini:

    Wawancara (Interview): Proses tanya jawab dengan pengurus yayasan mengenai alur absensi saat ini (yang mungkin masih manual).

    Observasi: Anda datang langsung melihat bagaimana proses anak-anak atau karyawan melakukan absensi saat ini.

    Studi Pustaka: Referensi dari jurnal atau buku terkait sistem absensi terdahulu.

B. Metode Analisis dan Perancangan Sistem (Sangat Wajib)

Waterfall mewajibkan adanya tahap Design. Anda harus mencantumkan alat pemodelan sistem. Pilih salah satu rumpun di bawah ini (jangan dicampur):

    Pilihan 1: Berorientasi Objek (Sangat Populer Saat Ini)

        UML (Unified Modeling Language): Anda wajib membuat Use Case Diagram (siapa saja penggunanya dan bisa ngapain aja), Activity Diagram (alur sistem), dan Class Diagram (struktur database).

    Pilihan 2: Terstruktur (Gaya Klasik)

        DFD (Data Flow Diagram): Diagram Konteks, DFD Level 0, dst.

        ERD (Entity Relationship Diagram): Untuk perancangan databasenya.

C. Metode Pengukuran Kepuasan Pengguna (Opsional tapi Nilai Plus)

Jika Anda ingin skripsi Anda terlihat lebih keren dan berbobot, jangan cuma menguji aplikasinya jalan atau tidak (Black Box). Uji juga apakah pengurus yayasan merasa terbantu.

    Metode SUS (System Usability Scale) atau TAM (Technology Acceptance Model): Caranya mudah, Anda tinggal menyebarkan kuesioner sederhana (skala 1-5) kepada pengurus yayasan setelah mereka mencoba aplikasi Anda, lalu hitung hasilnya dengan rumus standar.

Anda wajib menjelaskan metode/arsitektur MVC tersebut di dalam skripsi Anda. Dosen penguji hampir pasti akan menanyakan bagaimana alur data di aplikasi Anda, dan menjelaskan MVC adalah cara terbaik untuk membuktikan bahwa Anda paham bagaimana Laravel bekerja, bukan sekadar asal coding.

Tips Tambahan untuk Bab 2 & 3

Karena Anda menggunakan Laravel, ada beberapa istilah khas Laravel yang sebaiknya ikut dimention secara singkat di Landasan Teori agar skripsi Anda terlihat berbobot:

    Eloquent ORM: Fitur Laravel untuk mengelola database dengan gaya Object-Oriented (Model).

    Blade Templates: Fitur untuk mendesain tampilan (View).

    Migration: Fitur Laravel untuk merancang skema database melalui kode, bukan lewat phpMyAdmin manual.

Menyusun landasan teori tentang Laravel dan MVC ini akan menjadi modal kuat bagi Anda saat maju ke sidang seminar proposal (sempro) nanti!