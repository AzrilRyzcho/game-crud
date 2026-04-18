<form action="{{ route('games.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Judul">
    <input type="text" name="genre" placeholder="Genre">
    <input type="number" name="price" placeholder="Harga">
    <button type="submit">Simpan</button>
</form>