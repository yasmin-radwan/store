@extends('admin.layouts.master')
@section('title')
  All Categories
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
              Category Name
            </th>
            <th>
              Category Code
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <td>
                {{$loop->iteration}}
              </td>
              <td>
                <a>
                  {{$category->name}}
                </a>
                <br/>
                <small>
                  Created {{$category->created_at}}
                </small>
              </td>
              <td>
                {{$category->code}}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
@stop
