<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
    <h3 class="mb-4">Edit Data Buku</h3>

    <form action="{{ route('books.update', $book->id_0114) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul_0114" class="form-control" value="{{ $book->judul_0114 }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ISBN</label>
            <input type="text" name="isbn_0114" class="form-control" value="{{ $book->isbn_0114 }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit_0114" class="form-control" value="{{ $book->tahun_terbit_0114 }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Pengarang</label>
            <input type="text" name="pengarang_0114" class="form-control" value="{{ $book->pengarang_0114 }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text" name="kategori_0114" class="form-control" value="{{ $book->kategori_0114 }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Update Buku</button>
        </div>
    </form>
</div>
</body>
</html>