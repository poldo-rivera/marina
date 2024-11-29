<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'dashboard.php') echo 'active'; ?>" href="dashboard.php">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

     <!-- Bookings Dropdown -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'room-booking.php' || $currentPage == 'dive-booking.php') echo 'active'; ?>" data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bookmark"></i>
        <span>Bookings</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="bookings-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="room-booking.php" class="<?php if ($currentPage == 'room-booking.php') echo 'active'; ?>">
                <i class="bi bi-house-door" style="font-size: 1.5rem; margin-right: 10px;"></i>
                <span>Room Booking</span>
            </a>
            </li>
            <li>
            <a href="dive-booking.php" class="<?php if ($currentPage == 'dive-booking.php') echo 'active'; ?>">
                <i class="bi bi-water" style="font-size: 1.5rem; margin-right: 10px;"></i>
                <span>Dive Booking</span>
            </a>
        </li>

      </ul>
    </li>

    <!-- Rooms -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'rooms.php') echo 'active'; ?>"  href="rooms.php">
        <i class="bi bi-door-closed"></i>
        <span>Rooms</span>
      </a>
    </li>

    <!-- Dive Schedules -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'dive-schedules.php') echo 'active'; ?>" href="dive-schedules.php">
        <i class="bi bi-clock"></i>
        <span>Dive Schedules</span>
      </a>
    </li>

    <!-- Restaurant Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'restaurant-menu.php') echo 'active'; ?>" href="restaurant-menu.php">
        <i class="bi bi-card-list"></i>
        <span>Restaurant Menu</span>
      </a>
    </li>

    <!-- Guests -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'guests.php') echo 'active'; ?>" href="guests.php">
        <i class="bi bi-people"></i>
        <span>Guests</span>
      </a>
    </li>

    <!-- Inventory -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'inventory.php') echo 'active'; ?>" href="inventory.php">
        <i class="bi bi-box-seam"></i>
        <span>Inventory</span>
      </a>
    </li>

    <!-- Packages -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'packages.php') echo 'active'; ?>" href="packages.php">
        <i class="bi bi-archive"></i>
        <span>Packages</span>
      </a>
    </li>

    <!-- Users -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'users.php') echo 'active'; ?>" href="users.php">
        <i class="bi bi-person"></i>
        <span>Users</span>
      </a>
    </li>

    <!-- Reports -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'reports.php') echo 'active'; ?>" href="reports.php">
        <i class="bi bi-bar-chart"></i>
        <span>Reports</span>
      </a>
    </li>

    <!-- History -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'history.php') echo 'active'; ?>" href="history.php">
        <i class="bi bi-clock-history"></i>
        <span>History</span>
      </a>
    </li>

    <!-- Logout (Bottom of Sidebar) -->
    <li class="nav-item mt-auto">
      <a class="nav-link collapsed" href="logout.php">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li>

  </ul>

</aside>