<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div id="main" class="d-flex align-items-center vh-100">
                    <div class="container">
                            <div class="card shadow m-auto" style="width: 400px">
                                <div class="card-body">
                                    <h4 class="h4">Tulis Laporan Anda</h4>
                                    @if (session('pesan'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('pesan')}}
                                      </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert">
                                        Anda gagal registrasi
                                      </div>
                                    @endif
                                        <form action="{{url('laporan')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                                @error('nik')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <div class="mb-3">    
                                                <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan</label>
                                                <input type="date" class="form-control" name="tanggal_pengaduan" id="nama" placeholder="tanggal_pengaduan">
                                                @error('tanggal_pengaduan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                    <label for="formFile" class="form-label">Foto</label>
                                                    <input class="form-control" type="file" name="foto" id="formFile">
                                                @error('foto')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                                <div class="mb-3">    
                                                    <label for="isi_laporan" class="form-label">Isi Laporan</label>
                                                    <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="3"></textarea>
                                                @error('isi_laporan')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <button class="btn form-control btn-primary mb-2">Lapor</button>
                                                <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                                        </form>    
                                </div>    
                            </div>    
                    </div>   
        </div>    
</body>
</html>