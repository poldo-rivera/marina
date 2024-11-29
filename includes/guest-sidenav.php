<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <!-- Home -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'homepage.php') echo 'active'; ?>" href="../users/homepage.php">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
      </a>
    </li>

    <!-- Bookings Dropdown -->
    <li class="nav-item">
      <a class="nav-link collapsed <?php if ($currentPage == 'guest-room-booking.php' || $currentPage == 'guest-dive-booking.php') echo 'active'; ?>" 
         data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bookmark"></i>
        <span>Bookings</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="bookings-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="../users/guest-room-booking.php" class="<?php if ($currentPage == 'guest-room-booking.php') echo 'active'; ?>">
            <i class="bi bi-house-door" style="font-size: 1.5rem; margin-right: 10px;"></i>
            <span>Book Room</span>
          </a>
        </li>
        <li>
          <a href="../users/guest-dive-booking.php" class="<?php if ($currentPage == 'guest-dive-booking.php') echo 'active'; ?>">
            <i class="bi bi-water" style="font-size: 1.5rem; margin-right: 10px;"></i>
            <span>Book Dive</span>
          </a>
        </li>
      </ul>
    </li>

    <!-- Dive Schedules -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'guest-dive-schedules.php') echo 'active'; ?>" href="../users/guest-dive-schedules.php">
        <i class="bi bi-clock"></i>
        <span>Dive Schedules</span>
      </a>
    </li>

    <!-- Restaurant Menu -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'guest-restaurant-menu.php') echo 'active'; ?>" href="../users/guest-restaurant-menu.php">
        <i class="bi bi-card-list"></i>
        <span>Restaurant Menu</span>
      </a>
    </li>

        <!-- Packages -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'guest-packages.php') echo 'active'; ?>" href="../users/guest-packages.php">
        <i class="bi bi-gift"></i>
        <span>Packages</span>
      </a>
    </li>

    <!-- Profile -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'profile.php') echo 'active'; ?>" href="../users/profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>

    <!-- History -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'history.php') echo 'active'; ?>" href="../users/guest-history.php">
        <i class="bi bi-clock-history"></i>
        <span>History</span>
      </a>
    </li>

    <!-- FAQ -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'faq.php') echo 'active'; ?>" href="../users/faq.php">
        <i class="bi bi-question-circle"></i>
        <span>FAQ</span>
      </a>
    </li>

    <!-- About Us -->
    <li class="nav-item">
      <a class="nav-link <?php if ($currentPage == 'about-us.php') echo 'active'; ?>" href="about-us.php">
        <i class="bi bi-info-circle"></i>
        <span>About Us</span>
      </a>
    </li>

    <!-- Logout -->
    <li class="nav-item mt-auto">
      <a class="nav-link" href="logout.php">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li>

  </ul>
</aside>
