@extends('admin.layouts.master')
@section('title')
    All Users
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        @include('admin.layouts.messages')
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="col-2 ">
                    <a href="{{route('admin.users.create')}}">
                        <button type="button" class="btn btn-block btn-success">Add new</button>
                    </a>
                </div>
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
                            Roles
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                <a>
                                    {{$user->name}}
                                </a>
                            </td>
                            <td>
                                <ul>
                                    @foreach($user->roles as $role)
                                        <li>{{$role->name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="project-actions text-center">
                                {{--@can('edit-users')--}}
                                @can('update',Auth::user())
                                    <a class="btn btn-sm btn-primary float-left"
                                       href="{{route('admin.users.edit',$user->id)}}">Edit</a>
                                @endcan
                                {{--@can('delete-users')--}}
                                @can('delete',Auth::user())
                                    <form method="Post" action="{{route('admin.users.destroy',$user->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger float-left">Delete</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@stop

@section('cssCode')
    <style>
    </style>
@endsection