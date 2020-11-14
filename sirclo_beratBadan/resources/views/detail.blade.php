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


        <h1 class="mt-5">DETAIL DATA</h1>

        <table class="table table-hover mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">{{ $details->tanggal }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Max</th>
                    <td>{{ $details->maxi }}</td>
                </tr>
                <tr>
                    <th scope="row">Min</th>
                    <td>{{ $details->mini }}</td>
                </tr>
                <tr>
                    <th scope="row">Perbedaan</th>
                    <td>{{ $details->perbedaan }}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
