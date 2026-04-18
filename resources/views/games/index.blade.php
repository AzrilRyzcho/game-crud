<a href="{{ route('games.create') }}">Tambah Game</a>

<br><br>

<table border="1" cellpadding="25" cellspacing="0">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td>{{ $game->title }}</td>
            <td>{{ $game->genre }}</td>
            <td>{{ $game->price }}</td>
            <td>
                <a href="{{ route('games.edit', $game->id) }}">Edit</a> |
                
                <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>