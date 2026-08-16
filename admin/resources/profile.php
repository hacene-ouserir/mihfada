<?php
$pageTitle = "Profile";
include_once(__DIR__ . "/includes/_head.php");
?>

<body
  x-data="{ page: 'profile', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
  x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark text-white bg-boxdark-2': darkMode === true}">
  <!-- ===== Preloader Start ===== -->
  <?php include_once(__DIR__ . "/includes/_preloader.php"); ?>
  <!-- ===== Preloader End ===== -->

  <!-- ===== Page Wrapper Start ===== -->
  <div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar Start ===== -->
    <?php include_once(__DIR__ . "/includes/_sidebar.php"); ?>
    <!-- ===== Sidebar End ===== -->

    <!-- ===== Content Area Start ===== -->
    <div
      class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      <!-- ===== Header Start ===== -->
      <?php include_once(__DIR__ . "/includes/_header.php"); ?>
      <!-- ===== Header End ===== -->

      <!-- ===== Main Content Start ===== -->
      <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
          <div class="mx-auto max-w-242.5">
            <!-- Breadcrumb Start -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Profile
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="/">Dashboard /</a>
                  </li>
                  <li class="text-primary">Profile</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb End -->

            <!-- ====== Profile Section Start -->
            <div
              class="overflow-hidden rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
              <div class="px-4 pb-6 text-center lg:pb-8 xl:pb-11.5">
                <div
                  class="relative z-30 mx-auto mt-22 h-30 w-full max-w-30 rounded-full bg-white/20 p-1 backdrop-blur sm:h-44 sm:max-w-44 sm:p-3">
                  <div class="relative drop-shadow-2">
                    <img src="/admin/build/images/user/user-06.png" alt="profile" />
                  </div>
                </div>
                <div class="mt-4">
                  <h3
                    class="mb-1.5 text-2xl font-medium text-black dark:text-white">
                    John Doe
                  </h3>
                  <p class="font-medium">Admin</p>
                  <div class="mt-4.5 mx-auto max-w-180">
                    <h4 class="font-medium text-black dark:text-white">
                      About Me
                    </h4>
                    <p class="mt-4.5 text-sm font-normal">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Pellentesque posuere fermentum urna, eu condimentum
                      mauris tempus ut. Donec fermentum blandit aliquet. Etiam
                      dictum dapibus ultricies. Sed vel aliquet libero. Nunc a
                      augue fermentum, pharetra ligula sed, aliquam lacus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- ====== Profile Section End -->
          </div>
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  <?php include_once(__DIR__ . "/includes/_footer.php"); ?>