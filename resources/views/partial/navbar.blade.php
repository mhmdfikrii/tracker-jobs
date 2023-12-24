<header class="bg-gray-600 absolute top-0 left-0 flex w-full items-center z-10">
  <div class="container">
    <div class="flex items-center justify-between relative">
      <div class="px-4">
        <a href="/" class="font-bold text-2xl text-white block py-6 uppercase">
          Tracker Jobs
        </a>
      </div>
      <div class="flex item-center px-4">
        <button
          type="button"
          id="humburger"
          name="humburger"
          class="block absolute right-4 lg:hidden -mt-4"
        >
          <span
            class="hamburger-line transition duration-300 ease-in-out origin-top-left"
          ></span>
          <span
            class="hamburger-line transition duration-300 ease-in-out"
          ></span>
          <span
            class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"
          ></span>
        </button>
        <nav
          id="nav-menu"
          class="hidden absolute py-5 bg-gray-600 shadow-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-gray-600 lg:max-w-full lg:shadow-none lg:rounded-none"
        >
          <ul class="block lg:flex">
            <li class="group">
              <a
                href="/"
                class="text-base text-white font-semibold py-2 mx-2 flex justify-center group-hover:text-black"
                >Home</a
              >
            </li>
            <li class="group">
              <a
                href="#"
                class="text-base text-white font-semibold py-2 mx-2 flex justify-center group-hover:text-black"
                >About</a
              >
            </li>
            <li class="group">
              <a
                href="#"
                class="text-base text-white font-semibold py-2 mx-2 flex justify-center group-hover:text-black"
                >Services</a
              >
            </li>

            <li class="group lg:mr-10">
              @auth
              <button
                id="dropdownInformationButton"
                data-dropdown-toggle="dropdownInformation"
                class="text-white hidden bg-gray-600 text-base font-semibold focus:outline-none rounded-lg px-5 py-2 text-center md:hidden lg:inline-flex items-center dark:bg-gray-600 
                type="button"
              >
                Dashboard<svg
                  class="w-2.5 h-2.5 ms-3"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 10 6"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="m1 1 4 4 4-4"
                  />
                </svg>
              </button>

              <!-- Dropdown menu -->
              <div
                id="dropdownInformation"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600"
              >
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                  <div class="font-medium">
                    <span>{{ auth()->user()->name }}</span>
                  </div>
                </div>
                <ul
                  class="py-2 text-sm text-gray-700 dark:text-gray-200"
                  aria-labelledby="dropdownInformationButton"
                >
                  <li>
                    <a
                      href="/dashboard"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                      >Dashboard</a
                    >
                  </li>
                </ul>
                <div class="py-2">
                  <a
                    href="#"
                    id="logoutLink"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                    onclick="performLogout()"
                  >
                    Logout
                  </a>

                  <form
                    id="logoutForm"
                    action="/logout"
                    method="post"
                    class="hidden"
                  >
                    @csrf
                    <button type="submit"></button>
                  </form>
                </div>
              </div>
              <a
                href="/dashboard"
                class="text-base text-white font-semibold py-2 mx-2 flex justify-center group-hover:text-black lg:hidden"
                >Dashboard</a
              >

            </li>
              @else

              <a
                href="/login"
                class="text-base text-white font-semibold py-2 mx-2 flex justify-center group-hover:text-black"
                >Login</a
              >

              @endauth
            </li>
 
            <li class="group items-center relative lg:-mt-2 lg:mr-2">
              <div
                class="py-2 mx-2 flex items-center justify-center group-hover:text-black lg:absolute lg:-translate-x-1/4"
              >
                <span
                  class="block w-10 h-10 rounded-full scale-50"
                  style="background-image: url('/img/sun-outline.svg')"
                >
                </span>
                <input
                  type="checkbox"
                  name="toggle"
                  id="toggle"
                  class="hidden"
                />
                <label for="toggle">
                  <div
                    class="w-9 h-5 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer"
                  >
                    <div
                      class="w-4 h-4 bg-white rounded-full toggle-circle"
                    ></div>
                  </div>
                </label>
                <span
                  class="block w-10 h-10 rounded-full scale-50 p-0"
                  style="background-image: url('/img/moon-outline.svg')"
                >
                </span>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
