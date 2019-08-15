<!-- Sidebar  -->



<nav id="sidebar" class="primary-color1-background">
    <button type="button" id="sidebarCollapse" class="btn collpase-button">
        <i class="fas fa-grip-lines"></i>
        
    </button>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-home"></i>
                <p class="menu-name">Home</p>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a class="primary-color1-background" href="#">Home 1</a>
                </li>
                <li>
                    <a class="primary-color1-background" href="#">Home 2</a>
                </li>
                <li>
                    <a class="primary-color1-background" href="#">Home 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-briefcase"></i>
                <p class="menu-name">About</p>
            </a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-copy"></i>
                <p class="menu-name">Pages</p>
            </a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a class="primary-color1-background" href="#">Page 1</a>
                </li>
                <li>
                    <a class="primary-color1-background" href="#">Page 2</a>
                </li>
                <li>
                    <a class="primary-color1-background" href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-image"></i>
                <p class="menu-name">Portfolio</p>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-question"></i>
                <p class="menu-name">FAQ</p>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-paper-plane"></i>
                <p class="menu-name">Contact</p>
            </a>
        </li>
    </ul>

</nav>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>