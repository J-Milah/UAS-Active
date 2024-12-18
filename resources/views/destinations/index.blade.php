<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <!-- Tambahkan CSS atau Bootstrap jika perlu -->
</head>
<body>
    <div class="container">
        <h1>Daftar Destinasi</h1>

        <!-- Pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('destinations.create') }}" class="btn btn-primary mb-3">Tambah Destinasi</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Destinasi</th>
                    <th>Alamat</th>
                    <th>Kategori</th>
                    <th>Owner</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td>
                        <td>{{ $destination->name_destination }}</td>
                        <td>{{ $destination->address }}</td>
                        <td>{{ $destination->category->name_category ?? 'N/A' }}</td>
                        <td>{{ $destination->owner->name_owner ?? 'N/A' }}</td>
                        <td>{{ $destination->status }}</td>
                        <td>
                            <a href="{{ route('destinations.edit', $destination->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
