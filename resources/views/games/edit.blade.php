<form action="{{ route('games.update', $game->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $game->title }}">
    <input type="text" name="genre" value="{{ $game->genre }}">
    <input type="number" name="price" value="{{ $game->price }}">

    <button type="submit">Update</button>
</form>