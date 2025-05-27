<template>
  <section class="bg-gray-100 py-16 md:py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-green-800 mb-12">
        Memberikan yang terbaik untuk <span class="text-yellow-500">Anda!</span>
      </h2>

      <div class="bg-white rounded-lg shadow-xl p-8 md:p-12 flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12">
        <div class="md:w-1/2 text-center md:text-left">
          <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-6">
            Kami berkomitmen untuk memberikan layanan kebersihan profesional dengan hasil yang memuaskan dan harga yang kompetitif.
          </p>
          <ul class="text-gray-600 space-y-3 text-base">
            <li class="flex items-start">
              <span class="text-green-600 mr-3 mt-1">&#10003;</span>
              Profesional & Terlatih: Tim kami ahli di bidangnya.
            </li>
            <li class="flex items-start">
              <span class="text-green-600 mr-3 mt-1">&#10003;</span>
              Peralatan Modern: Menggunakan teknologi terbaru untuk hasil optimal.
            </li>
            <li class="flex items-start">
              <span class="text-green-600 mr-3 mt-1">&#10003;</span>
              Jaminan Kepuasan: Kami tidak puas sampai Anda puas.
            </li>
            <li class="flex items-start">
              <span class="text-green-600 mr-3 mt-1">&#10003;</span>
              Harga Transparan: Tidak ada biaya tersembunyi.
            </li>
          </ul>
        </div>
        <div class="md:w-1/2 flex justify-center">
          <img src="/images/smiling-man.png" alt="Smiling man" class="max-w-full h-auto rounded-lg shadow-lg object-cover">
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'WhyChooseUs',
};
</script>

<style scoped>
/* ... */
</style>