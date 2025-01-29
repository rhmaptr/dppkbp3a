<form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="foto">Upload Foto:</label>
    <input type="file" name="foto" id="foto" accept="image/*" required>

    <button type="submit">Upload</button>
</form>
