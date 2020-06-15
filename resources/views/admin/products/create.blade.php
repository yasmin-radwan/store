@extends('admin.layouts.master')
@section('title')
    Add new Product
@stop
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Details</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-remove"></i></button>
                    </div>
                </div>
                <form method="post" enctype="multipart/form-data" action="{{route('admin.products.store')}}">
                @csrf
                <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Product Name</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Product Category</label>
                                    <select class="form-control custom-select" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Product Price</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="short_description">Product Short Description</label>
                                    <textarea id="short_description" name="short_description" class="form-control"
                                              rows="4">

                                </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="discount">Product Discount</label>
                                    <input type="text" id="discount" name="discount" class="form-control"
                                           value="">
                                </div>
                                <div class="form-group">
                                    <label for="details">Product Details</label>
                                    <textarea id="details" name="details" class="form-control" rows="4">

                                </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <a href="" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container-fluid -->

    </section>

    <!-- /.content -->
@stop