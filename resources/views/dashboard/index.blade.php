@extends('dashboard.layouts.main')

<section class="pt-20 pb-16">
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
    <div class="w-full px-4">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table
          class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
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
              <th colspan="3" class="px-6 py-3 text-center">Action</th>
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
                {{ \Illuminate\Support\Str::limit($data_users->keterangan, 15)
                }}
              </td>

              <td class="px-6 py-4 text-right">
                <a
                  href="/dashboard/tracker-jobs/{{ $data_users->id }}/edit"
                  class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                  >Update</a
                >
              </td>
              <td class="px-6 py-4 text-right">
                <a
                  href="/dashboard/tracker-jobs/{{ $data_users->id }}/details"
                  class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                  >Detail</a
                >
              </td>
              <td class="px-6 py-4 text-right">
                <form
                  action="/dashboard/tracker-jobs/{{ $data_users->id }}"
                  style="display: inline"
                  method="POST"
                >
                  @csrf @method('delete')
                  <button
                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                    onclick=" return confirm('Apakah Kamu Mau Menghapus Data Ini??')"
                  >
                    Hapus
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
