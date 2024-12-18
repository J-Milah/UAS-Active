<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destinasi</title>
    <style>
        /* Styling untuk form edit destinasi */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Destinasi</h1>

        <!-- Menampilkan pesan sukses atau error -->
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <form action="{{ route('destinations.edit', $destination->id_destination) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input nama destinasi -->
            <div class="form-group">
                <label for="name_destination">Nama Destinasi</label>
                <input type="text" id="name_destination" name="name_destination" value="{{ old('name_destination', $destination->name_destination) }}" required>
            </div>

            <!-- Input alamat destinasi -->
            <div class="form-group">
                <label for="address">Alamat Destinasi</label>
                <input type="text" id="address" name="address" value="{{ old('address', $destination->address) }}">
            </div>

            <!-- Input URL BMap -->
            <div class="form-group">
                <label for="bmap">BMap URL</label>
                <input type="text" id="bmap" name="bmap" value="{{ old('bmap', $destination->bmap) }}">
            </div>

            <!-- Input thumbnail gambar -->
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail">
                @if($destination->thumbnail)
                    <p>Thumbnail saat ini: <img src="{{ asset('storage/' . $destination->thumbnail) }}" alt="Thumbnail" style="width: 100px; height: auto;"></p>
                @endif
            </div>

            <!-- Select kategori -->
            <div class="form-group">
                <label for="id_category">Kategori Destinasi</label>
                <select id="id_category" name="id_category">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id_category }}" {{ old('id_category', $destination->id_category) == $category->id_category ? 'selected' : '' }}>
                            {{ $category->name_category }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Select owner -->
            <div class="form-group">
                <label for="id_owner">Owner Destinasi</label>
                <select id="id_owner" name="id_owner">
                    <option value="">Pilih Owner</option>
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id_owner }}" {{ old('id_owner', $destination->id_owner) == $owner->id_owner ? 'selected' : '' }}>
                            {{ $owner->name_owner }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Select status -->
            <div class="form-group">
                <label for="status">Status Destinasi</label>
                <select id="status" name="status" required>
                    <option value="Open" {{ old('status', $destination->status) == 'Open' ? 'selected' : '' }}>Open</option>
                    <option value="Close" {{ old('status', $destination->status) == 'Close' ? 'selected' : '' }}>Close</option>
                </select>
            </div>

            <!-- Tombol submit -->
            <button type="submit">Update Destinasi</button>
        </form>
    </div>
</body>
</html>
