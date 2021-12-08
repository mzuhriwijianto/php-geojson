@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <caption>Daftar Wisata Bojonegoro</caption>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-3 col-lg-2">
                            <a href="{{route('maps.create')}}" class="btn btn-dark btn-block-mb-2">Tambah Wisata</a>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mt-2">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table table-striped mt-2">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Wisata</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Deskripsi Wisata</th>
                            <th scope="col">Geo</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($maps as $key => $maps)
                            <tr>
                                <th scope="row">{{ $maps->firstItem() + $key}}</th>
                                <td>{{$maps->nama}}</td>
                                <td>{{$maps->lokasi}}</td>
                                <td>{{$maps->description}}</td>
                                <td>{{$maps->geo}}</td>
                                <td>{{$maps->created_at}}</td>
                                <td>{{$maps->updated_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('maps.edit', ['maps'=>$maps->id])}}" class="btn btn-primary"><b>Edit Lokasi</b></a>
                                    @component('components.delete')
                                        @slot('url')
                                            {{ route('maps.destroy', ['maps'=>$maps->id]) }}
                                        @endslot
                                        @slot('value')
                                            Hapus
                                        @endslot
                                    @endcomponent
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Data empty</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $maps->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
