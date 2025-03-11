<aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
    <div class="sidebar" style="height: 939px; overflow: hidden; width: auto;">
        <div class="d-flex hv-100 align-items-stretch">
            <div class="indigo text-white">
                <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">

                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true"><i class="icon-inbox2"></i></a>

                    <a href="#">
                        <figure class="avatar">
                            <span class="avatar-letter avatar-letter-n circle"></span>
                            <span class="avatar-badge online"></span>
                        </figure>
                    </a>
                    <a class="nav-link" id="btn-logout" href="#" role="tab" aria-controls="v-pills-home"
                        aria-selected="true"><i class="icon-power-off"></i></a>
                </div>
            </div>

            <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <div class="relative brand-wrapper sticky b-b">
                        <div class="d-flex justify-content-between align-items-center p-3">
                            <div class="text-xs-center">
                                <span class="font-weight-lighter s-18">Menu</span>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="treeview">
                            <a href="<?= base_url('/') ?> ">
                                <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview"><a href="#">
                                <i class="icon icon-package s-24"></i>
                                <i class=" icon-angle-left  pull-right"></i>
                                <span>Input Data</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?= $active == 'data testing' ? 'active' :'' ?>"><a
                                        href="<?= base_url('data-testing') ?>"><i class="icon icon-circle-o"></i>Data
                                        Testing</a>
                                </li>
                                <li class="<?= $active == 'data training' ? 'active' :'' ?>"><a
                                        href="<?= base_url('data-training') ?>"><i class="icon icon-circle-o"></i>Data
                                        Training</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="relative brand-wrapper sticky b-b p-3">
                        <form>
                            <div class="form-group input-group-sm has-right-icon">
                                <input class="form-control form-control-sm light r-30" placeholder="Search" type="text">
                                <i class="icon-search"></i>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</aside>

<a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
    <i></i>
</a>