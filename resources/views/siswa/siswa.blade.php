@extends('layout')
@section('lt')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Advanced Tables
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                   
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Nisn</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>Id Kelas</th>
                                                <th>Alamat</th>
                                                <th>No Telpon</th>
                                                <th>Id Spp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                @foreach ($data as $item)
                                                    
                                                <tr>
                                                    <td>{{$item->nisn}}</td>
                                                    <td>{{$item->nis}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->id_kelas}}</td>
                                                    <td>{{$item->alamat}}</td>
                                                    <td>{{$item->no_telp}}</td>
                                                    <td>{{$item->id_spp}}</td>
                                                    <td>
                                                        <a href="{{url('/editsiswa/'.$item->nisn)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                                        <a href="hapussiswa/{{$item->nisn}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                        
                                        <a type="button" class="btn btn-primary" href="{{url('/tambahsiswa')}}">Tambah</a>
                                    </div>
                                </div>
                                <!--End Advanced Tables -->

                            </div>
                        </div>
                        <!-- /. ROW  -->
    
                    </div>
                </div>
            </div>
        </div>
@endsection
