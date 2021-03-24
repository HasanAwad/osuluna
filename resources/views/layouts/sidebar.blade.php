<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('assets/img/logo-small.png') }}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
            Usuluna
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('articles.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Articles</p>
                </a>
            </li>

            <li>
                <a href="{{ route('events.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Events</p>
                </a>
            </li>

            <li>
                <a href="{{ route('mediation.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Mediation Center Forms</p>
                </a>
            </li>

            <li>
                <a href="{{ route('contact_us.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Contact Us Forms</p>
                </a>
            </li>

            <li>
                <a href="{{ route('application_forms.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Application Forms</p>
                </a>
            </li>

            <li>
                <a href="{{ route('admins.index') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Admins</p>
                </a>
            </li>
        </ul>
    </div>
</div>
