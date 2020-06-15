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
              Name
            </th>
            <th>
              Email
            </th>
            <th>
              Address
            </th>
            <th>
              Message
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($contacts as $contact)
            <tr>
              <td>
                {{$loop->iteration}}
              </td>
              <td>
                <a>
                  {{$contact->name}}
                </a>
                <br/>
                <small>
                  Created {{$contact->created_at}}
                </small>
              </td>
              <td>
                {{$contact->email}}
              </td>
              <td>
                {{$contact->address}}
              </td>
              <td>
                {{$contact->message}}
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
