<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
      <div class="sidebar-brand">
        <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link" href="{{ Route('dashboard') }}">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
          </svg> Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ Route('products') }}">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
          </svg> Products</a></li>
      <li class="nav-item"><a class="nav-link" href="typography.html">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
          </svg> Typography</a></li>
      <li class="nav-title">Components</li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> Base</a>
        <ul class="nav-group-items compact">
          <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Accordion</a></li>
          <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
          <li class="nav-item"><a class="nav-link" href="https://coreui.io/bootstrap/docs/components/calendar/" target="_blank"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Calendar
              <svg class="icon icon-sm ms-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-external-link"></use>
              </svg><span class="badge badge-sm bg-danger ms-auto">PRO</span></a></li>
          <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Cards</a></li>
          <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Carousel</a></li>
          <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Collapse</a></li>
          <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> List group</a></li>
          <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Navs &amp; Tabs</a></li>
          <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Pagination</a></li>
          <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Placeholders</a></li>
          <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Popovers</a></li>
          <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Progress</a></li>
          <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Spinners</a></li>
          <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tables</a></li>
          <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Tooltips</a></li>
        </ul>
      </li>
    </ul>
    <div class="sidebar-footer border-top d-none d-md-flex">
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
</div>
