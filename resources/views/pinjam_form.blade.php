<form action="/pinjam/simpan" method="POST">
    @csrf
    <input type="hidden" name="alat_id" value="{{ $alat->id }}">
    <h3>Pinjam Alat: {{ $alat->nama_alat }}</h3>
    <p>Stok Tersedia: {{ $alat->stok }}</p>
    <label>Jumlah Pinjam:</label>
    <input type="number" name="jumlah_pinjam" min="1" max="{{ $alat->stok }}" required>
    <button type="submit">Ajukan Peminjaman</button>
</form>