<?php
$pageTitle = "Tables";
include_once(__DIR__ . "/includes/_head.php");
?>

<body
  x-data="{ page: 'tables', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
  x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark text-gray bg-boxdark-2': darkMode === true}">
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
          <!-- Breadcrumb Start -->
          <div
            class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
              Tables
            </h2>

            <nav>
              <ol class="flex items-center gap-2">
                <li>
                  <a class="font-medium" href="/">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Tables</li>
              </ol>
            </nav>
          </div>
          <!-- Breadcrumb End -->

          <!-- ====== Table Section Start -->
          <div class="flex flex-col gap-10">
            <!-- ====== Table One Start -->
            <?php include_once(__DIR__ . "/includes/_table_01.php"); ?>
            <!-- ====== Table One End -->

            <!-- ====== Table Two Start -->
            <?php include_once(__DIR__ . "/includes/_table_02.php"); ?>
            <!-- ====== Table Two End -->

            <!-- ====== Table Three Start -->
            <?php include_once(__DIR__ . "/includes/_table_03.php"); ?>
            <!-- ====== Table Three End -->
          </div>
          <!-- ====== Table Section End -->
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  <?php include_once(__DIR__ . "/includes/_footer.php"); ?>