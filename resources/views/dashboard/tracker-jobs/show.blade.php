@extends('dashboard.layouts.main')

<section class="pt-20 pb-3">
  <div class="container mx-auto mt-5 px-20 mb-5">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-16">
        <h1 class="block font-bold text-dark text-4xl lg:text-5xl">
          Detail Tracker Jobs
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="pb-16">
  <form class="max-w-md mx-auto" action="/dashboard/tracker-jobs/{{ $data_user->id }}/details">
    @method('put')
    @csrf
    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="created_at"
        id="created_at"
        value="{{ old('created_at', $data_user->created_at) }}"
        disabled
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="created_at"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Pertama Kali ditambahkan</label
      >
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="updated_at"
        id="updated_at"
        value="{{ old('updated_at', $data_user->updated_at) }}"
        disabled
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" "
        required
      />
      <label
        for="updated_at"
        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
        >Terakhir di update</label
      >
    </div>

    <div class="relative z-0 w-full mb-5 group">
      <input
        type="text"
        name="posisi"
        id="posisi"
        value="{{ old('posisi', $data_user->posisi) }}"
        disabled
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
        disabled
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
        disabled
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
        disabled
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
        disabled
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Select date"
      />
    </div>

    <div class="relative z-0 w-full mb-5 group">
    <label for="proses" class="block mb-2 text-sm text-blue-500">Proses Recruitment</label>
    <select
        id="proses"
        name="proses"
        disabled
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option disabled>Silahkan Pilih</option>
        <option value="Apply" {{ old('proses', $data_user->proses) == 'Apply' ? 'selected' : '' }}>Apply</option>
        <option value="Interview" {{ old('proses', $data_user->proses) == 'Interview' ? 'selected' : '' }}>Interview</option>
        <option value="Wawancara" {{ old('proses', $data_user->proses) == 'Wawancara' ? 'selected' : '' }}>Wawancara Hr</option>
        <option value="Psikotes" {{ old('proses', $data_user->proses) == 'Psikotes' ? 'selected' : '' }}>Psikotes</option>
        <option value="Wawancara User" {{ old('proses', $data_user->proses) == 'Wawancara User' ? 'selected' : '' }}>Wawancara User</option>
        <option value="Test User" {{ old('proses', $data_user->proses) == 'Test User' ? 'selected' : '' }}>Test User</option>
        <option value="Medical Check Up" {{ old('proses', $data_user->proses) == 'Medical Check Up' ? 'selected' : '' }}>Medical Check Up</option>
        <option value="Overing Letter" {{ old('proses', $data_user->proses) == 'Overing Letter' ? 'selected' : '' }}>Overing Letter</option>
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
        disabled
        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Masukan catatan keterangan jika diperlukan ..."
      >{{ old('keterangan', $data_user->keterangan) }}</textarea>
    </div>
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