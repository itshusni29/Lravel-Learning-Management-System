<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">web apps</li>


      <li class="nav-item {{ active_class(['users*']) }}">
          <a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="{{ is_active_route(['users*']) }}" aria-controls="users">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Users</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse {{ show_class(['users*']) }}" id="users">
              <ul class="nav sub-menu">
                  <li class="nav-item">
                      <a href="{{ route('users.index') }}" class="nav-link {{ active_class(['users']) }}">All Users</a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('users.create') }}" class="nav-link {{ active_class(['users/create']) }}">Add Users</a>
                  </li>
              </ul>
          </div>
      </li>


      <li class="nav-item {{ active_class(['Trainer/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#Trainer" role="button" aria-expanded="{{ is_active_route(['Trainer/*']) }}" aria-controls="Trainer">
          <i class="link-icon" data-feather="user-check"></i>
          <span class="link-title">Trainer</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['Trainer/*']) }}" id="Trainer">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/Trainer/inbox') }}" class="nav-link {{ active_class(['Trainer/inbox']) }}">All Trainer</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/Trainer/read') }}" class="nav-link {{ active_class(['Trainer/read']) }}">Add Trainer</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ active_class(['course/*']) }}">
    <a class="nav-link" data-bs-toggle="collapse" href="#course" role="button" aria-expanded="{{ is_active_route(['course/*']) }}" aria-controls="course">
        <i class="link-icon" data-feather="book"></i>
        <span class="link-title">Courses</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse {{ show_class(['course/*']) }}" id="course">
        <ul class="nav sub-menu">
            <li class="nav-item">
                <a href="{{ url('/courses') }}" class="nav-link {{ active_class(['course']) }}">All Courses</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/courses/create') }}" class="nav-link {{ active_class(['course/create']) }}">Add Course</a>
            </li>
        </ul>
    </div>
</li>


      <li class="nav-item {{ active_class(['Module/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#Module" role="button" aria-expanded="{{ is_active_route(['Module/*']) }}" aria-controls="Module">
          <i class="link-icon" data-feather="youtube"></i>
          <span class="link-title">Module</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['Module/*']) }}" id="Module">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/Module/inbox') }}" class="nav-link {{ active_class(['Module/inbox']) }}">All Module</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/Module/read') }}" class="nav-link {{ active_class(['Module/read']) }}">Add Module</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ active_class(['Test/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#Test" role="button" aria-expanded="{{ is_active_route(['Test/*']) }}" aria-controls="Test">
          <i class="link-icon" data-feather="edit"></i>
          <span class="link-title">Test</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['Test/*']) }}" id="Test">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/Test/inbox') }}" class="nav-link {{ active_class(['Test/inbox']) }}">All Test</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/Test/read') }}" class="nav-link {{ active_class(['Test/read']) }}">Add Test</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ active_class(['Evaluation/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#Evaluation" role="button" aria-expanded="{{ is_active_route(['Evaluation/*']) }}" aria-controls="Evaluation">
          <i class="link-icon" data-feather="star"></i>
          <span class="link-title">Evaluation</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['Evaluation/*']) }}" id="Evaluation">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/Evaluation/inbox') }}" class="nav-link {{ active_class(['Evaluation/inbox']) }}">All Evaluation</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/Evaluation/read') }}" class="nav-link {{ active_class(['Evaluation/read']) }}">Add Evaluation</a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ active_class(['Attendance/*']) }}">
        <a class="nav-link" data-bs-toggle="collapse" href="#Attendance" role="button" aria-expanded="{{ is_active_route(['Attendance/*']) }}" aria-controls="Attendance">
          <i class="link-icon" data-feather="log-in"></i>
          <span class="link-title">Attendance</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['Attendance/*']) }}" id="Attendance">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/Attendance/inbox') }}" class="nav-link {{ active_class(['Attendance/inbox']) }}">All Attendance</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/Attendance/read') }}" class="nav-link {{ active_class(['Attendance/read']) }}">Add Attendance</a>
            </li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>
</nav>
