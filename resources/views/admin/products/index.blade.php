@extends('admin.layouts.master')
@section('title')
    All Products
@stop
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Product Name
                        </th>
                        <th>
                            Product Photo
                        </th>
                        <th  style="width: 30%">
                            Description
                        </th>
                        <th>
                            Product Price
                        </th>
                        <th>
                            Settings
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$product->name}}
                            </a>
                            <br/>
                            <small>
                                Created {{$product->created_at}}
                            </small>
                        </td>
                        <td>
                             <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                        </td>
                        <td>
                            {{$product->short_description}}
                        </td>
                        <td>
                            {{$product->price}} $
                            <br>
                           Discount: {{$product->discount}} %
                        </td>
                        <td class="project-actions text-right">
                            <form method="Post" action="{{route('admin.products.destroy',$product->id)}}">
                                @csrf
                                @method('delete')
                                <a class="btn btn-info btn-sm" href="{{route('admin.products.edit',$product->id)}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash">
                                    </i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{$products->links()}}
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@stop

@section('cssCode')
    <style>
        .product-currency {
            color: #55535d;
            font-weight: bold;
        }

        .product-discount {
            color: red;
        }
    </style>
@endsection
