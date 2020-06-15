@extends('admin.layouts.master')
@section('title')
    Edit User
@stop
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        @include('admin.layouts.messages')
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
                <form method="post" action="{{route('admin.users.update',$user->id)}}">
                @method('PUT')
                @csrf
                <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" id="name" name="name" value="{{$user->name}}"
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">User Email</label>
                                    <input type="email" id="email" name="email" value="{{$user->email}}"
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password">User Password</label>
                                    <input type="password" id="password" name="password" value=""
                                           class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">Password Confirmation</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                           value=""
                                           class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <a href="{{route('admin.dashboard')}}" class="btn btn-secondary">Cancel</a>
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