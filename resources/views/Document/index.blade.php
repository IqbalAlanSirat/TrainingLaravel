<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div align="center">
        <h1>Senarai Dokument</h1>
        {{-- <h1>My name is {{ $name }}</h1>
        <p>I work at {{ $workplace }}</p> --}}

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tarikh Di Terbitkan</th>
                    <th>Nama Penulis</th>
                    <th>Disahkan Oleh</th>
                    <th>Tarikh Disahkan</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $documents->links() }}
    </div>
</body>

</html>
