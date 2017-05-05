@extends('master.index')
@section('title', 'Programs')


@section('page_header_title', 'Manage Programs')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    @if(session('alert_success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ session('alert_success') }}
        </div>
    @endif
    @if(session('alert_danger'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Note!</strong> {{ session('alert_danger') }}
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">There are total <span class="text-bold">{{ sizeof($data['program']) }}</span> Programs.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>
                <?php $order = 0; ?>
                @foreach($data['program'] as $key)
                    <tr>
                        <td>{{ ++$order }}</td>
                        <td>{{ $key->title }}</td>
                        <td>{{ $key->department->title }}</td>
                        <td>
                            <a href="#">
                                <button class="btn btn-default" data-target="#updateProgramModel" data-toggle="modal"><i class="fa fa-pencil" ></i></button>
                            </a>
                        </td>
                        <td>
                            <a href='program/delete/{{ $key->id }}'>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <button class="btn btn-primary"><i class="fa fa-cog"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection


@section('extra_section')

    <!-- Modal  id="myModal" role="dialog -->

    <!-- Add New Program Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('program/create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Program Name:</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control" id="department" name="department">
                                @foreach($data['department'] as $key)
                                    <option value="{{ $key['id'] }}">{{ $key['title'] }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Model -->

    <!-- Update New Program Modal -->
    <div class="modal fade" id="updateProgramModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update New Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('program/create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Program Name:</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <select class="form-control" id="department" name="department">
                                @foreach($data['department'] as $key)
                                    <option value="{{ $key['id'] }}">{{ $key['title'] }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Model -->


@endsection