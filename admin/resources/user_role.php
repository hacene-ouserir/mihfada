<?php
$pageTitle = "User Roles - HO Admin Panel";
include_once(__DIR__ . "/includes/_head.php");
?>

<body
  x-data="{ page: 'User Roles', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
          <!-- Breadcrumb Start -->
          <div
            class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
              User Roles
            </h2>

            <nav>
              <ol class="flex items-center gap-2">
                <li>
                  <a class="font-medium dark:text-white" href="/">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">User Roles</li>
              </ol>
            </nav>
          </div>
          <!-- Breadcrumb End -->

          <!-- ====== Roles Section Start -->
          <div class="grid grid-cols-5 gap-8">
            <div class="col-span-5 xl:col-span-3">
              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="p-7">
                  <form action="#">
                    <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                      <div class="w-full sm:w-1/2">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="userName">User Name</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <svg
                              class="fill-current dark:text-white"
                              width="20"
                              height="20"
                              viewBox="0 0 20 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g opacity="0.8">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                  fill="" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                  fill="" />
                              </g>
                            </svg>
                          </span>
                          <input
                            class="w-full rounded border border-stroke bg-meta-2 py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            type="text"
                            name="user_name"
                            id="userName"
                            placeholder="Admin"
                            value="Admin" />
                        </div>
                      </div>
                      <div class="w-full sm:w-1/2">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white">
                          Current Roles
                        </label>
                        <div
                          x-data="{ isOptionSelected: false }"
                          class="relative z-20 bg-white dark:bg-meta-4 dark:text-white">
                          <select
                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-meta-2 py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-meta-4 dark:bg-meta-4 text-black dark:text-white font-medium"
                            :class="isOptionSelected && 'text-black dark:text-white'"
                            @change="isOptionSelected = true">
                            <option value="admin" class="dark:text-white hover:bg-primary hover:text-white" selected>Admin</option>
                            <option value="user" class="dark:text-white hover:bg-primary">Subscriber</option>
                          </select>
                          <span
                            class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                            <svg
                              class="fill-current dark:fill-white"
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g opacity="0.8">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"></path>
                              </g>
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="mb-5.5">
                      <label
                        class="mb-3 block text-sm font-medium text-black dark:text-white"
                        for="emailAddress">Email Address</label>
                      <div class="relative">
                        <span class="absolute left-4.5 top-4">
                          <svg
                            class="fill-current"
                            width="20"
                            height="20"
                            viewBox="0 0 20 20"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M3.33301 4.16667C2.87658 4.16667 2.49967 4.54357 2.49967 5V15C2.49967 15.4564 2.87658 15.8333 3.33301 15.8333H16.6663C17.1228 15.8333 17.4997 15.4564 17.4997 15V5C17.4997 4.54357 17.1228 4.16667 16.6663 4.16667H3.33301ZM0.833008 5C0.833008 3.6231 1.9561 2.5 3.33301 2.5H16.6663C18.0432 2.5 19.1663 3.6231 19.1663 5V15C19.1663 16.3769 18.0432 17.5 16.6663 17.5H3.33301C1.9561 17.5 0.833008 16.3769 0.833008 15V5Z"
                                fill="" />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M0.983719 4.52215C1.24765 4.1451 1.76726 4.05341 2.1443 4.31734L9.99975 9.81615L17.8552 4.31734C18.2322 4.05341 18.7518 4.1451 19.0158 4.52215C19.2797 4.89919 19.188 5.4188 18.811 5.68272L10.4776 11.5161C10.1907 11.7169 9.80879 11.7169 9.52186 11.5161L1.18853 5.68272C0.811486 5.4188 0.719791 4.89919 0.983719 4.52215Z"
                                fill="" />
                            </g>
                          </svg>
                        </span>
                        <input
                          class="w-full rounded border border-stroke bg-meta-2 py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                          type="email"
                          name="emailAddress"
                          id="emailAddress"
                          placeholder="admin@example.com"
                          value="admin@example.com" />
                      </div>
                    </div>

                    <div class="flex justify-end gap-4.5">
                      <button
                        class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                        type="submit">
                        Save
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- ====== Roles Section End -->
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
    <!-- ===== Content Area End ===== -->
  </div>
  <!-- ===== Page Wrapper End ===== -->
  <?php include_once(__DIR__ . "/includes/_footer.php"); ?>