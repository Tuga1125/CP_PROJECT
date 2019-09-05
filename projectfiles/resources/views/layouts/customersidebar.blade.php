
<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><a href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> </div>
  <div class="list-group list-group-flush">
    <a href="" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="{{route('fooditemtype.index')}}" class="list-group-item list-group-item-action bg-light">My orders</a>
    <a href="{{route('fooditem.index')}}" class="list-group-item list-group-item-action bg-light">History</a>
    <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> -->
  </div>
</div>
<!-- /#sidebar-wrapper -->
