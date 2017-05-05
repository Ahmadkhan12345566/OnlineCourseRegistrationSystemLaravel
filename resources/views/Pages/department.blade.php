@extends('master.index')
@section('title', 'Departments')
@section('css')
    <style>
        .blink_me {
            -webkit-animation-name: blinker;
            -webkit-animation-duration: 1s;
            -webkit-animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;

            -moz-animation-name: blinker;
            -moz-animation-duration: 1s;
            -moz-animation-timing-function: linear;
            -moz-animation-iteration-count: infinite;

            animation-name: blinker;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        @-moz-keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

        @-webkit-keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

        @keyframes blinker {
            0% { opacity: 1.0; }
            50% { opacity: 0.0; }
            100% { opacity: 1.0; }
        }

        .color-yellow{
            color: #cbc308;
        }

    </style>
    @stop


@section('page_header_title', 'Manage Departments')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#newDepartmentModel"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    @if(session('alert_success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ session('alert_success') }}
        </div>
    @endif
    @if(session('alert_info'))
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Success!</strong> {{ session('alert_info') }}
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
            <p class="text-danger">There are total <span class="text-bold">{{ sizeof($data) }}</span> Departments.</p>
            <table class="table" id="department-data">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>
                <?php $order = 0; ?>
                @foreach($data as $key)
                <tr>
                    <td>{{ ++$order }}</td>
                    <td id="department_name">{{ $key->title }}</td>
                    <td>
                        <a href="#">
                            <button class="btn  btn-default edit-department" data-toggle="modal" data-target="#updateDepartmentModel" id="{{ $key->id }}"><i class="fa fa-pencil"></i></button>
                        </a>
                    </td>
                    <td>
                        <button id="{{ $key->id }}" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#delete-department"><i class="fa fa-trash"></i></button>
                    </td>
                    <td>
                        <a href='program/{{ $key->id }}' id="delete-id">
                            <button class="btn btn-primary"><i class="fa fa-cog"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <?php
        $a = Session::get('id');
        echo $a;
      //  Session::forget('id');
        ?>
    </div>

@endsection


@section('extra_section')

    <!-- Add New Department Modal -->
    <div class="modal fade" id="newDepartmentModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('department/create') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Department Name:</label>
                            <input type="text" class="form-control" id="title" name="title">
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

    <!-- Update Department Modal -->
    <div class="modal fade" id="updateDepartmentModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update a Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="old-title">Department Name:</label>
                            <input type="text" class="form-control" id="old-title" name="title">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="edit-dept" class="btn btn-primary edit-dept">Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Model -->

    <!-- Delete Conformation Modal -->
    <div class="modal fade" id="delete-department" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-danger text-center"><i class="fa fa-exclamation-triangle color-yellow blink_me"></i>Warring</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p class="text-warning">
                                Deleting <code>Department</code> is serious operation
                                it's effect place on <code>Program</code>,<code>Course</code>
                                and other related attributes.
                            </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a id="delete-id-place">
                            <button type="submit" class="btn btn-primary">Agree</button>
                        </a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Not Agree</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- ./Model -->

@endsection

@section('custom_js')
    <script type="text/javascript">

        var token = '{{ Session::token() }}';
        var url = '{{ route('department/edit') }}';
        var dept_id = '';

        // Setup Ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Update the department
        $(document).on('click', '.edit-department',  function () {
            var department_id = $(this).attr('id');
            console.log(department_id);
            dept_id = department_id;
            $.get('department/'+department_id, function (data) {
                $('#old-title').val(data.title);
                console.log(data);
            });

        });


        // Handle Post Request (Edit Department)
        $(document).ready(function () {
            $('#edit-dept').click(function () {
                $.ajax({
                    method: 'POST',
                    url: url,
                    data: { id: dept_id, title: $('#old-title').val(), _token: token},
                    dataType: 'JSON'
                }).done(function (data) {
                    //console.log(data);
                });
            });
        });

        // Delete Department after Agreed
        $(document).ready(function () {
            $('.delete-btn').on('click', function () {
                var id = $(this).attr('id');
                var url = 'department/delete/'+id;
                $('#delete-id-place').attr('href', url);
            })
        });

    </script>
@endsection