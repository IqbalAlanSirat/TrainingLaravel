<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;

        }

        th {
            background-color: cyan;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }


        button {
            background-color: red;
            color: white;
            border: 1px solid rgb(138, 9, 9);
            border-radius: 6px;
            padding: 6px;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>

<body>
    <div align="center">
        <h1>Senarai Dokument</h1>
        {{-- <h1>My name is {{ $name }}</h1>
        <p>I work at {{ $workplace }}</p> --}}
        {{ $documents->links() }}
        <br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tarikh Di Terbitkan</th>
                    <th>Nama Penulis</th>
                    <th>Disahkan Oleh</th>
                    <th>Tarikh Disahkan</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $doc)
                    <tr>
                        <td>{{ $documents->firstItem() + $loop->index }}</td>
                        <td>{{ $doc->nama }}</td>
                        <td>{{ $doc->tarikh_diterbitkan }}</td>
                        <td>{{ $doc->nama_penulis }}</td>
                        <td>{{ $doc->disahkan_oleh }}</td>
                        <td>{{ $doc->tarikh_disahkan }}</td>
                        <td>
                            <form action="{{ route('document.delete', $doc) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        {{ $documents->links() }}
    </div>
</body>

</html>
