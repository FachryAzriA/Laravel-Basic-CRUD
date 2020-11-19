@extends('layouts.app')

@section('content')
    <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
                    <div class="content-head">
                        <h2> Tambah Data Mahasiswa</h2>
                    </div>
                    <form action="{{route('mahasiswa.update',['mahasiswa'=>$mahasiswa->id])}}" method="POST">
                    @csrf
                        <table>
                            <!-- NIM MAHASISWA -->
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label for="nim">Nomor Induk Mahasiswa</label>
                                    </td>
                                    <td> &nbsp;:&nbsp; </td>
                                    <td>
                                        <div>
                                            <input type="text" class="form-control @error('nim') is-invalid @enderror"
                                                id="nim" name="nim" value="{{old('nim')?? $mahasiswa->nim}}">
                                            @error('nim')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        
                        <!-- Nama Mahasiswa -->
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label for="nama">nama</label>
                                    </td>
                                    <td> &nbsp;:&nbsp; </td>
                                    <td>
                                        <div>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{old('nama')?? $mahasiswa->nama}}">
                                            @error('nama')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                            </div>

                        <!-- tempat lahir -->
                            <div class="form-group">
                                <tr>
                                    <td>
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                    </td>
                                    <td> &nbsp;:&nbsp; </td>
                                    <td>
                                        <div>
                                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                id="tempat_lahir" name="tempat_lahir" value="{{old('tempat_lahir')?? $mahasiswa->tempat_lahir}}">
                                            @error('tempat_lahir')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                            </div>

                        <!-- tanggal lahir -->
                        <div class="form-group">
                            <tr>
                                <td>
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td>
                                    <div>
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            id="tanggal_lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')?? $mahasiswa->tanggal_lahir}}">
                                        @error('tanggal_lahir')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </div>

                        <!-- fakultas -->
                        <div class="form-group">
                            <tr>
                                <td>
                                    <label for="fakultas">fakultas</label>
                                </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td>
                                    <div>
                                        <input type="text" class="form-control @error('fakultas') is-invalid @enderror"
                                            id="fakultas" name="fakultas" value="{{old('fakultas')?? $mahasiswa->fakultas}}">
                                        @error('fakultas')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </div>

                        <!-- jurusan -->
                        <div class="form-group">
                            <tr>
                                <td>
                                    <label for="jurusan">jurusan</label>
                                </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td>
                                    <div>
                                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror"
                                            id="jurusan" name="jurusan" value="{{old('jurusan')?? $mahasiswa->jurusan}}">
                                        @error('jurusan')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </div>

                        <!-- ipk -->
                        <div class="form-group">
                            <tr>
                                <td>
                                    <label for="ipk">ipk</label>
                                </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-control @error('ipk') is-invalid @enderror"
                                            id="ipk" name="ipk" value="{{old('ipk')?? $mahasiswa->ipk}}">
                                        @error('ipk')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>
                        </div>
                    </table>

                    <!-- tombol -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>    
            </div>
        </div>

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection


