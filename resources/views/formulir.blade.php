<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir (Simple CRUD)</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Isi Data</h3>
                        <br/>

                        {{-- menampilkan error validasi --}}
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <br/>
                        <!-- form validasi -->
                        <form action="/proses" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="tanggal">Tanggal Lahir</label>
                                <input class="form-control" type="text" name="tanggal" value="{{ old('tanggal') }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="telepon">No Telepon</label>
                                <input class="form-control" type="text" name="telepon" value="{{ old('telepon') }}">
                            </div>

                            <div class="form-group">
                                <label for="gender">Jenis Kelamin</label>
                                <div class="radio">
                                  <label class="radio-inline"><input type="radio" name="gender" >Laki-laki</label>
                                  <label class="radio-inline"><input type="radio" name="gender">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                            </div>
                            
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                                <input class="btn btn-default" type="reset" value="Reset">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>