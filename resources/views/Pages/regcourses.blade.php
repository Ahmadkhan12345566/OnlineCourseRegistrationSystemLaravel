@extends('master.index')
@section('title', 'offerdcourses')


@section('page_header_title', 'Manage Students')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Offerd Courses</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">
            <p>Total Registered courses are <span>0</span></p>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Cradit Hr.</th>
                    <th>Status</th>
                    <th>Remarks</th>
                </tr>


                    <tr>
                        <td>1</td>
                        <td>ITP</td>
                        <td>intro to computing</td>
                        <td>4</td>
                        <td>pass</td>
                        <td>R-0</td>

                    </tr>
                <?php $order = 0; ?>

                @foreach($data as $key)


                    <tr>
                        <td>{{ ++$order }}</td>
                        <td><?php
                                $id = $key->offer_course->course_id;
                            echo \App\Course::all()->where('id', '=', $id)->first()->code;
                            ?>
                        </td> <td><?php
                                $id = $key->offer_course->course_id;
                            echo \App\Course::all()->where('id', '=', $id)->first()->title;
                            ?>
                        </td> <td><?php
                                $id = $key->offer_course->course_id;
                            echo \App\Course::all()->where('id', '=', $id)->first()->credit_hours;
                            ?></td>
                        <td>{{ $key->status->title }}</td>
                        <td>{{ $key->remark->title }}</td>

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
                    <h5 class="modal-title">Add New Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="panel-body">
                        <p>Total Registered courses are <span>0</span></p>
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Title</th>
                                <th>Cradit Hr.</th>
                                <th>Instructoer</th>
                                <th>check</th>

                            </tr>


                            <tr>
                                <td>1</td>
                                <td>ITP</td>
                                <td>intro to computing</td>
                                <td>4</td>
                                <td>Asad Hanif</td>
                                <td><input type="checkbox" aria-label="..."></td>


                            </tr>


                        </table>
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