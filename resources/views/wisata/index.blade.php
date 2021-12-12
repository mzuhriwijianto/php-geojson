@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <caption>Data Wisata</caption>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-3 col-lg-2">
                            <a href="{{route('wisata.create')}}" class="btn btn-dark btn-block-mb-2">Add Wisata</a>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Geografi</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($wisatas as $key => $wisatas)
                            <tr>
                                <th scope="row">{{ $wisatas->firstItem() + $key}}</th>
                                <td>{{$wisata->nama}}</td>
                                <td>
                                    @if ($wisata->geo)
                                        <img src="{{ asset('storage/'.$book->cover) }}" alt="Book Cover" width="100px">
                                    @else
                                        <span class="badge bg-danger">Cover belum diupload</span>
                                    @endif
                                </td>
                                <td>{{$wisata->lokasi}}</td>
                                <td>
                                    @forelse ($wisata->categories as $category)

                                    <li>{{ $category->name }}</li>

                                    @empty

                                    <li>Buku tidak memiliki kategori</li>

                                    @endforelse
                                </td>
                                <td>{{$wisata->created_at}}</td>
                                <td>{{$wisata->updated_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('wisata.edit', ['wisata'=>$wisata->id])}}" class="btn btn-primary"><b>Edit</b></a>
                                    @component('components.delete')
                                        @slot('url')
                                            {{ route('wisata.destroy', ['wisata'=>$wisata->id]) }}
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
                        {{ $wisatas->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
