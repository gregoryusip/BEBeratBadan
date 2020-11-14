<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">


        <h1 class="mt-5">ALL DATA</h1>

        <a href="/create"><button type="button" class="btn btn-outline-secondary mt-5 mr-3">Add Data</button></a>

        <table class="table table-hover mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Max</th>
                    <th scope="col">Min</th>
                    <th scope="col">Perbedaan</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($weightData as $data)
                    <tr>
                        <th scope="row"> <a href="{{ url('detail/'.$data->id) }}">  {{ $data->tanggal }} </a> </th>
                        <td>{{ $data->maxi }}</td>
                        <td>{{ $data->mini }}</td>
                        <td>{{ $data->perbedaan }}</td>
                        <td>
                            <a href="{{ url('edit/'.$data->id) }}"><button type="button" class="btn btn-outline-secondary">Edit Data</button></a>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <th scope="row">RATA-RATA</th>
                    <td> {{ round($avgMax, 1) }}</td>
                    <td> {{ round($avgMin, 1) }}</td>
                    <td> {{ round($avgPerbedaan, 1) }}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
