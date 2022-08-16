@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Blank Page</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-tools">
                <button class="btn btn-tool" type="button" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button class="btn btn-tool" type="button" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-primary col-md-6">
                <div class="card-header">
                    <h3 class="card-title">Create new category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('/categories') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categoryName">Category name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="categoryName" placeholder="Enter category name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                    <!-- showing all errors at once -->
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                    </ul>
            </div>
            @endif --}}


            </form>
        </div>
    </div>
    <div class="card-footer">

    </div>
    </div>
</section>
@endsection
