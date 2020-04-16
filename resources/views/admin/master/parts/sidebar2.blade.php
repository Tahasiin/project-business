<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{url('dashboard')}}"><i class="fa fa-home back-icon"></i> <span>Back to Dashboard</span></a>
                </li>
                <li class="menu-title">Setup Home Template</li>
                <li class="{{ Request::is('templateHome') ? 'active' : '' }}">
                    <a href="{{url('templateHome')}}"><i class="fa fa-home"></i> <span>Home</span></a>
                </li>
                <li class="{{ Request::is('templateLogo') ? 'active' : '' }}">
                    <a href="{{url('templateLogo')}}"><i class="fa fa-image"></i> <span>Logo</span></a>
                </li>
                <li class="{{ Request::is('templateBanner') ? 'active' : '' }}">
                    <a href="{{url('templateBanner')}}"><i class="fa fa-image"></i> <span>Banner</span></a>
                </li>
                <li class="{{ Request::is('templateAbout') ? 'active' : '' }}">
                    <a href="{{url('templateAbout')}}"><i class="fa fa-users"></i> <span>About Us</span></a>
                </li>
                <li class="{{ Request::is('templateContact') ? 'active' : ''}}">
                    <a href="{{url('templateContact')}}"><i class="fa fa-address-book"></i> <span>Contact</span></a>
                </li>
                <li class="{{ Request::is('templateSolution') ? 'active' : ''}}">
                    <a href="{{url('templateSolution')}}"><i class="fa fa-address-book"></i> <span>Solution</span></a>
                </li>
                <li class="{{ Request::is('templateHowWorks') ? 'active' : ''}}">
                    <a href="{{url('templateHowWorks')}}"><i class="fa fa-info-circle"></i> <span>How it works?</span></a>
                </li>
                <li class="{{ Request::is('templateBuy') ? 'active' : ''}}">
                    <a href="{{url('templateBuy')}}"><i class="fa fa-info-circle"></i> <span>How to buy?</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
