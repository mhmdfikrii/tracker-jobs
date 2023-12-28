@extends('layouts.main')

<section
  class="flex justify-center h-screen pt-20 pb-16" id="home">
  <div class="container mx-auto mt-5 px-20 mb-10">
    <div class="w-full px-4">
      <div class="max-w-xl mx-auto text-center mb-72 pt-40">
        <h1 class="block font-bold text-dark text-4xl lg:text-5xl">
          Selamat Datang
        </h1>
        <h2 class="block font-bold text-dark text-4xl lg:text-5xl">
          di Tracker Jobs
        </h2>
      </div>
    </div>
  </div>
</section>

<section
  class="flex justify-center h-screen mt-20 mb-20"
  id="about"
>
  <div class="mx-auto mt-5 pt-20 px-20 mb-10">
    <div class="mx-auto text-center mb-10" data-aos="fade-right">
      <h4 class="block font-bold text-dark text-4xl lg:text-5xl">
        Apa itu Tracker Jobs?
      </h4>
    </div>
    <div data-aos="fade-right">
      <h2 class="text-lg text-justify">
        Memiliki latar belakang dari dari keluhan banyak orang dan termasuk diri
        saya sendiri, dimana selama mencari pekerjaan, kita kadang-kadang lupa
        mengelola dan melacak proses wawancara yang telah diikuti, terutama
        ketika telah mengirimkan banyak lamaran. Untuk mengatasi tantangan ini,
        saya merancang sebuah website khusus yang bertujuan membantu kandidat
        mengelola dan melacak setiap langkah dalam proses rekrutmen. Melalui
        platform ini, pengguna dapat dengan mudah mencatat detail wawancara,
        status aplikasi, dan informasi penting lainnya. Dengan alat ini,
        diharapkan para pencari kerja dapat lebih terorganisir dan maksimal
        dalam mengikuti setiap proses rekrutmen yang dijalani, sehingga
        meningkatkan peluang kesuksesan dalam mendapatkan pekerjaan yang
        diinginkan.
      </h2>
    </div>
  </div>
</section>

<section class="container pt-20 mx-auto mt-5 px-20 mb-10" id="fitur">
  <div class="mx-auto text-center mb-10" data-aos="fade-left">
    <h4 class="font-Bold text-4XL uppercase">Fitur</h4>
  </div>
  <div
    class="overflow-hidden sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly"
  >
    <div
      class="rounded-md shadow-xl overflow-hidden mb-10 sm:mb-0 sm:w-72"
      data-aos="fade-left"
    >
      <div class="px-6 py-4">
        <div class="block font-bold text-dark text-xl mb-2 w-full max-w-full">
          Kemudahan Pencatatan Data
        </div>
        <p>
          Website ini dirancang untuk memudahkan pengguna dalam mencatat data
          pekerjaan mereka. Dengan antarmuka yang mudah dimengerti, Anda dapat
          dengan cepat dan mudah mencatat setiap detail tanpa kesulitan.
        </p>
      </div>
    </div>

    <div
      class="rounded-md shadow-xl overflow-hidden mb-10 sm:mb-0 sm:w-72"
      data-aos="fade-left"
    >
      <div class="px-6 py-4">
        <div class="block font-bold text-dark text-xl mb-2 w-full max-w-full">
          Sistem Tracking yang Efisien
        </div>
        <p>
          Saya membuat sistem tracking yang efisien, memungkinkan Anda untuk
          melacak perkembangan rekrutmen dengan detail. Dengan fitur ini, Anda
          dapat mencari data yang anda butuhkan secara cepat dan fleksibel.
        </p>
      </div>
    </div>

    <div
      class="rounded-md shadow-xl overflow-hidden mb-10 sm:mb-0 sm:w-72"
      data-aos="fade-left"
    >
      <div class="px-6 py-4">
        <div class="block font-bold text-dark text-xl mb-2 w-full max-w-full">
          Manajemen Akun
        </div>
        <p>
          Manfaatkan fitur manajemen akun kami yang memungkinkan pengguna untuk
          dengan mudah mengelola dan memperbarui informasi pribadi mereka. Dalam
          panel manajemen akun, Anda dapat mengubah dan memperbarui detail
          pengguna seperti nama, alamat email, dan informasi kontak lainnya
          sesuai kebutuhan
        </p>
      </div>
    </div>

    <div
      class="rounded-md shadow-xl overflow-hidden mb-10 sm:mb-0 sm:w-72"
      data-aos="fade-right"
    >
      <div class="px-6 py-4">
        <div class="block font-bold text-dark text-xl mb-2 w-full max-w-full">
          Menampilkan Jumlah Data
        </div>
        <p>
          Dalam dashboard, Anda akan menemukan ringkasan informasi yang sangat
          berguna mengenai berapa total jumlah data pekerjaan yang pernah anda
          apply sebelumnya, proses rekrutmen sedang berjalan, dan lamaran anda
          yang ditolak dan juga lamaran yang tidak dihiraukan(Ghosting) oleh
          perusahaan
        </p>
      </div>
    </div>

    <div
      class="rounded-md shadow-xl overflow-hidden mb-10 sm:mb-0 sm:w-72"
      data-aos="fade-right"
    >
      <div class="px-6 py-4">
        <div class="block font-bold text-dark text-xl mb-2 w-full max-w-full">
          Sortir Data Lebih Mudah
        </div>
        <p>
          Dengan sistem yang dibuat, Sortir data dapat dilihat berdasarkan data
          yang paling terbaru di update, jadi dapat memudahkan user untuk
          melakukan tracking data yang ingin diupdate, sesuai berdasarkan
          progres rekrutmen yang user jalani
        </p>
      </div>
    </div>
  </div>
</section>

<footer class="bg-gray-800 text-white p-4">
  <div class="container mx-auto">
    <div class="flex items-center justify-center">
      <div>
        <p class="text-sm">
          <a
            href="https://www.linkedin.com/in/muhammad-fikri-ramadhan-892a65168/"
            target="_blank"
            rel="noopener noreferrer"
            class="hover:underline"
          >
            &copy; 2023 mhmdFikri </a
          >. All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
