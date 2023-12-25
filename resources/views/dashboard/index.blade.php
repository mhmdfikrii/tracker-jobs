@extends('dashboard.layouts.main')

<section class="pt-20 sm:pt-10">
  <div
    class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
  >
    <ul
      class="flex flex-wrap text-sm font-medium text-center text-gray-500"
      id="defaultTab"
      data-tabs-toggle="#defaultTabContent"
      role="tablist"
    >
      <li class="me-2">
        <button
          id="statistics-tab"
          data-tabs-target="#statistics"
          type="button"
          role="tab"
          aria-controls="statistics"
          aria-selected="false"
          class="inline-block p-4"
        ></button>
      </li>
    </ul>

    <div
      class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800"
      id="statistics"
      role="tabpanel"
      aria-labelledby="statistics-tab"
    >
      <dl
        class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-center text-gray-900 sm:grid-cols-3 dark:text-white sm:p-8"
      >
        <div class="flex flex-col">
          <dt class="mb-2 text-3xl font-extrabold">{{ $jumlahData }}</dt>
          <dd class="text-gray-500 dark:text-gray-400">Total Jumlah Apply</dd>
        </div>
        <div class="flex flex-col">
          <dt class="mb-2 text-3xl font-extrabold">{{ $ProsesHiring }}</dt>
          <dd class="text-gray-500 dark:text-gray-400">
            Sedang Proses Recruitment
          </dd>
        </div>
        <div class="flex flex-col">
          <dt class="mb-2 text-3xl font-extrabold">{{ $TotalDitolak }}</dt>
          <dd class="text-gray-500 dark:text-gray-400">Jumlah Rejected</dd>
        </div>
      </dl>
    </div>
  </div>
</section>

<section>
  @if (session()->has('Berhasil'))
  <div
    id="alert-3"
    class="flex items-center mt-3 p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
    role="alert"
  >
    <svg
      class="flex-shrink-0 w-4 h-4"
      aria-hidden="true"
      xmlns="http://www.w3.org/2000/svg"
      fill="currentColor"
      viewBox="0 0 20 20"
    >
      <path
        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"
      />
    </svg>
    <div class="ms-3 text-sm font-medium">{{ session('Berhasil') }}</div>
    <button
      type="button"
      class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
      data-dismiss-target="#alert-3"
      aria-label="Close"
    >
      <svg
        class="w-3 h-3"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 14 14"
      >
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
        />
      </svg>
    </button>
  </div>
  @endif

  <div class="container mx-auto mt-5 mb-10">
    <form
      action="{{ route('dashboard.search') }}"
      method="GET"
      class="mb-10 mt-10"
    >
      <label
        for="default-search"
        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
        >Search</label
      >
      <div class="relative">
        <div
          class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
        >
          <svg
            class="w-4 h-4 text-gray-500 dark:text-gray-400"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 20 20"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
            />
          </svg>
        </div>
        <input
          type="search"
          name="search"
          id="default-search"
          class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="Cari Data..."
        />
        <button
          type="submit"
          class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Search
        </button>
      </div>
    </form>

    <div class="w-full px-4">
      <div class="relative overflow-x-auto sm:rounded-lg">
        <table
          class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mb-40"
        >
          <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
          >
            <tr>
              <th scope="col" class="px-6 py-3">Tgl. Daftar</th>
              <th scope="col" class="px-6 py-3">Posisi</th>
              <th scope="col" class="px-6 py-3">Nama Perusahaan</th>
              <th scope="col" class="px-6 py-3">Alamat Perusahaan</th>
              <th scope="col" class="px-6 py-3">Link/Sumber</th>
              <th scope="col" class="px-6 py-3">Status Aplikasi</th>
              <th scope="col" class="px-6 py-3">Keterangan</th>
              <th scope="col" class="px-6 py-3 text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data_user as $data_users)
            <tr
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            >
              <td class="px-6 py-4">{{ $data_users->tgldaftar }}</td>
              <td class="px-6 py-4">{{ $data_users->posisi }}</td>
              <td class="px-6 py-4">{{ $data_users->nama_perusahaan }}</td>
              <td class="px-6 py-4">{{ $data_users->alamat_perusahaan }}</td>
              <td class="px-6 py-4">
                {{ \Illuminate\Support\Str::limit($data_users->link,15) }}
              </td>
              <td class="px-6 py-4">{{ $data_users->proses }}</td>
              <td class="px-6 py-4">
                {{ \Illuminate\Support\Str::limit($data_users->keterangan, 50)
                }}
              </td>

              <td class="px-6 py-4">
                <div class="relative inline-block text-left">
                  <button
                    data-dropdown-toggle="dropdown-{{ $loop->index }}"
                    class="text-whitefocus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center bg-gray-700 hover:bg-gray-800 focus:ring-black"
                    type="button"
                  >
                    Action
                    <svg
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
                    id="dropdown-{{ $loop->index }}"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute"
                  >
                    <ul
                      class="py-2 text-sm text-gray-700 dark:text-gray-200"
                      aria-labelledby="dropdown-{{ $loop->index }}"
                    >
                      <li>
                        <a
                          href="/dashboard/tracker-jobs/{{ $data_users->token }}/edit"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Update</a
                        >
                      </li>
                      <li>
                        <a
                          href="/dashboard/tracker-jobs/{{ $data_users->token }}/details"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          >Detail</a
                        >
                      </li>
                      <li>
                        <form
                          action="/dashboard/tracker-jobs/{{ $data_users->token }}"
                          class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                          method="POST"
                        >
                          @csrf @method('delete')
                          <button
                            onclick="return confirm('Apakah Kamu Mau Menghapus Data Ini??')"
                          >
                            Hapus
                          </button>
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>    
      {{ $data_user->links() }}
  </div>
</section>

<footer class="bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <div class="flex items-center justify-center">
            <div>
                <p class="text-sm"><a href="https://www.linkedin.com/in/muhammad-fikri-ramadhan-892a65168/" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="hover:underline">
                        &copy; 2023 mhmdFikri
                    </a>. All rights reserved.
            </div>
        </div>
    </div>
</footer>
