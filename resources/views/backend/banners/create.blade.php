@extends('backend.layouts.app')

@section('styles')
   <!-- Summernote -->
   <link href="{{ asset('assets/vendor/summernote/summernote.css') }}" rel="stylesheet">
@endsection

@section('content-header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Nouveau bannière</li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Nouveau bannière</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('banner.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="">Titre</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Titre">
                </div>
                <div class="form-group">
                    <label class="">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="Slug">
                </div>
                <div class="form-group">
                    <label class="">Description</label>
                    <textarea id="summernote" name="description" class="form-control summernote" placeholder="Description" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label class="">Status</label>
                        <select name="status" class="form-control">
                            <option value="" disabled selected>--Status--</option>
                            <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-form-label col-sm-2 ">Condition</label>
                    
                    <div class="col-sm-10">
                        <select name="condition" class="form-control input-default">
                            <option value="" disabled selected>--Condition--</option>
                            <option value="banner" {{ old('condition')=='banner' ? 'selected' : '' }}>Banner</option>
                            <option value="promo" {{ old('condition')=='promo' ? 'selected' : '' }}>Promote</option>
                        </select>
                    </div>
                </div> --}}
                <div class="form-group">
                    <label class="">Photo</label>
                    <input type="file" class="form-control" value="{{ old('photo') }}" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')  
    <!-- Summernote -->
    <script src="{{ asset('assets/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('assets/js/plugins-init/summernote-init.js') }}"></script>
@endsection