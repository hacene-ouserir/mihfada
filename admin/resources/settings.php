<?php
$pageTitle = "Settings";
include_once(__DIR__ . "/includes/_head.php");
?>

<body
  x-data="{ page: 'Settings', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
  x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark text-white bg-boxdark-2': darkMode === true}">
  <!-- ===== Preloader ===== -->
  <?php include_once(__DIR__ . "/includes/_preloader.php"); ?>
  <!-- ===== Preloader ===== -->

  <!-- ===== Page Wrapper ===== -->
  <div class="flex h-screen overflow-hidden">
    <!-- ===== Sidebar ===== -->
    <?php include_once(__DIR__ . "/includes/_sidebar.php"); ?>
    <!-- ===== Sidebar ===== -->

    <!-- ===== Content Area ===== -->
    <div
      class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
      <!-- ===== Header ===== -->
      <?php include_once(__DIR__ . "/includes/_header.php"); ?>
      <!-- ===== Header ===== -->

      <!-- ===== Main Content ===== -->
      <main>
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
          <div class="mx-auto max-w-270">
            <!-- Breadcrumb -->
            <div
              class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
              <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Settings
              </h2>

              <nav>
                <ol class="flex items-center gap-2">
                  <li>
                    <a class="font-medium" href="/">Dashboard /</a>
                  </li>
                  <li class="font-medium text-primary">Settings</li>
                </ol>
              </nav>
            </div>
            <!-- Breadcrumb -->

            <!-- ====== Settings Section -->
            <!-- Profile Settings -->
            <div class="grid gap-8" id="profileSettings">
              <div class="col-span-5 xl:col-span-3">
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div
                    class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Profile Settings
                    </h3>
                  </div>
                  <div class="p-7">
                    <form action="#">
                      <div class="mb-5.5 flex flex-col gap-5.5 md:flex-row">
                        <div class="w-full md:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="name">Name</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="name"
                              id="name"
                              placeholder="Your name"
                              value="Admin" />
                          </div>
                        </div>
                        <div class="w-full md:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="email">Email</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="email"
                              id="email"
                              placeholder="Your email"
                              value="admin@example.com" />
                          </div>
                        </div>
                        <div class="w-full md:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="password">Password</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="password"
                              name="password"
                              id="password"
                              value="admin123" />
                          </div>
                        </div>
                      </div>
                      <div class="mb-4 flex flex-col gap-5.5">
                        <div class="flex items-center gap-3">
                          <div class="h-14 w-14 rounded-full">
                            <img src="/admin/build/images/user/user-03.png" alt="User" />
                          </div>
                          <div>
                            <span
                              class="mb-1.5 font-medium text-black dark:text-white">Edit your photo</span>
                            <span class="flex gap-2.5">
                              <button
                                class="text-sm font-medium text-danger">
                                Delete
                              </button>
                            </span>
                          </div>
                        </div>
                        <div id="FileUpload" class="relative mb-5.5 block w-full cursor-pointer appearance-none rounded border border-dashed border-primary bg-meta-2 px-4 py-4 dark:bg-meta-4 sm:py-7.5 text-black dark:text-white">
                          <input
                            id="fileInput"
                            type="file"
                            accept="image/*"
                            class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none" />
                          <div class="flex flex-col items-center justify-center space-y-3">
                            <p id="fileName" class="text-sm font-medium text-primary"></p>
                            <img
                              id="imagePreview"
                              class="hidden h-32 w-32 object-cover rounded-xl border"
                              alt="Image preview" />
                          </div>
                          <div
                            class="flex flex-col items-center justify-center space-y-3" id="beforeUpload">
                            <span
                              class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark">
                              <svg
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z"
                                  fill="#00bfff" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z"
                                  fill="#00bfff" />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z"
                                  fill="#00bfff" />
                              </svg>
                            </span>
                            <p class="text-sm font-medium">
                              <span class="text-primary">Click to upload</span>
                              or drag and drop
                            </p>
                            <!-- <p class="mt-1.5 text-sm font-medium">
                              PNG, JPG, WEBP up to 2MB
                            </p>
                            <p class="text-sm font-medium">
                              (max, 800 X 800px)
                            </p> -->
                          </div>
                        </div>
                      </div>

                      <div class="flex justify gap-4.5">
                        <button
                          class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                          type="submit">
                          Cancel
                        </button>
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
            <!-- Profile Settings -->
            <!-- Site Settings -->
            <div class="grid gap-8 mt-4.5" id="siteSettings">
              <div class="col-span-5 xl:col-span-3">
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div
                    class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Site Settings
                    </h3>
                  </div>
                  <div class="p-7">
                    <form action="#">
                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="fullName">Site Name</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="site_name"
                              id="siteName"
                              placeholder="Site name"
                              value="Hacene Ouserir | Portfolio" />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="fullName">Site Description</label>
                          <div class="relative">
                            <textarea
                              rows="5"
                              class="w-full rounded border p-4 border-stroke bg-meta-2 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              name="site_description"
                              id="siteDescription"
                              placeholder="Site description">Hacene Ouserir is a web developer specializing in modern websites and web applications. Explore his portfolio, latest projects, technical blog posts, and professional experience. Available for freelance work, collaboration, and consultations.</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="mb-5.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white" for="siteFavicon">
                          Site Favicon
                        </label>
                        <input
                          type="file"
                          name="site_favicon"
                          id="siteFavicon"
                          class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-meta-2 file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-strokedark dark:bg-meta-4 dark:file:border-strokedark dark:file:bg-meta-4 dark:file:text-white dark:focus:border-primary text-black dark:text-white text-base" />
                      </div>
                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="sitePrimaryColor">Site Primary Color</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="site_primary_color"
                              id="sitePrimaryColor"
                              placeholder="Site primary color"
                              value="#00bfff" />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="siteSecondaryColor">Site Secondary Color</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="site_secondary_color"
                              id="siteSecondaryColor"
                              placeholder="Site secondary color"
                              value="#33ccff" />
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="flex justify gap-4.5 p-4.5">
                    <button
                      class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                      type="submit">
                      Cancel
                    </button>
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
            <!-- Site Settings -->
            <!-- Admin Settings -->
            <div class="grid gap-8 mt-4.5" id="adminSettings">
              <div class="col-span-5 xl:col-span-3">
                <div
                  class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                  <div
                    class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                      Admin Panel Settings
                    </h3>
                  </div>
                  <div class="p-7">
                    <form action="#">
                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="adminPanelName">Admin Panel Name</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="admin_panel_name"
                              id="adminPanelName"
                              placeholder="Admin panel name"
                              value="Hacene Ouserir | Portfolio" />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="adminPanelDescription">Admin Panel Description</label>
                          <div class="relative">
                            <textarea
                              rows="5"
                              class="w-full rounded border p-4 border-stroke bg-meta-2 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              name="admin_panel_description"
                              id="adminPanelDescription"
                              placeholder="Admin panel description">Admin panel for Hacene Ouserir's website.</textarea>
                          </div>
                        </div>
                      </div>

                      <div class="mb-5.5">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white" for="adminPanelFavicon">
                          Admin Panel Favicon
                        </label>
                        <input
                          type="file"
                          name="admin_panel_favicon"
                          id="adminPanelFavicon"
                          class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-meta-2 file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-strokedark dark:bg-meta-4 dark:file:border-strokedark dark:file:bg-meta-4 dark:file:text-white dark:focus:border-primary text-black dark:text-white text-base" />
                      </div>
                      <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="adminPanelPrimaryColor">Admin Panel Primary Color</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="admin_panel_primary_color"
                              id="adminPanelPrimaryColor"
                              placeholder="Admin panel primary color"
                              value="#00bfff" />
                          </div>
                        </div>

                        <div class="w-full sm:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="adminPanelSecondaryColor">Admin Panel Secondary Color</label>
                          <div class="relative">
                            <input
                              class="w-full rounded border border-stroke bg-meta-2 py-3 pl-4.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                              type="text"
                              name="site_secondary_color"
                              id="siteSecondaryColor"
                              placeholder="Site secondary color"
                              value="#33ccff" />
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="flex justify gap-4.5 p-4.5">
                    <button
                      class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                      type="submit">
                      Cancel
                    </button>
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
            <!-- Admin Settings -->
          </div>
          <!-- ====== Settings Section -->
        </div>
    </div>
    </main>
    <!-- ===== Main Content ===== -->
  </div>
  <!-- ===== Content Area ===== -->
  </div>
  <!-- ===== Page Wrapper ===== -->
  <?php include_once(__DIR__ . "/includes/_footer.php"); ?>