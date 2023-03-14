<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta value="" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            padding-left: 10%;
            font-family: Arial, Helvetica, sans-serif;

        }

        .content-form {
            padding: 5px;
        }

        input[type=text],
        input[type=datetime-local],
        input[type=date],
        select {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #24a0ed;
            color: white;
            border: 1px solid rgb(138, 9, 9);
            border-radius: 6px;
            padding: 6px;
            cursor: pointer;
            text-align: center;
        }

        /* .content-form label {
            margin-bottom: 15px;
        } */
    </style>
</head>

<body>
    <div>
        <h1>Kemaskini Dokumen</h1>
    </div>
    <div>
        <form action="{{ route('document.update', $document) }}" method="post">
            @method('patch')
            @csrf
            <div class="content-form">
                <label for="nama">Nama : </label>
                <br>
                <input type="text" value="{{ $document->nama }}" name="nama">
            </div>
            <div class="content-form">
                <label for="tarikh_diterima_date">Tarikh Diterima :
                </label>
                <br>
                <input type="datetime-local" value="{{ date('Y-m-d H:m:s', strtotime($document->tarikh_diterbitkan)) }}"
                    name="tarikh_diterima">

            </div>
            <div class="content-form">
                <label for="nama_penulis">Nama Penulis : </label>
                <br>
                <input type="text" value="{{ $document->nama_penulis }}" name="nama_penulis">
            </div>
            <div class="content-form">
                <label for="disahkan_oleh">Disahkan oleh : </label>
                <br>
                <input type="text" value="{{ $document->disahkan_oleh }}" name="disahkan_oleh">
            </div>
            <div class="content-form">
                <label for="tarikh_disahkan">Tarikh Disahkan : </label>
                <br>
                <input type="date" value="{{ $document->tarikh_disahkan }}" name="tarikh_disahkan">
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>
