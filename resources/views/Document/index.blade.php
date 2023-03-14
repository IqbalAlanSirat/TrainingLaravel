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

        #das {
            text-align-last: center;
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
            padding: 8px;
            cursor: pointer;
            /* text-align: center; */
        }

        .kemaskini {
            background-color: #ffc107;
            color: white;
            border: 1px solid #bf9106;
            border-radius: 6px;
            padding: 6px;
            cursor: pointer;
            /* text-align: center; */
        }
    </style>
</head>

<body>
    <div>
        {{-- <h1>My name is {{ $name }}</h1>
        <p>I work at {{ $workplace }}</p> --}}
        <div id="das">
            <h1>Senarai Dokument</h1>
            <a href="{{ route('document.create') }}">Dokumen Baru</a>
            <br>
            <br>
            {{ $documents->links() }}
        </div>
        <br>
        <div align="center">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tarikh Di Terbitkan</th>
                        <th>Nama Penulis</th>
                        <th>Disahkan Oleh</th>
                        <th>Tarikh Disahkan</th>
                        <th style="width: 200px;">Tindakan</th>
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
                                    <a class="kemaskini" href="{{ route('document.edit', $doc) }}">Kemaskini</a>
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
    </div>
</body>

</html>
