<h1>Edit Product</h1>

<!-- dd($product) -->
<form method="POST" action="/products/update/{{ $product['id'] }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama_layanan" value="{{ $product['nama_layanan'] }}">
    <input type="text" name="deskripsi" value="{{ $product['deskripsi'] }}">
    <input type="number" name="harga" value="{{ $product['harga'] }}">
    <input type="text" name="kategori" value="{{ $product['kategori'] }}">

    <button type="submit">Update</button>
</form>