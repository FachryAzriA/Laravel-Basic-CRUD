@extends('layouts.app')

@section('content')
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="content col-lg-10 col-sm-12">
                    <form action="{{route('mahasiswa.viewAll')}}" method="GET">
                        <table>
                            <tr>
                                <td> Nama Mahasiswa </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->nama}} </td>
                            </tr>
                            <tr>
                                <td> Nomor Induk Mahasiswa </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->nim}} </td>
                            </tr>
                            <tr>
                                <td> Tempat, Tanggal Lahir  </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->tempat_lahir}}, {{$mahasiswa->tanggal_lahir}} </td>
                            </tr>
                            <tr>
                                <td> Fakultas  </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->fakultas}} </td>
                            </tr>
                            <tr>
                                <td> Jurusan  </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->jurusan}} </td>
                            </tr>
                            <tr>
                                <td> Indeks Prestasi Kumulatif  </td>
                                <td> &nbsp;:&nbsp; </td>
                                <td> {{$mahasiswa->ipk}} </td>
                            </tr>
                        </table>
                        <br>
                        <button type="submit" class="btn btn-primary">Kembali</button>
                    </form>
                </div>
            </div>
        </div>
 
@endsection
    



