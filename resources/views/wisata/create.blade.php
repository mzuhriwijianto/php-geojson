@extends('layouts.app')

@section('css_custom')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.3.4/dist/select2-bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> Add Wisata </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('wisata.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-2">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Wisata">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input id="lokasi" name="lokasi" type="text" class="form-control" placeholder="Masukkan Lokasi">
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="description" class="col-sm-2 col-form-label">Cover</label>
                                <div class="col-sm-10">
                                    <input id="description" name="description" type="text" class="form-control" placeholder="description">
                                </div>
                            </div>
                            {{-- <div class="form-group row mb-2">
                                <label for="cover" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select id="category" name="category[]" type="file" multiple class="form-control">
                                        @foreach ($category as $cat)
                                            @foreach (old('category') ?? [] as $oldId)
                                                @if ($cat->id == $oldId)
                                                    <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <option></option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark mb-2" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js_custom')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(function(){
        $('#category').select2({
            placeholder: 'Pilih kategori',
            ajax: {
                url: '{{ route('category.all') }}',
                processResults: function(data){
                    return {
                        results: data.map(function(item){
                            return {
                                id: item.id,
                                text: item.name
                            }
                        })
                    }
                }
            }
        })
    })
</script>
@endsection
