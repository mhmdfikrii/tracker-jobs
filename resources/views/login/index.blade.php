@extends('layouts.main') 
{{-- Login --}}
<div
  class="flex items-center justify-center h-screen pt-36 pb-16 ease-in-out duration-300"
>
  <div class="bg-white p-8 rounded-xl shadow-xl w-full max-w-md">
    <h2 class="text-2xl font-semibold mb-4 dark:text-black text-center">
      Login
    </h2>

    <form action="/login" method="POST">
      @csrf
      <div class="mb-3">
        <label
          for="email"
          class="block text-sm font-medium dark:text-black after:content-['*'] after:text-pink-500 after:ml-0.5"
          >Email</label
        >
        <input
          type="email"
          id="email"
          required
          name="email"
          class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-red-500 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 valid:text-black"
        />
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium dark:text-black"
          >Password</label
        >
        <input
          type="password"
          id="password"
          name="password"
          required
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
        />
      </div>

      <button
        type="submit"
        class="w-full font-semibold bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out"
      >
        Login
      </button>
    </form>
    <!-- Modal Trigger Button -->
    <a
      href="#register"
      id="openModal"
      class="text-sm text-blue-600 flex items-center justify-center mt-4"
      >Registration?</a
    >
  </div>
</div>

{{-- Register --}}
<!-- Modal Container -->
<div
  id="registrationModal"
  class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center h-screen pt-36 pb-16 mb-16"
>
  <!-- Modal Content -->
  <div
    class="bg-white p-8 m-8 rounded-xl shadow-lg w-full max-w-md relative mx-auto overflow-auto"
  >
    <!-- Tambahkan kelas relative -->
    <button
      id="closeModal"
      class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 cursor-pointer"
    >
      <svg
        class="h-6 w-6"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M6 18L18 6M6 6l12 12"
        ></path>
      </svg>
    </button>

    <h2 class="text-2xl font-semibold mb-4 dark:text-black text-center">
      Registration
    </h2>

    <!-- Registration Form -->
    <form action="/register" method="POST">
      @csrf
      <div class="mb-4">
        <label
          for="name"
          class="block text-sm font-medium text-gray-600 after:content-['*'] after:text-pink-500 after:ml-0.5"
          >Nama Lengkap</label
        >
        <input
          type="text"
          id="name"
          name="name"
          required
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
        />
      </div>

      <div class="mb-4">
        <label
          for="nohp"
          class="block text-sm font-medium text-gray-600 after:content-['*'] after:text-pink-500 after:ml-0.5"
          >No. Handphone</label
        >
        <input
          type="number"
          id="nohp"
          name="nohp"
          required
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
        />
      </div>

      <div class="mb-4">
        <label
          for="email"
          class="block text-sm font-medium text-gray-600 after:content-['*'] after:text-pink-500 after:ml-0.5"
          >Email</label
        >
        <input
          type="email"
          id="email"
          name="email"
          required
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-red-500 invalid:focus:border-pink-700 invalid:focus:ring-pink-700 valid:text-black"
        />
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-600"
          >Password</label
        >
        <input
          type="password"
          id="password"
          required
          name="password"
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
        />
      </div>

      <div class="mb-4">
        <label
          for="confirm_password"
          class="block text-sm font-medium text-gray-600"
          >Konfirmasi Password</label
        >
        <input
          type="password"
          id="confirm_password"
          required
          name="confirm_password"
          class="mt-1 p-2 w-full border rounded-md dark:text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500"
        />
      </div>

      <button
        type="submit"
        class="w-full bg-blue-500 hover:bg-blue-700 text-white p-2 rounded-md"
      >
        Register
      </button>
    </form>
  </div>
</div>
