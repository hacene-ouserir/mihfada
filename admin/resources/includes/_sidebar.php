<aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-primary duration-300 ease-linear"
  @click.outside="sidebarToggle = false">
  <!-- SIDEBAR HEADER -->
  <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
    <a href="/admin">
      <!-- <img src="/admin/build/images/logo/logo.svg" alt="Logo" /> -->
      <h2 class="text-title-md2 font-bold text-gray text-start">
        Mihfada Admin Panel
      </h2>
    </a>
    <button
      class="block"
      @click.stop="sidebarToggle = !sidebarToggle">
      <svg
        class="fill-current"
        width="20"
        height="18"
        viewBox="0 0 20 18"
        fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
          fill="" />
      </svg>
    </button>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
    <!-- Sidebar Menu -->
    <nav
      class="mt-5 px-4 py-4 lg:mt-9 lg:px-6"
      x-data="{selected: $persist('Dashboard')}">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-gray">Main</h3>
        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Users -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/users.php"
              @click="selected = 'Users'"
              :class="{ 'bg-primarylight': (selected === 'Users') && (page === 'Users') }">
              <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
              </svg>
              Users
            </a>
          </li>
          <!-- Menu Item Users -->
          <!-- Menu Item My Skills -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/skills.php"
              @click="selected = 'My Skills'"
              :class="{ 'bg-primarylight': (selected === 'My Skills') && (page === 'My Skills') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fill-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
              </svg>
              My Skills
            </a>
          </li>
          <!-- Menu Item My Skills -->
          <!-- Menu Item Education -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/education.php"
              @click="selected = 'Education'"
              :class="{ 'bg-primarylight': (selected === 'Education') && (page === 'Education') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
              </svg>
              Education
            </a>
          </li>
          <!-- Menu Item Education -->
          <!-- Menu Item Experience -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/experience.php"
              @click="selected = 'Experience'"
              :class="{ 'bg-primarylight': (selected === 'Experience') && (page === 'Experience') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
              </svg>
              Experience
            </a>
          </li>
          <!-- Menu Item Experience -->
          <!-- Menu Item My Works -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/works.php"
              @click="selected = 'My Works'"
              :class="{ 'bg-primarylight': (selected === 'My Works') && (page === 'My Works') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
              </svg>
              My Works
            </a>
          </li>
          <!-- Menu Item My Works -->
          <!-- Menu Item Posts -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/posts.php"
              @click="selected = 'Posts'"
              :class="{ 'bg-primarylight': (selected === 'Posts') && (page === 'Posts') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
              </svg>

              Posts
            </a>
          </li>
          <!-- Menu Item My Posts -->
          <!-- Menu Item Messages -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/messages.php"
              @click="selected = 'Messages'"
              :class="{ 'bg-primarylight': (selected === 'Messages') && (page === 'Messages') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
              </svg>
              Messages
            </a>
          </li>
          <!-- Menu Item Messages -->
        </ul>
      </div>
      <!-- Others Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-gray">Other</h3>
        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item Roles -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/roles.php"
              @click="selected = 'Roles'"
              :class="{ 'bg-primarylight': (selected === 'Roles') && (page === 'Roles') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
              </svg>

              Roles
            </a>
          </li>
          <!-- Menu Item Roles -->
          <!-- Menu Item Settings -->
          <li>
            <a
              class="group relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-gray duration-300 ease-in-out hover:bg-primarylight"
              href="/admin/resources/settings.php"
              @click="selected = 'Settings'"
              :class="{ 'bg-primarylight': (selected === 'Settings') && (page === 'Settings') }">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
              </svg>

              Settings
            </a>
          </li>
          <!-- Menu Item Settings -->
        </ul>
      </div>
    </nav>
    <!-- Sidebar Menu -->
  </div>
</aside>