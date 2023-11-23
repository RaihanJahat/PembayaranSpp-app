<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah | kelas</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100" style="background-color: #3264ed;">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Tambah Siswa</h4>
                    @if (session('pesan'))
                        <div class="alert alert-success" role="alert">
                            {{ session('pesan') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-success" role="alert">
                            Silahkan isi semua kolom!!!
                        </div>
                    @endif
                    @foreach ($data as $item)
                    <form method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nisn" class="form-label">Nisn</label>
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn"
                            value="{{$item->nisn}}">
                            @error('nisn')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        
                        <div class="mb-3">
                            <label for="nis" class="form-label">Nis</label>
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Nis"
                            value="{{$item->nis}}">
                            @error('nis')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                            value="{{$item->nama}}">
                            @error('nama')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="from-group"> 
                                <label>ID Kelas</label>
                                <select class="form-control" name="id_kelas" id="id_kelas">
                                    @foreach ($datakelas as $itm)
                                        <option value="{{$item->id_kelas}}">{{$itm->nama_kelas}}-{{$itm->kopetensi_keahlian}}</option>
                                    @endforeach
                                </select>
                                @error('id_kelas')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat"
                            value="{{$item->id_kelas}}"> 
                            @error('alamat')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">No Telpon</label>
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telpon"
                                value="{{$item->no_telp}}">
                                @error('no_telp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            <div class="from-group"> 
                                <label>ID Spp</label>
                                <select class="form-control" name="id_spp" id="id_spp">
                                    @foreach ($dataspp as $itm)
                                        <option value="{{$item->id_spp}}">{{$itm->id_spp}}-{{$item->tahun}}-{{$itm->nominal}}</option>
                                    @endforeach
                                </select>
                                @error('id_spp')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div><br>
                            <button class="btn form-control btn-primary mb-2">Simpan</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>     