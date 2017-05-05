@extends('master.index')
@section('title', 'Semestersession')


@section('page_header_title', 'Manage Semestersession')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">
            <p class="text-danger">There are total <span class="text-bold">{{ sizeof($data) }}</span> Sessions.</p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Manage</th>
                </tr>

                <?php $order = 0; ?>
                @foreach($data as $key)
                <tr>
                    <td>{{ ++$order }}</td>
                    <td id="session_name">{{ $key->title }}</td>
                    <td>
                        <a href="#">
                            <button class="btn btn-default" data-toggle="modal" data-target="#updatesemestersessionModel"><i class="fa fa-pencil"></i></button>
                        </a>
                    </td>
                    <td>
                        <a href="semestersession/delete/{{ $key->id }}">
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

    <!-- Add New Semestersession Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('semestersession/create') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Session Title:</label>
                            <input type="text" class="form-control" id="name"  name="name">
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


    <!-- Update Semestersession Modal -->
    <div class="modal fade" id="updatesemestersessionModel" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('semestersession/create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Session Title:</label>
                            <input type="text" class="form-control" id="name"  name="name">
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