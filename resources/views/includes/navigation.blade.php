<!-- Main Sidebar -->
<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="index.html" class="sidebar-brand">
                <i class="gi gi-book_open"></i><span class="sidebar-nav-mini-hide"><strong>Gestion</strong> Ecole</span>
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                <div class="sidebar-user-avatar">
                    <a href="page_ready_user_profile.html">
                        <img src="/admin/img/placeholders/avatars/avatar2.jpg" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">{{ Auth::user()->name }}</div>
                <div class="sidebar-user-links">
                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>

                    <form class="" action="{{ route('logout') }}" method="post" style="display: none;" id="logout">
                        @csrf

                    </form>

                    <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="bottom" title="Logout" onclick="event.preventDefault();
                                document.getElementById('logout').submit();">
                        <i class="gi gi-exit"></i>

                    </a>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href=" {{ route('home') }} " class="{{  Request::route()->named('home') ? 'active' : '' }}"><i class="gi gi-stopwatch sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">Enseignant</span>
                </li>
                <!-- <li>
                    <a href="{{ route('matiere') }}" class="{{  Request::route()->named('matiere') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Matières</span></a>
                </li> -->
                <li>
                    <a href="{{ route('cours') }}" class="{{  Request::route()->named('cours') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Cours</span></a>
                </li>
                <!-- <li>
                    <a href="{{ route('presence') }}" class="{{  Request::route()->named('presence') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Présence</span></a>
                </li> -->
                <li>
                    <a href="{{ route('homework') }}" class="{{  Request::route()->named('homework') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Exercices</span></a>
                </li>
                <li>
                    <a href="{{ route('note') }}" class="{{  Request::route()->named('note') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Attribuer notes</span></a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">élève</span>
                </li>
                <li>
                    <a href="{{ route('eleve.cours') }}" class="{{  Request::route()->named('eleve.cours') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mes cours</span></a>
                </li>
                <!-- <li>
                    <a href="{{ route('presence') }}" class=""><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mes évaluations</span></a>
                </li> -->
                <li>
                    <a href="{{ route('eleve.work') }}" class="{{  Request::route()->named('eleve.work') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mes exercices</span></a>
                </li>
                <li>
                    <a href="{{ route('reponse') }}" class="{{  Request::route()->named('reponse') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mes réponses</span></a>
                </li>
                <li>
                    <a href="{{ route('eleve.emploi') }}" class="{{  Request::route()->named('eleve.emploi') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mon emploi du temps</span></a>
                </li>
                <li>
                    <a href="{{ route('eleve.note') }}" class="{{  Request::route()->named('eleve.note') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Mes notes</span></a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix"><a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a><a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">Administrateur</span>
                </li>
                <li>
                    <a href="{{ route('admin.eleve') }}" class="{{  Request::route()->named('admin.eleve') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Ajouter un étudiant</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.matiere') }}" class="{{  Request::route()->named('admin.matiere') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Matières</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.emploi') }}" class="{{  Request::route()->named('admin.emploi') ? 'active' : '' }}"><i class="gi gi-book_open sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Emploi du temps</span></a>
                </li>
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->