<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Katalog & Buku (Perpustakaan Digital)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container bg-white p-4 rounded shadow-sm">
    <h3 class="mb-4">Manajemen Katalog & Buku (Perpustakaan Digital)</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Tambah Buku -->
    <div class="card mb-4">
        <div class="card-header font-weight-bold">Tambah Buku Baru</div>
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-md-3">
                        <input type="text" name="judul_0114" class="form-control" placeholder="Judul Buku" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="isbn_0114" class="form-control" placeholder="ISBN" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="tahun_terbit_0114" class="form-control" placeholder="Tahun Terbit" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="pengarang_0114" class="form-control" placeholder="Pengarang" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="kategori_0114" class="form-control" placeholder="Kategori" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan Buku</button>
            </form>
        </div>
    </div>

    <!-- Tabel Data Buku -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>ISBN</th>
                <th>Tahun Terbit</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->judul_0114 }}</td>
                    <td>{{ $book->isbn_0114 }}</td>
                    <td>{{ $book->tahun_terbit_0114 }}</td>
                    <td>{{ $book->pengarang_0114 }}</td>
                    <td>{{ $book->kategori_0114 }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id_0114) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('books.destroy', $book->id_0114) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>