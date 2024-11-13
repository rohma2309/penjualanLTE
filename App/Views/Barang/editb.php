 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Halaman Edit Barang</title>
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
             gap: 10px;
         }

         label {
             font-weight: bold;
             margin-bottom: 5px;
         }

         input[type="text"],
         input[type="number"] {
             padding: 10px;
             border: 1px solid #ccc;
             border-radius: 5px;
             width: 100%;
             box-sizing: border-box;
         }

         button,
         .btn-add {
             padding: 10px;
             margin-top: 10px;
             background-color: #007bff;
             color: #fff;
             border: none;
             border-radius: 5px;
             cursor: pointer;
             text-align: center;
         }

         .btn-add {
             background-color: #6c757d;
             text-decoration: none;
             display: inline-block;
         }

         button:hover,
         .btn-add:hover {
             background-color: #0056b3;
         }
     </style>
 </head>

 <body>

     <div class="content-wrapper">
         <h1>Edit Barang</h1>
         <form action="index.php?controller=barang&action=update" method="POST">
             <input type="hidden" name="kode_barang" value="<?= htmlspecialchars($barang['kode_barang']) ?>">

             <label for="nama_barang">Nama Barang:</label>
             <input type="text" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']) ?>" required>

             <label for="harga">Harga:</label>
             <input type="number" name="harga" value="<?= htmlspecialchars($barang['harga']) ?>" required>

             <label for="stok">Stok:</label>
             <input type="number" name="stok" value="<?= htmlspecialchars($barang['stok']) ?>" required>

             <button type="submit">Update</button>
             <a href="index.php?controller=barang&action=index" class="btn btn-add">Batal</a>
         </form>
     </div>

 </body>

 </html>