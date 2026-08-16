<?php
$pageTitle = "Add Role - HO Admin Panel";
include_once(__DIR__ . "/includes/_head.php");
?>

<body
  x-data="{ page: 'Add Role', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
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
              Add Role
            </h2>

            <nav>
              <ol class="flex items-center gap-2">
                <li>
                  <a class="font-medium dark:text-white" href="/">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Roles /</li>
                <li class="font-medium text-primary">Add Role</li>
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
                      <div class="w-full">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white"
                          for="userName">Role Name</label>
                        <div class="relative">
                          <span class="absolute left-4.5 top-4">
                            <!-- <svg
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
                            </svg> -->
                            <svg class="fill-current dark:text-white size-5"
                              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                            </svg>

                          </span>
                          <input
                            class="w-full rounded border border-stroke bg-meta-2 py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary"
                            type="text"
                            name="user_name"
                            id="userName"
                            placeholder="Role name"
                            value="" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-5.5">
                      <div class="w-full">
                        <label
                          class="mb-3 block text-sm font-medium text-black dark:text-white">
                          Permissions
                        </label>

                        <div class="">
                          <select class="hidden" x-cloak id="select">
                            <option value="1">Create</option>
                            <option value="2">Read</option>
                            <option value="3">Update</option>
                            <option value="4">Delete</option>
                          </select>

                          <div
                            x-data="dropdown()"
                            x-init="loadOptions()"
                            class="flex flex-col items-center">
                            <input
                              name="values"
                              type="hidden"
                              :value="selectedValues()" />
                            <div class="relative z-20 inline-block w-full">
                              <div class="relative flex flex-col items-center">
                                <div @click="open" class="w-full">
                                  <div
                                    class="mb-2 flex rounded border border-stroke py-2 pl-3 pr-3 outline-none transition focus:border-primary active:border-primary dark:border-meta-4 bg-meta-2 dark:bg-meta-4 text-black dark:text-white">
                                    <div class="flex flex-auto flex-wrap gap-3">
                                      <template
                                        x-for="(option,index) in selected"
                                        :key="index">
                                        <div
                                          class="my-1.5 flex items-center justify-center rounded border-[.5px] border-stroke bg-meta-2 px-2.5 py-1.5 text-sm font-medium dark:border-strokedark dark:bg-meta-4">
                                          <div
                                            class="max-w-full flex-initial"
                                            x-model="options[option]"
                                            x-text="options[option].text"></div>
                                          <div
                                            class="flex flex-auto flex-row-reverse">
                                            <div
                                              @click="remove(index,option)"
                                              class="cursor-pointer pl-2 hover:text-danger">
                                              <svg
                                                class="fill-current"
                                                role="button"
                                                width="12"
                                                height="12"
                                                viewBox="0 0 12 12"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                  fill-rule="evenodd"
                                                  clip-rule="evenodd"
                                                  d="M9.35355 3.35355C9.54882 3.15829 9.54882 2.84171 9.35355 2.64645C9.15829 2.45118 8.84171 2.45118 8.64645 2.64645L6 5.29289L3.35355 2.64645C3.15829 2.45118 2.84171 2.45118 2.64645 2.64645C2.45118 2.84171 2.45118 3.15829 2.64645 3.35355L5.29289 6L2.64645 8.64645C2.45118 8.84171 2.45118 9.15829 2.64645 9.35355C2.84171 9.54882 3.15829 9.54882 3.35355 9.35355L6 6.70711L8.64645 9.35355C8.84171 9.54882 9.15829 9.54882 9.35355 9.35355C9.54882 9.15829 9.54882 8.84171 9.35355 8.64645L6.70711 6L9.35355 3.35355Z"
                                                  fill="currentColor"></path>
                                              </svg>
                                            </div>
                                          </div>
                                        </div>
                                      </template>
                                      <div
                                        x-show="selected.length == 0"
                                        class="flex-1">
                                        <input
                                          placeholder="Select a option"
                                          class="h-full w-full appearance-none bg-meta-2 dark:bg-meta-4 p-1 px-2 outline-none"
                                          :value="selectedValues()" />
                                      </div>
                                    </div>
                                    <div
                                      class="flex w-8 items-center py-1 pl-1 pr-1">
                                      <button
                                        type="button"
                                        @click="open"
                                        class="h-6 w-6 cursor-pointer outline-none focus:outline-none"
                                        :class="isOpen() === true ? 'rotate-180' : ''">
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
                                      </button>
                                    </div>
                                  </div>
                                </div>
                                <div class="w-full px-4">
                                  <div
                                    x-show.transition.origin.top="isOpen()"
                                    class="max-h-select absolute top-full left-0 z-40 w-full overflow-y-auto rounded bg-meta-2 shadow dark:bg-meta-4"
                                    @click.outside="close">
                                    <div class="flex w-full flex-col">
                                      <template
                                        x-for="(option,index) in options"
                                        :key="index">
                                        <div>
                                          <div
                                            class="w-full cursor-pointer rounded-t border-b border-stroke hover:bg-primary dark:border-meta-4"
                                            @click="select(index,$event)">
                                            <div
                                              :class="option.selected ? 'border-primary' : ''"
                                              class="relative flex w-full items-center border-l-2 border-transparent p-2 pl-2">
                                              <div
                                                class="flex w-full items-center">
                                                <div
                                                  class="mx-2 leading-6 text-black dark:text-white"
                                                  x-model="option"
                                                  x-text="option.text"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </template>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="flex justify-end gap-4.5">
                      <button
                        class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                        type="submit">
                        Add
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