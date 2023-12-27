@extends('dashboard.layouts.main')

<section class="pt-20 pb-3">
  <div class="container mx-auto mt-5 px-20 mb-5">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        @if (session()->has('GagalUpdate'))
        <div
          id="alert-2"
          class="flex items-center p-4 mb-4 text-red-600 rounded-lg bg-red-200 dark:text-red-600"
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
          <div class="ms-3 text-sm font-medium">
            {{ session('GagalUpdate') }}
          </div>
          <button
            type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-500 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:text-red-600"
            data-dismiss-target="#alert-2"
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
        <h1 class="block font-bold text-dark text-4xl lg:text-5xl">
          Edit Tracker Jobs
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="pb-16">
  <form class="max-w-md mx-auto" action="/dashboard/tracker-jobs/{{ $data_user->token }}/edit" method="POST">
    @method('put')
    @csrf

    {{-- <input type="text" name="id" class="hidden" value="{{ old('id', $data_user->id) }}"> --}}

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="posisi"
        id="posisi"
        value="{{ old('posisi', $data_user->posisi) }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="posisi"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Role/Posisi</label
      >
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="nama_perusahaan"
        id="nama_perusahaan"
        value="{{ old('nama_perusahaan', $data_user->nama_perusahaan) }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="nama_perusahaan"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Nama Perusahaan</label
      >
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="alamat_perusahaan"
        id="alamat_perusahaan"
        value="{{ old('alamat_perusahaan', $data_user->alamat_perusahaan) }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="alamat_perusahaan"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Alamat Perusahaan</label
      >
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="link"
        id="link"
        value="{{ old('link', $data_user->link) }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="link"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Link/Email/Aplikasi</label
      >
    </div>

    <div class="relative max-w-sm z-0 w-full mb-5 group">
      <label for="tgldaftar" class="block text-blue-500 text-sm mb-2"
        >Tanggal Apply</label
      >

      <div
        class="absolute inset-y-0 start-0 flex items-center ps-3.5 mt-6 pointer-events-none"
      >
        <svg
          class="w-4 h-4 text-gray-500 dark:text-gray-400"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 20 20"
        >
          <path
            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
          />
        </svg>
      </div>
      <input
        datepicker
        name="tgldaftar"
        type="text"
        value="{{ old('tgldaftar', $data_user->tgldaftar) }}"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Select date"
      />
    </div>

    <div class="relative z-0 w-full mb-5 group">
    <label for="proses" class="block mb-2 text-sm text-blue-500">Proses Recruitment</label>
    <select
        id="proses"
        name="proses"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option disabled>Silahkan Pilih</option>
        <option value="Apply" {{ old('proses', $data_user->proses) == 'Apply' ? 'selected' : '' }}>Apply</option>
        <option value="Interview" {{ old('proses', $data_user->proses) == 'Interview' ? 'selected' : '' }}>Interview</option>
        <option value="Wawancara Hr" {{ old('proses', $data_user->proses) == 'Wawancara Hr' ? 'selected' : '' }}>Wawancara Hr</option>
        <option value="Psikotes" {{ old('proses', $data_user->proses) == 'Psikotes' ? 'selected' : '' }}>Psikotes</option>
        <option value="Wawancara User" {{ old('proses', $data_user->proses) == 'Wawancara User' ? 'selected' : '' }}>Wawancara User</option>
        <option value="Test User" {{ old('proses', $data_user->proses) == 'Test User' ? 'selected' : '' }}>Test User</option>
        <option value="Medical Check Up" {{ old('proses', $data_user->proses) == 'Medical Check Up' ? 'selected' : '' }}>Medical Check Up</option>
        <option value="Overing Letter" {{ old('proses', $data_user->proses) == 'Overing Letter' ? 'selected' : '' }}>Overing Letter</option>
        <option value="Rejected" {{ old('proses', $data_user->proses) == 'Rejected' ? 'selected' : '' }}>Rejected</option>
        <option value="Ghosting" {{ old('proses', $data_user->proses) == 'Ghosting' ? 'selected' : '' }}>Ghosting</option>
    </select>
</div>


    <div class="relative z-0 w-full mb-5 group">
      <label for="keterangan" class="block mb-2 text-sm text-blue-500"
        >Keterangan</label
      >
      <textarea
        id="keterangan"
        name="keterangan"
        rows="4"
        value="{{ old('keterangan', $data_user->keterangan) }}"
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Masukan catatan keterangan jika diperlukan ..."
      >{{ old('keterangan', $data_user->keterangan) }}</textarea>
    </div>

    <button
      type="submit"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
      Submit
    </button>
  </form>
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