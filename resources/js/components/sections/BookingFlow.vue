<template>
  <section class="bg-green-800 text-white py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
        Alur Pemesanan
      </h2>

      <div class="relative flex flex-col md:flex-row justify-between items-center text-center">
        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/5">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-select-service.png" alt="Pilih Layanan" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pilih Layanan</p>
          <p class="text-sm opacity-80 mt-1">Pilih jenis layanan yang Anda butuhkan.</p>
        </div>
        <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/5">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-find-worker.png" alt="Cari Pekerja" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Cari Pekerja</p>
          <p class="text-sm opacity-80 mt-1">Sistem akan merekomendasikan pekerja terbaik.</p>
        </div>
        <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/5">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-make-order.png" alt="Buat Pesanan" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Buat Pesanan</p>
          <p class="text-sm opacity-80 mt-1">Konfirmasi detail pesanan Anda.</p>
        </div>
         <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/5">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-payment.png" alt="Pembayaran" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pembayaran</p>
          <p class="text-sm opacity-80 mt-1">Lakukan pembayaran melalui metode yang tersedia.</p>
        </div>
         <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center md:w-1/5">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-task-done.png" alt="Pekerjaan Selesai" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pekerjaan Selesai</p>
          <p class="text-sm opacity-80 mt-1">Pekerja menyelesaikan tugas Anda.</p>
        </div>
      </div>

      <div class="relative flex flex-col md:flex-row justify-between items-center text-center mt-12">
        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/4">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-worker-arrive.png" alt="Pekerja Datang" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pekerja Datang</p>
          <p class="text-sm opacity-80 mt-1">Pekerja tiba di lokasi Anda.</p>
        </div>
        <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center mb-8 md:mb-0 md:w-1/4">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-work-start.png" alt="Pekerjaan Dimulai" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pekerjaan Dimulai</p>
          <p class="text-sm opacity-80 mt-1">Pekerja segera memulai tugasnya.</p>
        </div>
        <div class="absolute hidden md:block w-full top-1/3 left-0 -translate-y-1/2">
            <div class="h-1 bg-yellow-500 w-11/12 mx-auto"></div>
            <div class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-y-8 border-y-transparent border-l-8 border-l-yellow-500"></div>
        </div>

        <div class="flex flex-col items-center md:w-1/4">
          <div class="bg-yellow-500 p-4 rounded-full mb-3 shadow-lg">
            <img src="/images/icon-rating.png" alt="Rating" class="h-8 w-8 text-green-900"> </div>
          <p class="font-semibold text-lg">Pekerjaan Selesai & Rating</p>
          <p class="text-sm opacity-80 mt-1">Berikan penilaian setelah tugas selesai.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'BookingFlow',
};
</script>

<style scoped>
/* Styling untuk garis panah */
/* Untuk panah vertikal pada mobile, Anda bisa menggunakan transform rotate */
/* .arrow-down {
  transform: rotate(90deg);
} */
</style>