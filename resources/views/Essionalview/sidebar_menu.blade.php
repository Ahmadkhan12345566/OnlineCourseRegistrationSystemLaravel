<li class="{{ (Request::is('/') | Request::is('home')) ? 'active' : '' }}"><a href="{{url('home')}}"><i
                class="fa fa-play"></i> <span>Introduction</span></a></li>

<li class="treeview {{ (Request::is('department') |
                        Request::is('program/*') |
                        Request::is('program') |
                        Request::is('semestersession') |
                        Request::is('instructor') |
                        Request::is('user') |
                        Request::is('student') |
                        Request::is('status') |
                        Request::is('remaks') |
                        Request::is('roles') |
                        Request::is('regcourses') |
                        Request::is('login/*') |
                        Request::is('offerdcourses') |
                        Request::is('course')


                        ) ? 'active' : '' }}">
    <a href="#"><i class="fa fa-user"></i> <span>Management Operations</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <?php
        $role = Session::get('id');
        if( $role == 1){
        ?>
        <li class="{{ (Request::is('login/valid')||Request::is('department')) ? 'active' : '' }}"><a
                    href="{{url('department')}}"><i class="fa fa-building"></i>Department</a></li>

        <li class="{{ (Request::is('program/*') | Request::is('program')) ? 'active' : '' }}"><a
                    href="{{url('program')}}"><i class="fa fa-tasks"></i>Program</a></li>
        <li class="{{ Request::is('semestersession') ? 'active' : '' }}"><a href="{{url('semestersession')}}"><i
                        class="fa fa-globe"></i>SemesterSession</a></li>
        <li class="{{ Request::is('instructor') ? 'active' : '' }}"><a href="{{url('instructor')}}"><i
                        class="fa fa-users"></i>Instructor</a></li>
        <li class="{{ Request::is('course') ? 'active' : '' }}"><a href="{{url('course')}}"><i class="fa fa-book"></i>Course</a>
        </li>
        <li class="{{ Request::is('user') ? 'active' : '' }}"><a href="{{url('user')}}"><i
                        class="fa fa-book"></i>User</a></li>
        <li class="{{ Request::is('student') ? 'active' : '' }}"><a href="{{url('student')}}"><i class="fa fa-book"></i>Student</a>
        </li>
        <li class="{{ Request::is('status') ? 'active' : '' }}"><a href="{{url('status')}}"><i class="fa fa-book"></i>Status</a>
        </li>
        <li class="{{ Request::is('roles') ? 'active' : '' }}"><a href="{{url('roles')}}"><i class="fa fa-book"></i>Roles</a>
        </li>
        <li class="{{ Request::is('remaks') ? 'active' : '' }}"><a href="{{url('remaks')}}"><i class="fa fa-book"></i>Remaks</a>
        </li>


        <?php }
        elseif ($role == 2) {
            ?>

            <li class="{{ (Request::is('login/valid')||Request::is('offerdcourses')) ? 'active' : '' }}"><a
                        href="{{url('offerdcourses')}}"><i class="fa fa-building"></i>Offerd courses</a></li>


 <?php }
        elseif($role == 3){
        ?>




            <li class="{{ (Request::is('login/valid')||Request::is('regcourses')) ? 'active' : '' }}"><a
                        href="{{url('regcourses')}}"><i class="fa fa-building"></i>Regcourses</a></li>
        <?php }
        ?>

    </ul>
</li>
