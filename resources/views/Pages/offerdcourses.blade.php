
@extends('master.index')
@section('title', 'offerdcourses')


@section('page_header_title', 'Manage Students')
@section('add_field_button')
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square-o"></i>&nbsp;&nbsp;Add New</button>
@endsection

@section('page_content_section')
    <div class="panel panel-default">
        <div class="panel-body">


            <table class="table">

                <tr>
                    <td>
                            <label for="exampleSelect1">Program</label>
                            <select  id="exampleSelect1">
                                <option>Computing science</option>
                                <option>Electrical eng</option>
                            </select>
                        </td>
                    <td>
                        <label for="exampleSelect1">Session</label>
                        <select  id="exampleSelect1">
                            <option>Summer2016</option>
                            <option>Fall2017</option>
                        </select>
                    </td>

                    <td>
                        <label for="exampleSelect1">action</label>
                        <select  id="exampleSelect1">
                            <option>Offered</option>
                            <option>All courses</option>
                        </select>
                    </td>
                    <td>
                        <a href="#">
                            <button class="btn btn-default" title="edit"><i class="fa fa-search"></i></button>
                        </a>
                    </td>


                </tr>

            </table>
        </div>

        <div class="panel-body">
            <h2>Total courses are <span>0</span></h2>
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>title</th>
                    <th>Program</th>
                    <th>Teacher</th>
                    <th>Credit Hr</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>


                    <tr>
                        <td>1</td>
                        <th>Intr to programing</th>
                        <th>Bs(cs)</th>
                        <th>Asad hanf</th>
                        <th>4</th>

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

                    </tr>


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
                    <h5 class="modal-title">New Offerd Courses</h5>
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