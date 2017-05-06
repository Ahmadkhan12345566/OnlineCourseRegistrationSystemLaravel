
@extends('master.index')
@section('title', 'Students')


@section('page_header_title', 'Manage Students')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">
            <p>Total Students are <span>0</span></p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Reg Number</th>

                    <th>Program</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>

                <?php $order = 0; ?>
                @foreach($data['student'] as $key)
                    <tr>
                        <td>{{ ++$order }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->student_reg_no}}</td>
                        <td>{{ $key->program->title }}</td>
                        <td>
                            <a href="#">
                                <button class="btn btn-default" data-target="#updateProgramModel" data-toggle="modal"><i class="fa fa-pencil" ></i></button>
                            </a>
                        </td>
                        <td>
                            <a href="#">
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Student Name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    <div class="form-group">
                        <label for="regno">Student RegNO:</label>
                        <input type="text" class="form-control" id="regno">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Program</label>
                        <select class="form-control" id="exampleSelect1">
                            <option>Computing science</option>
                            <option>Electrical eng</option>
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