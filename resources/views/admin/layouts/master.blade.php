<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Admin Dashboard for Event Ticket Booking System" />
        <meta name="author" content="" />
        <title>Dashboard - Event Ticket Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            .event-type-badge {
                font-size: 0.75rem;
                padding: 0.35em 0.65em;
            }
            .concert { background-color: #6610f2; }
            .seminar { background-color: #20c997; }
            .workshop { background-color: #fd7e14; }
            .theater { background-color: #d63384; }
            .card-icon {
                font-size: 2rem;
                opacity: 0.7;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        @include('admin.layouts.navbar')
        <div id="layoutSidenav">
            @include('admin.layouts.Sidebar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Event Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                        
                        <!-- Summary Cards -->
                        <div class="row">
                            <!-- Total Events -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Total Events</h5>
                                            <h2 class="mb-0">42</h2>
                                        </div>
                                        <i class="fas fa-calendar-alt card-icon"></i>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View All Events</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Upcoming Events -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Upcoming Events</h5>
                                            <h2 class="mb-0">15</h2>
                                        </div>
                                        <i class="fas fa-clock card-icon"></i>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Upcoming</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Tickets Sold -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tickets Sold</h5>
                                            <h2 class="mb-0">3,248</h2>
                                        </div>
                                        <i class="fas fa-ticket-alt card-icon"></i>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Sales</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Total Revenue -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Total Revenue</h5>
                                            <h2 class="mb-0">Rs 420,720</h2>
                                        </div>
                                        <i class="fas fa-money-check-alt card-icon"></i>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Reports</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recent Bookings Section -->
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        Recent Bookings
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-primary">Export</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-hover" id="bookingsTable">
                                            <thead>
                                                <tr>
                                                    <th>Booking ID</th>
                                                    <th>Event</th>
                                                    <th>Customer</th>
                                                    <th>Type</th>
                                                    <th>Tickets</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#BK1001</td>
                                                    <td>Summer Music Festival</td>
                                                    <td>Nirosh Alwis</td>
                                                    <td><span class="badge concert event-type-badge">Concert</span></td>
                                                    <td>2</td>
                                                    <td>Rs 5000.00</td>
                                                    <td><span class="badge bg-success">Confirmed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BK1002</td>
                                                    <td>Tech Conference 2023</td>
                                                    <td>Sarah Fazim</td>
                                                    <td><span class="badge seminar event-type-badge">Seminar</span></td>
                                                    <td>1</td>
                                                    <td>Rs 2500.00</td>
                                                    <td><span class="badge bg-success">Confirmed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BK1003</td>
                                                    <td>Photography Workshop</td>
                                                    <td>Noel Silva</td>
                                                    <td><span class="badge workshop event-type-badge">Workshop</span></td>
                                                    <td>1</td>
                                                    <td>Rs 1500.00</td>
                                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BK1004</td>
                                                    <td>Romeo & Juliet</td>
                                                    <td>Roshel Adhikari</td>
                                                    <td><span class="badge theater event-type-badge">Theater</span></td>
                                                    <td>4</td>
                                                    <td>Rs 2400.00</td>
                                                    <td><span class="badge bg-success">Confirmed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#BK1005</td>
                                                    <td>Jazz Night</td>
                                                    <td>Milan Perera</td>
                                                    <td><span class="badge concert event-type-badge">Concert</span></td>
                                                    <td>2</td>
                                                    <td>Rs 6000.00</td>
                                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-primary"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-sm btn-outline-warning"><i class="fas fa-edit"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Upcoming Events Widget -->
                            <div class="col-xl-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-calendar me-1"></i>
                                        Upcoming Events
                                        <div class="float-end">
                                            <button class="btn btn-sm btn-outline-primary">Add New</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Summer Music Festival</h6>
                                                    <small class="text-muted">Tomorrow</small>
                                                </div>
                                                <p class="mb-1">Central Park • 7:00 PM</p>
                                                <small><span class="badge concert event-type-badge">Concert</span></small>
                                                <small class="text-muted float-end">85% sold</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Tech Conference 2023</h6>
                                                    <small class="text-muted">Jul 30</small>
                                                </div>
                                                <p class="mb-1">Convention Center • 9:00 AM</p>
                                                <small><span class="badge seminar event-type-badge">Seminar</span></small>
                                                <small class="text-muted float-end">62% sold</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Photography Workshop</h6>
                                                    <small class="text-muted">Aug 5</small>
                                                </div>
                                                <p class="mb-1">Arts Center • 10:00 AM</p>
                                                <small><span class="badge workshop event-type-badge">Workshop</span></small>
                                                <small class="text-muted float-end">45% sold</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h6 class="mb-1">Romeo & Juliet</h6>
                                                    <small class="text-muted">Aug 12</small>
                                                </div>
                                                <p class="mb-1">City Theater • 8:00 PM</p>
                                                <small><span class="badge theater event-type-badge">Theater</span></small>
                                                <small class="text-muted float-end">78% sold</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Quick Stats -->
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Event Types Distribution
                                    </div>
                                    <div class="card-body">
                                        <canvas id="eventTypesChart" width="100%" height="200"></canvas>
                                    </div>
                                    <div class="card-footer small text-muted">
                                        <div class="row text-center">
                                            <div class="col-3">
                                                <span class="badge concert event-type-badge">25</span>
                                                <small>Concerts</small>
                                            </div>
                                            <div class="col-3">
                                                <span class="badge seminar event-type-badge">18</span>
                                                <small>Seminars</small>
                                            </div>
                                            <div class="col-3">
                                                <span class="badge workshop event-type-badge">12</span>
                                                <small>Workshops</small>
                                            </div>
                                            <div class="col-3">
                                                <span class="badge theater event-type-badge">10</span>
                                                <small>Theaters</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Revenue Chart -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-line me-1"></i>
                                Monthly Revenue
                                <div class="float-end">
                                    <select class="form-select form-select-sm" style="width: auto; display: inline-block;">
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="revenueChart" width="100%" height="30"></canvas>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TicketEase{{ date('2023') }}</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script>
            // Event Types Chart (Pie)
            var ctx = document.getElementById("eventTypesChart");
            var eventTypesChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Concerts", "Seminars", "Workshops", "Theaters"],
                    datasets: [{
                        data: [25, 18, 12, 7],
                        backgroundColor: [
                            '#6610f2',
                            '#20c997',
                            '#fd7e14',
                            '#d63384'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    cutoutPercentage: 70,
                    legend: {
                        display: false
                    }
                }
            });
            
            // Revenue Chart (Line)
            var ctx2 = document.getElementById("revenueChart");
            var revenueChart = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Revenue ($)",
                        data: [3250, 4120, 3870, 5210, 6830, 7540, 8920, 7210, 6350, 5830, 4670, 3890],
                        backgroundColor: "rgba(2,117,216,0.2)",
                        borderColor: "rgba(2,117,216,1)",
                        pointRadius: 4,
                        pointBackgroundColor: "rgba(2,117,216,1)",
                        pointBorderColor: "rgba(255,255,255,0.8)",
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(2,117,216,1)",
                        pointHitRadius: 50,
                        pointBorderWidth: 2,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '$' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    legend: {
                        display: false
                    }
                }
            });
            
            // Initialize DataTable
            document.addEventListener('DOMContentLoaded', function() {
                const dataTable = new simpleDatatables.DataTable("#bookingsTable", {
                    searchable: true,
                    fixedHeight: true,
                    perPage: 5
                });
            });
        </script>
    </body>
</html>