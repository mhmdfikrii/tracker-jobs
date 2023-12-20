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
        <div class="text-gray-100 text-xl">
          <div class="p-2.5 mt-1 flex items-center">
            <i
              class="bi bi-app-indicator px-2 py-1 rounded-md bg-slate-800"
            ></i>
            <h1 class="font-bold text-gray-200 text-[15px] ml-3">
              TailwindCSS
            </h1>
            <i class="bi bi-x cursor-pointer ml-28" onclick="openSidebar()"></i>
          </div>
          <div class="my-2 bg-gray-600 h-[1px]"></div>
        </div>
        <div
          class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
        >
          <i class="bi bi-search text-sm"></i>
          <input
            type="text"
            placeholder="Search"
            class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
          />
        </div>
        <a href="/">
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          >
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
          </div>
        </a>
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        >
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Bookmark</span>
        </div>
        <div class="my-4 bg-gray-600 h-[1px]"></div>
        
        <div
          class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
          onclick="dropdown()"
        >
          <i class="bi bi-chat-left-text-fill"></i>
          <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 text-gray-200 font-bold"
              >Chatbox</span
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
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Social
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Personal
          </h1>
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Friends
          </h1>
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