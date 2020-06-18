@auth
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <a href="/" class="card-header">Dashboard</a>
            <!-- <div class="card-header">
                Dashboard
            </div> -->
            <div class="list-group list-group-flush">
                <a href="/issues/" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center">
                    Issues
                    <!-- <span class="badge badge-primary badge-pill">14</span> -->
                </a>
                <a href="/customers/" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center">
                    Customers
                    <!-- <span class="badge badge-primary badge-pill">14</span> -->
                </a>
            </div>
        </div>
    </div>
@else 
    @if ( ! (\Request::is('login') Or \Request::is('register')))  
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
            <a href="/" class="card-header">Home</a>
            <!-- <div class="card-header">
            </div> -->
            <div class="list-group list-group-flush">
                <a href="/issues/create" class="list-group-item list-group-item-action  d-flex justify-content-between align-items-center">
                    Create Support Request
                </a>
            </div>
        </div>
    </div>
    @endif
@endauth