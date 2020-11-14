<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <h1 class="mt-5">EDIT DATA</h1>

        <form class="mt-5" action="/{{ $weightData->id }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value=" {{ old('tanggal') ? old('tanggal') : $weightData->tanggal }}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Max. Berat Badan</label>
              <input type="number" class="form-control" id="maxi" name="maxi">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Min. Berat Badan</label>
                <input type="number" class="form-control" id="mini" name="mini">
            </div>


            <button type="submit" class="btn btn-primary mt-5">Submit</button>



        </form>
    </div>

</body>
</html>
