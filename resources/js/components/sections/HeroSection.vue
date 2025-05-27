<template>
  <section class="bg-gradient-to-r from-green-800 to-green-700 text-white py-16 md:py-24 overflow-hidden relative">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between relative z-10">
      <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 animate__animated animate__fadeInUp">
          Beresin kerjaan di <span class="text-yellow-400">rumahmu</span> dengan kami!
        </h1>
        <p class="text-lg md:text-xl mb-8 opacity-90 animate__animated animate__fadeInUp animate__delay-0.5s">
          Kami menyediakan solusi kebersihan terintegrasi untuk kenyamanan rumah Anda.
        </p>
        <button class="bg-yellow-500 hover:bg-yellow-600 text-green-900 font-bold py-3 px-8 rounded-full text-lg shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate__animated animate__zoomIn animate__delay-1s">
          Booking Sekarang
        </button>
      </div>
      <div class="md:w-1/2 flex justify-center md:justify-end animate__animated animate__fadeInRight animate__delay-0.8s">
        <img src="/images/hero-illustration.png" alt="Pekerja Beresindong Ilustrasi" class="max-w-full h-auto object-contain">
      </div>
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-green-900 opacity-20 -skew-y-3 transform origin-bottom-left hidden md:block"></div>
  </section>
</template>

<script>
export default {
  name: 'HeroSection',
  // Jika Anda ingin animasi, Anda bisa mengintegrasikan library seperti Animate.css
  // Pastikan Anda telah menginstal dan mengimpornya di app.js atau di sini.
};
</script>

<style scoped>
/* Anda bisa menambahkan gaya kustom jika diperlukan, tapi Tailwind seharusnya cukup */
/* Jika menggunakan Animate.css, pastikan untuk mengimpor CSS-nya di app.css */
</style>