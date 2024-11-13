<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Edit Pelanggan</title>
    <style>
        .content-wrapper {
            padding: 20px;
            margin-top: 20px;
            background-color: #ffffff;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <h1>Edit Pelanggan</h1>
        <form action="index.php?controller=pelanggan&action=update" method="POST">
            <label for="id_pelanggan">ID Pelanggan:</label>
            <input type="text" name="id_pelanggan" value="<?= htmlspecialchars($pelanggan['id_pelanggan']) ?>" required>

            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']) ?>" required>

            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']) ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>