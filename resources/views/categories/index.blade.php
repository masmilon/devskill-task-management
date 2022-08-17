@extends('layouts.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories</h1>
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
            <a href="{{ url('/categories/create') }}" class="btn btn-info float-right">Create new category</a>
            <table class="table">
                <tr>
                    <td>SL</td>
                    <td>Name</td>
                    <td>Action</td>
                </tr>

                @php
                $sl = 1;
                @endphp
                @forelse ($category_list as $category)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ url("/categories/$category->id/edit") }}">Edit</a>
                        <form onSubmit="return confirm('Do you want to delete this category?') " action="{{ url("/categories/$category->id") }}" method="POST" >
                            @csrf
                            @method("delete")
                            <input class="btn btn-danger btn-sm" type="submit" name="" value="Delete">
                        </form>
                    </td>
                    @empty
                <tr>
                    <td colspan="3">No category found</td>
                </tr>
                </tr>
                @endforelse

            </table>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
</section>
@endsection
