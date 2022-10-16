<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include("admin.include.admin_global_css")
</head>
<body>

        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container" data-layout="container">
                <script>
                    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                    if (isFluid) {
                        var container = document.querySelector('[data-layout]');
                        container.classList.remove('container');
                        container.classList.add('container-fluid');
                    }
                </script>
                <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                    <div class="d-flex align-items-center">
                        <div class="toggle-icon-wrapper">
                            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
                                <span class="navbar-toggle-icon">
                                    <span class="toggle-line"></span>
                                </span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="index.html">
                            <div class="d-flex align-items-center py-3">
                                <img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" />
                                <span class="font-sans-serif">falcon</span>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                        <div class="navbar-vertical-content scrollbar">
                            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                                <li class="nav-item">
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="{!! Route::current()->getName() == 'adminDashboard'? true : false !!}" aria-controls="dashboard">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-chart-pie"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Dashboard</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse {!! Route::current()->getName() == 'adminDashboard'? 'show' : '' !!}" id="dashboard">
                                        <li class="nav-item">
                                            <a class="nav-link {!! Route::current()->getName() == 'adminDashboard'? 'active' : '' !!}" href="{{ route('adminDashboard') }}" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Default</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard/analytics.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Analytics</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard/crm.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">CRM</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard/e-commerce.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">E commerce</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard/project-management.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Management</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard/saas.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">SaaS</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">App </div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="app/calendar.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-calendar-alt"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Calendar</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="app/chat.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-comments"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Chat</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-envelope-open"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Email</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="email">
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/email/inbox.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Inbox</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/email/email-detail.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Email detail</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/email/compose.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Compose</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-calendar-day"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Events</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="events">
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/events/create-an-event.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Create an event</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/events/event-detail.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Event detail</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/events/event-list.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Event list</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-shopping-cart"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">E commerce</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="e-commerce">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Product</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="product">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="app/e-commerce/product/product-list.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Product list</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="app/e-commerce/product/product-grid.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Product grid</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="app/e-commerce/product/product-details.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Product details</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Orders</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="orders">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="app/e-commerce/orders/order-list.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Order list</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="app/e-commerce/orders/order-details.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Order details</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/customers.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Customers</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/customer-details.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Customer details</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/shopping-cart.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Shopping cart</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/checkout.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Checkout</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/billing.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Billing</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/e-commerce/invoice.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Invoice</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="app/kanban.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fab fa-trello"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Kanban</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-share-alt"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Social</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="social">
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/social/feed.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Feed</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/social/activity-log.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Activity log</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/social/notifications.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Notifications</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="app/social/followers.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Followers</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Pages </div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="pages/starter.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-flag"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Starter</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="pages/landing.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-globe"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Landing</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-lock"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Authentication</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="authentication">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#simple" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Simple</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="simple">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/login.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Login</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/logout.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Logout</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/register.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Register</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/forgot-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Forgot password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/confirm-mail.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Confirm mail</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/reset-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Reset password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/simple/lock-screen.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Lock screen</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#card" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Card</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="card">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/login.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Login</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/logout.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Logout</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/register.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Register</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/forgot-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Forgot password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/confirm-mail.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Confirm mail</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/reset-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Reset password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/card/lock-screen.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Lock screen</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#split" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Split</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="split">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/login.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Login</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/logout.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Logout</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/register.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Register</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/forgot-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Forgot password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/confirm-mail.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Confirm mail</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/reset-password.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Reset password</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/authentication/split/lock-screen.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Lock screen</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/authentication/wizard.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Wizard</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#authentication-modal" data-bs-toggle="modal" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Modal</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-user"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">User</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="user">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/user/profile.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Profile</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/user/settings.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Settings</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-tags"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Pricing</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="pricing">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing/pricing-default.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Pricing default</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing/pricing-alt.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Pricing alt</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-question-circle"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Faq</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="faq">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/faq/faq-basic.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Faq basic</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/faq/faq-alt.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Faq alt</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/faq/faq-accordion.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Faq accordion</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-exclamation-triangle"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Errors</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="errors">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/errors/404.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">404</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/errors/500.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">500</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-thumbtack"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Miscellaneous</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="miscellaneous">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/miscellaneous/associations.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Associations</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/miscellaneous/invite-people.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Invite people</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/miscellaneous/privacy-policy.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Privacy policy</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Modules </div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-file-alt"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Forms</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="forms">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Basic</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="basic">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/form-control.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Form control</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/input-group.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Input group</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/select.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Select</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/checks.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Checks</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/range.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Range</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/basic/layout.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Layout</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Advance</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="advance">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/advance-select.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Advance select</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/date-picker.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Date picker</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/editor.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Editor</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/emoji-button.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Emoji button</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/file-uploader.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">File uploader</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/forms/advance/rating.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Rating</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/forms/floating-labels.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Floating labels</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/forms/wizard.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Wizard</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/forms/validation.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Validation</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-table"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Tables</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="tables">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/tables/basic-tables.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Basic tables</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/tables/advance-tables.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Advance tables</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/tables/bulk-select.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Bulk select</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-chart-line"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Charts</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="charts">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/charts/chartjs.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Chartjs</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#eCharts" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">ECharts</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="eCharts">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/line-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Line charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/bar-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Bar charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/candlestick-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Candlestick charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/geo-map.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Geo map</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/scatter-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Scatter charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/pie-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Pie charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/radar-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Radar charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/heatmap-charts.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Heatmap charts</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/charts/echarts/how-to-use.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">How to use</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="icons">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-shapes"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Icons</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="icons">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/icons/font-awesome.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Font awesome</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/icons/bootstrap-icons.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Bootstrap icons</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/icons/feather.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Feather</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/icons/material-icons.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Material icons</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-map"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Maps</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="maps">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/maps/google-map.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Google map</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/maps/leaflet-map.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Leaflet map</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-puzzle-piece"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Components</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="components">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/accordion.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Accordion</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/alerts.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Alerts</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/anchor.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Anchor</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/animated-icons.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Animated icons</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/background.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Background</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/badges.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Badges</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/breadcrumbs.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Breadcrumbs</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/buttons.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Buttons</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/calendar.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Calendar</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/cards.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Cards</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#carousel" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Carousel</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="carousel">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/carousel/bootstrap.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Bootstrap</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/carousel/swiper.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Swiper</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/collapse.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Collapse</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/cookie-notice.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Cookie notice</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/countup.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Countup</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/draggable.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Draggable</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/dropdowns.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Dropdowns</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/list-group.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">List group</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/modals.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Modals</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#navs-_and_-Tabs" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Navs &amp; Tabs</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="navs-_and_-Tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/navs.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Navs</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/navbar.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Navbar</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/vertical-navbar.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Vertical navbar</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/top-navbar.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Top navbar</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/combo-navbar.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Combo navbar</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/navs-and-tabs/tabs.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Tabs</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/offcanvas.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Offcanvas</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#pictures" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Pictures</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="pictures">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/pictures/avatar.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Avatar</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/pictures/images.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Images</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/pictures/figures.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Figures</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/pictures/hoverbox.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Hoverbox</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/pictures/lightbox.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Lightbox</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/progress-bar.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Progress bar</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/placeholder.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Placeholder</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/pagination.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Pagination</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/popovers.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Popovers</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/scrollspy.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Scrollspy</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/search.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Search</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/spinners.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Spinners</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/toasts.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Toasts</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/tooltips.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Tooltips</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/treeview.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Treeview</span>
                                                    <span class="badge rounded-pill ms-2 badge-soft-success">New</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/components/typed-text.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Typed text</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#videos" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Videos</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="videos">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/videos/embed.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Embed</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="modules/components/videos/plyr.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Plyr</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-fire"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Utilities</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="utilities">
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/borders.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Borders</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/clearfix.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Clearfix</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/colors.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Colors</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/colored-links.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Colored links</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/display.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Display</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/flex.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Flex</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/float.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Float</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/grid.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Grid</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/overlayscrollbars.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Overlayscrollbars</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/position.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Position</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/spacing.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Spacing</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/sizing.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Sizing</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/stretched-link.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Stretched link</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/text-truncation.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Text truncation</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/typography.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Typography</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/vertical-align.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Vertical align</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="modules/utilities/visibility.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Visibility</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="widgets.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-poll"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Widgets</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#multi-level" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-layer-group"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Multi level</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false" id="multi-level">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#level-two" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Level two</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="level-two">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 1</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 2</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#level-three" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Level three</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="level-three">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 3</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link dropdown-indicator" href="#item-4" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-three">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 4</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    <ul class="nav collapse false" id="item-4">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!.html" aria-expanded="false">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-text ps-1">Item 5</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!.html" aria-expanded="false">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-text ps-1">Item 6</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-indicator" href="#level-four" data-bs-toggle="collapse" aria-expanded="false" aria-controls="multi-level">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Level four</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                            <ul class="nav collapse false" id="level-four">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 6</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link dropdown-indicator" href="#item-7" data-bs-toggle="collapse" aria-expanded="false" aria-controls="level-four">
                                                        <div class="d-flex align-items-center">
                                                            <span class="nav-link-text ps-1">Item 7</span>
                                                        </div>
                                                    </a>
                                                    <!-- more inner pages-->
                                                    <ul class="nav collapse false" id="item-7">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!.html" aria-expanded="false">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-text ps-1">Item 8</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link dropdown-indicator" href="#item-9" data-bs-toggle="collapse" aria-expanded="false" aria-controls="item-7">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-text ps-1">Item 9</span>
                                                                </div>
                                                            </a>
                                                            <!-- more inner pages-->
                                                            <ul class="nav collapse false" id="item-9">
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="nav-link-text ps-1">Item 10</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- more inner pages-->
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="#!.html" aria-expanded="false">
                                                                        <div class="d-flex align-items-center">
                                                                            <span class="nav-link-text ps-1">Item 11</span>
                                                                        </div>
                                                                    </a>
                                                                    <!-- more inner pages-->
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <!-- label-->
                                    <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                        <div class="col-auto navbar-vertical-label">Pages Settings </div>
                                        <div class="col ps-0">
                                            <hr class="mb-0 navbar-vertical-divider" />
                                        </div>
                                    </div>
                                    <!-- parent pages-->
                                    <a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-controls="customization" aria-expanded="{!! Route::current()->getName() == 'landingSlider'? true : false !!}">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-wrench"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Landing Page</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse false {!! Route::current()->getName() == 'landingSlider'? 'show' : '' !!}" id="customization">
                                        <li class="nav-item">
                                            <a class="nav-link {!! Route::current()->getName() == 'landingSlider'? 'active' : '' !!}" href="{{ route('landingSlider') }}" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Slider</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="documentation/customization/styling.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Gallery</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="documentation/customization/dark-mode.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Review</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="documentation/customization/plugin.html" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">Map Location</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="documentation/gulp.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fab fa-gulp"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Gulp</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="documentation/design-file.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-palette"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Design file</span>
                                        </div>
                                    </a>
                                    <!-- parent pages-->
                                    <a class="nav-link" href="changelog.html" role="button" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-code-branch"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Changelog</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="navbar-toggle-icon">
                                <span class="toggle-line"></span>
                            </span>
                        </button>
                        <a class="navbar-brand me-1 me-sm-3" href="index.html">
                            <div class="d-flex align-items-center">
                                <img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" />
                                <span class="font-sans-serif">falcon</span>
                            </div>
                        </a>
                        <ul class="navbar-nav align-items-center d-none d-lg-block">
                            <li class="nav-item">
                                <div class="search-box" data-list='{"valueNames":["title"]}'>
                                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                        <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                    <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none" data-bs-dismiss="search">
                                        <div class="btn-close-falcon" aria-label="Close"></div>
                                    </div>
                                    <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                        <div class="scrollbar list py-3" style="max-height: 24rem;">
                                            <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6>
                                            <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                    <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="fas fa-circle me-2 text-300 fs--2"></span>
                                                    <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers </div>
                                                </div>
                                            </a>
                                            <hr class="bg-200 dark__bg-900" />
                                            <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6>
                                            <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                                                    <div class="flex-1 fs--1 title">All customers list</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                                                    <div class="flex-1 fs--1 title">Latest events in current month</div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                                                    <div class="flex-1 fs--1 title">Most popular products</div>
                                                </div>
                                            </a>
                                            <hr class="bg-200 dark__bg-900" />
                                            <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6>
                                            <a class="dropdown-item px-card py-2" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <div class="file-thumbnail me-2">
                                                        <img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">iPhone</h6>
                                                        <p class="fs--2 mb-0 d-flex">
                                                            <span class="fw-semi-bold">Antony</span>
                                                            <span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2" href="#!">
                                                <div class="d-flex align-items-center">
                                                    <div class="file-thumbnail me-2">
                                                        <img class="img-fluid" src="assets/img/icons/zip.png" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                        <p class="fs--2 mb-0 d-flex">
                                                            <span class="fw-semi-bold">John</span>
                                                            <span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="bg-200 dark__bg-900" />
                                            <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6>
                                            <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l status-online me-2">
                                                        <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Anna Karinina</h6>
                                                        <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l me-2">
                                                        <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Antony Hopkins</h6>
                                                        <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-l me-2">
                                                        <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 title">Emma Watson</h6>
                                                        <p class="fs--2 mb-0 d-flex">Google</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="text-center mt-n3">
                                            <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                            <li class="nav-item">
                                <div class="theme-control-toggle fa-icon-wait px-2">
                                    <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme">
                                        <span class="fas fa-sun fs-0"></span>
                                    </label>
                                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme">
                                        <span class="fas fa-moon fs-0"></span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html">
                                    <span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span>
                                    <span class="notification-indicator-number">1</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                                    <div class="card card-notification shadow-none">
                                        <div class="card-header">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                                </div>
                                                <div class="col-auto ps-0 ps-sm-3">
                                                    <a class="card-link fw-normal" href="#">Mark all as read</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scrollbar-overlay" style="max-height:19rem">
                                            <div class="list-group list-group-flush fw-normal fs--1">
                                                <div class="list-group-title border-bottom">NEW</div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush notification-unread" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">
                                                                <strong>Emma Watson</strong> replied to your comment : "Hello world 😍"
                                                            </p>
                                                            <span class="notification-time">
                                                                <span class="me-2" role="img" aria-label="Emoji">💬</span>Just now </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush notification-unread" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <div class="avatar-name rounded-circle">
                                                                    <span>AB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">
                                                                <strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status
                                                            </p>
                                                            <span class="notification-time">
                                                                <span class="me-2 fab fa-gratipay text-danger"></span>9hr </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-title border-bottom">EARLIER</div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                            <span class="notification-time">
                                                                <span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-xl me-3">
                                                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">
                                                                <strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"
                                                            </p>
                                                            <span class="notification-time">
                                                                <span class="me-2" role="img" aria-label="Emoji">✌️</span>1w </span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="border-bottom-0 notification notification-flush" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-xl me-3">
                                                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">
                                                                <strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund
                                                            </p>
                                                            <span class="notification-time">
                                                                <span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center border-top">
                                            <a class="card-link d-block" href="app/social/notifications.html">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                        <a class="dropdown-item fw-bold text-warning" href="#!">
                                            <span class="fas fa-crown me-1"></span>
                                            <span>Go Pro</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Set status</a>
                                        <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                                        <a class="dropdown-item" href="#!">Feedback</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>