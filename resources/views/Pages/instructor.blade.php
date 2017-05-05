@extends('master.index')
@section('title', 'Instructors')


@section('page_header_title', 'Manage Instructors')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">There are total <span class="text-bold">{{ sizeof($data['instructor']) }}</span> Instructors.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Instructor ID</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>
                <?php $order = 0; ?>
                @foreach($data['instructor'] as $key)
                <tr>
                    <td>{{ ++$order }}</td>
                    <td>{{ $key->name }}</td>

                    <td>{{ $key->department->title }}</td>
                    <td>{{ $key->instructor_id }}</td>
                    <td>
                        <a href="#">
                            <button class="btn btn-default" data-toggle="modal" data-target="#updateinstructorModel"> <i class="fa fa-pencil"></i></button>
                        </a>
                    </td>
                    <td>
                        <a href="instructor/delete/{{ $key->id }}">
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

    <!-- Add New Instructor  Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Instructor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('instructor/create') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Instructor Name:</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                    <div class="form-group">
                        <label for="instructoer_id">Instructor ID:</label>
                        <input type="text" class="form-control" name="instructoer_id" id="instructoer_id">
                    </div>
                    <div class="form-group">
                        <label for="user_id">User ID:</label>
                        <input type="text" class="form-control" name="user_id" id="user_id">
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

    <!-- Update Instructor  Modal -->
    <div class="modal fade" id="updateinstructorModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Instructor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('instructor/create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Instructor Name:</label>
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

@endsection