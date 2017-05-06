
@extends('master.index')
@section('title', 'Courses')


@section('page_header_title', 'Manage Programs')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">There are total <span class="text-bold">{{ sizeof($data['course']) }}</span> Courses.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Code</th>
                    <th>Cradithours</th>
                    <th>CourseSemester</th>

                    <th>Program</th>

                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>
                <?php $order = 0; ?>
                @foreach($data['course'] as $key)
                <tr>
                    <td>{{ ++$order }}</td>
                    <td>{{ $key->title }}</td>
                    <td>{{ $key->code }}</td>
                    <td>{{ $key->credit_hours }}</td>
                    <td>{{ $key->semester_id }}</td>


                    <td>{{ $key->program->title}}</td>

                    <td>
                        <a href="#">
                            <button class="btn btn-default" data-toggle="modal" data-target="#updatecourseModel"><i class="fa fa-pencil"></i></button>
                        </a>
                    </td>
                    <td>
                        <a href="course/delete/{{ $key->id }}">
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

    <!--Add New Course  Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('course/create') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                            <label for="title">Course Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    <div class="form-group">
                        <label for="code">Course Code:</label>
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                    <div class="form-group">
                        <label for="semester_id">Course Semester:</label>
                        <input type="text" class="form-control" id="semester_id" name="semester_id">
                    </div>

                    <div class="form-group">
                        <label for="credit_hours">Cradit Hours</label>
                        <select class="form-control" id="credit_hours" name="credit_hours">
                            <option value="4">4</option>
                            <option>2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="program">Program</label>
                        <select class="form-control" id="program" name="program">
                            @foreach($data['program'] as $key)
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


    <!--Update New Course  Modal -->
    <div class="modal fade" id="updatecourseModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form  >
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Course Title:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="code">Course Code:</label>
                            <input type="text" class="form-control" id="code" name="code">
                        </div>

                        <div class="form-group">
                            <label for="credit_hours">Cradit Hours</label>
                            <select class="form-control" id="credit_hours" name="credit_hours">
                                <option value="4">4</option>
                                <option>2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="instructor">Instructor</label>
                            <select class="form-control" id="instructor" name="instructor">
                                @foreach($data['instructor'] as $key)
                                    <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="program">Program</label>
                            <select class="form-control" id="program" name="program">
                                @foreach($data['program'] as $key)
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