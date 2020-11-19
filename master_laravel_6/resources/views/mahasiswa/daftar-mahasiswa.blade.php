@extends('layouts.app')

@section('content')
     <!-- content -->
     <div class="container">
        <div class="row">
            <div class="content col-lg-10 col-sm-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">Data Seluruh Mahasiswa </h2>
                </div>

                <!--Success Message Alert -->
                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{session()->get('pesan')}}
                    </div>
                @endif

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col"> </th>
                        <th scope="col">NIM Mahasiswa</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><a href="{{route('viewMahasiswa',['nim'=>$mahasiswa->id])}}">{{$mahasiswa->nim}}</a></td>
                            <td><a href="{{route('viewMahasiswa',['nim'=>$mahasiswa->id])}}">{{$mahasiswa->nama}}</a></td>
                            <td>{{$mahasiswa->fakultas}}</td>
                            <td>{{$mahasiswa->jurusan}}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('mahasiswa.edit',['mahasiswa' => $mahasiswa->id])}}">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{route('mahasiswa.delete',['id' => $mahasiswa->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger ml-3">hapus</button>
                                </form> 
                            </td>
                        </tr>
                        @empty
                        <td colspan="4" class="text-center">Data mahasiswa tidak ada...</td>                
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
       
