@extends('perpus.layout.layout')
@section('sidebar')
@section('buku',$active)
@endsection
{{-- @section('judul_navbar',$judul_navbar) --}}
@section('content')
<div class="content" style="margin-top: 80px;">
        <nav aria-label="breadcrumb" >
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/nasabah">Home</a></li>
            {{-- <li class="breadcrumb-item"><a href="/nasabah">Nasabah</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Nasabah</li>
          </ol>
        </nav>
        {{-- <div class="row"> --}}
        <div class="row">
         
          <div class="col-md-4">
            <div class="card card-user">
             <div class="card-header">
                <h6 class="card-title">Tambah Nasabah</h6>
                
                {{-- <p class="card-category">Tambah Nasabah</p> --}}
              </div>
             
              <div class="card-body">
                <form action="{{route('nasabah.store')}}" method="post">
                  {{ csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputPassword1">ID</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="id" >
                </div>
                <div class="form-group" >
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nama" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Hp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="hp">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                </div>
                
               
                <button type="submit" class="btn btn-primary" name="btnSimpan" value="Simpan">Simpan</button>
              </form> 
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                      {{session('status')}}
                    </div>
                @endif 
                <br>
                <div class="table-responsive">

                    
                  <table class="table">
                    <thead class=" text-primary">
                    {{-- <th>NO</th> --}}
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th colspan="2" class="text-center">Aksi</th>
                    </thead>
                    <tbody>

                    @foreach($nasabah as $no=>$b)
                      {{-- <th>{{$no+1}}</th> --}}
                      <th>{{$b->id}}</th>
                      <th>{{$b->nama}}</th>
                      <th>{{$b->hp}}</th>
                      <th>{{$b->alamat}}</th>
                      <th>
                        <a href="nasabah/{{$b->id}}/edit"><button class="btn btn-warning" type="submit">U</button></a>
                      </th>
                      <th>
                        <form action="{{ action('Con_nasabah@destroy', $b['id_buku'])}}" method="post">
                              {{ csrf_field()}}
                              <input name="_method" type="hidden" value="DELETE">
                              <button class="btn btn-danger" type="submit">H</button>
                            </form>
                      </th>
                    </tbody>
                     @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
@endsection
