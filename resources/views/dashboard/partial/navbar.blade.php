<header
  class="bg-gray-600 top-0 left-0 flex w-full items-center z-10 fixed"
>
  <div class="flex justify-between relative w-full p-0">
    <div class="px-4 py-6 mx-auto">
      <a href="#" class="font-bold text-2xl text-white block uppercase">
        Tracker Jobs
      </a>
      <span
        class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
        onclick="openSidebar()"
      >
        <i class="bi bi-filter-left px-2 bg-gray-600 rounded-md"></i>
      </span>
      <div
        class="sidebar fixed top-0 bottom-0 left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900 hidden"
      >
        <div class="text-gray-100 text-xl ">
          <div class="p-2.5 mt-1 flex items-center mx-auto w-full">
            <i class="bi bi-box px-2 py-1 rounded-md bg-slate-800"></i>
            {{-- <i class="bi bi-server px-2 py-1 rounded-md bg-slate-800"></i> --}}
            {{-- <i
              class="bi bi-app-indicator px-2 py-1 rounded-md bg-slate-800 border-2 "
            ></i> --}}
            <h1 class="font-bold text-gray-200 text-[15px] ml-3 ">
              TrackerJobs
            </h1>
            
            <i class="bi bi-x cursor-pointer ml-28 " onclick="openSidebar()"></i>
          </div>
        </div>
        <div
            class="p-2.5 flex items-center rounded-md px-4 text-white"
          >
            <span class="text-[15px] ml-4 text-gray-200 font-bold truncate">{{ auth()->user()->name }}</span>
          </div>
          <div class="my-2 bg-gray-600 h-[1px]"></div>
        <a href="/">
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          >
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
          </div>
        </a>
        <a href="/dashboard">
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-columns-gap"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Dashboard</span>
        </div>
      </a>
        <a href="/dashboard/tracker-jobs">
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-plus-square"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Tambah Tracking Jobs</span>
        </div>
      </a>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown()"
        >
          <i class="bi bi-person"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold"
              >Manajemen Akun</span
            >
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div
          class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
          id="submenu"
        >
        <a href="/dashboard/management-account/change-info/{{ auth()->user()->token }}/profile">
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1"><i class="bi bi-info-circle"></i> 
          Ganti Informasi Akun
        </h1>
      </a>
      <a href="/dashboard/management-account/change-password/{{ auth()->user()->token }}/profile">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1"><i class="bi bi-shield-lock"></i> 
            Ganti Password
          </h1>
        </a>
          {{-- <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Friends
          </h1> --}}
        </div>
        <a href="#" id="logoutLink">
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          >
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
            <form
              id="logoutForm"
              action="/logout"
              method="post"
              style="display: none"
            >
              @csrf
            </form>
          </div>
        </a>
      </div>
    </div>
  </div>
</header>