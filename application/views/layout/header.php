<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('/'); ?>"><img src="<?= base_url('asset/images/Logo.png'); ?>" height="60" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item about-link"><a class="nav-link" href="javascript:void(0)">About <i class="bi bi-caret-down-fill"></i></a></li>

                <li class="nav-item audience-link"><a class="nav-link" href="javascript:void(0)">Services <i class="bi bi-caret-down-fill"></i></a></li>
                <li class="nav-item insights-link"><a class="nav-link" href="javascript:void(0)">Insights<i class="bi bi-caret-down-fill ms-1"></i></a></li>
                <li class="nav-item contact-link"><a class="nav-link" href="javascript:void(0)">Contact </a></li>
            </ul>
            <form class="d-flex search-box">
                <input type="text" placeholder="Search...">
                <i class="bi bi-search"></i>
            </form>
        </div>
    </div>
</nav>

<!-- Sidebar Dropdowns -->
<div class="sidebar-dropdown" id="aboutSidebar">
    <h3>Know Us Better</h3>
    <ul>
        <li><a href="<?php echo base_url('about/meettheteam'); ?>">Meet the Team</a></li>
        <!-- <li><a href="#">Our Journey</a></li> -->
        <li><a href="<?php echo base_url('about/bepartofus'); ?>">Be Part of Us</a></li>
    </ul>
</div>


<div class="sidebar-dropdown" id="audienceSidebar">
    <h3>Our Services</h3>
    <ul>
        <li><a href="<?php echo base_url('services/abm'); ?>">Account Based Marketing</a></li>
        <li><a href="<?php echo base_url('services/cs'); ?>">Content Syndication</a></li>
        <li><a href="<?php echo base_url('services/intent_inteligence'); ?>">Intent Intelligence</a></li>
        <li><a href="<?php echo base_url('services/em'); ?>">Email Marketing</a></li>
    </ul>
</div>
<div class="sidebar-dropdown" id="insightsSidebar">
    <h3>Insights Menu</h3>
    <ul>
        <li><a href="#">Insights Item 1</a></li>
        <li><a href="#">Insights Item 2</a></li>
        <li><a href="#">Insights Item 3</a></li>
    </ul>
</div>