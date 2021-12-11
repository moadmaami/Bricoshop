@extends('backend.layouts.app')

@section('content-header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active">Nouveau bannière</li>
</ol>
@endsection

@section('content')
<div class="card">
    <div class="card-title">
        <h4 class="card-title">Nouveau bannière</h4>
    </div>
    <br><br>
    <div class="card-body">
        <div class="basic-form">
            <form method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Titre</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control input-default" value="{{ old('title') }}" placeholder="Titre">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" name="slug" class="form-control input-default" value="{{ old('slug') }}" placeholder="Slug">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control input-default" placeholder="Description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 ">Status</label>
                    
                    <div class="col-sm-10">
                        <select name="status" class="form-control input-default">
                            <option value="" disabled selected>--Status--</option>
                            <option value="active" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-2 ">Condition</label>
                    
                    <div class="col-sm-10">
                        <select name="condition" class="form-control input-default">
                            <option value="" disabled selected>--Condition--</option>
                            <option value="banner" {{ old('condition')=='banner' ? 'selected' : '' }}>Banner</option>
                            <option value="promo" {{ old('condition')=='promo' ? 'selected' : '' }}>Promote</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" class=" input-default" value="{{ old('photo') }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection