<aside>
    <div id="sidebar" class="nav-collapse " style="z-index: 1;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered">
                <a href="/admin">
                    <img src="assets/img/logo.png" class="img-circle"
                         style="background: white;"
                         width="60"></a></p>
            <h5 class="centered">ATK-TRUYỆN</h5>

            <li class="mt">
                <a class="active" href="/admin">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tags"></i>
                    <span>Category</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('category.index')}}">List</a></li>
                    <li><a href="{{route('category.create')}}">Create</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-pencil-square-o"></i>
                    <span>Author</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('author.index')}}">List</a></li>
                    <li><a href="{{route('author.create')}}">Create</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-file-text-o"></i>
                    <span>Chapter</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('chapter.index')}}">List</a></li>
                    <li><a href="{{route('chapter.create')}}">Create</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Story</span>
                </a>
                <ul class="sub">
                    <li><a href="{{route('story.index')}}">List</a></li>
                    <li><a href="{{route('story.create')}}">Create</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="/">
                    <i class="fa fa-star"></i>
                    <span>About</span>
                </a>
            </li>



        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
