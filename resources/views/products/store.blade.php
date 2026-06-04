<h1>Form Input Data</h1>
<form method="POST" action="/products/store">
    @csrf
    <input type="text" name="nama_layanan" placeholder="Nama Layanan">
    <input type="text" name="deskripsi" placeholder="Deskripsi">
    <input type="number" name="harga" placeholder="Harga">
    <input type="text" name="kategori" placeholder="Kategori">

    <button type="submit">Save</button>
</form>