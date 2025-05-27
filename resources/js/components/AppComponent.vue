<template>
  <AppLayout>
    <HeroSection />
    <WhyChooseUs />
    <ServicesSection />
    <FeaturedWorkers />
    <BookingFlow />
    <EmergencyHelp />
    <CustomerTestimonials />
  </AppLayout>
</template>

<script>
// Impor semua komponen yang akan digunakan
import AppLayout from './layouts/AppLayout.vue';
import HeroSection from './sections/HeroSection.vue';
import WhyChooseUs from './sections/WhyChooseUs.vue';
import ServicesSection from './sections/ServicesSection.vue';
import FeaturedWorkers from './sections/FeaturedWorkers.vue';
import BookingFlow from './sections/BookingFlow.vue';
import EmergencyHelp from './sections/EmergencyHelp.vue';
import CustomerTestimonials from './sections/CustomerTestimonials.vue';

export default {
  name: 'AppComponent',
  components: {
    AppLayout,
    HeroSection,
    WhyChooseUs,
    ServicesSection,
    FeaturedWorkers,
    BookingFlow,
    EmergencyHelp,
    CustomerTestimonials,
  },
};
</script>

<style scoped>
/* Tidak ada gaya khusus di sini, karena AppLayout dan section sudah memiliki gayanya masing-masing */
</style>