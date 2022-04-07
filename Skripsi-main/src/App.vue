<template>
  <v-app>

<!-- Navbar -->
<Navbar/>
<!-- <BookingFacillities/> -->
<!-- <LH/> -->
<!-- <Login/> -->
<!-- <Register/> -->

<!-- Landing Page -->
<LandingPage/>

<!-- News -->
<News/>

<!-- ProdcutRPTRA -->
<ProductRPTRA/>

<!-- AboutUs -->
<Event/>

<!-- OurLocation -->
<OurLocation/>

<!-- Footer -->
<Footer/>

  </v-app>
</template>



<script>
import Navbar from "./components/tlbar.vue"
import LandingPage from "./components/LandingPage.vue"
import News from "./components/News.vue"
import ProductRPTRA from "./components/ProductRPTRA.vue"
import OurLocation from "./components/OurLocation.vue"
// import BookingFacillities from "./BF/BookingFacillities.vue"
import Event from "./BF/Event.vue"
// import LH from "./LingkunganHidup/LH.vue"
// import Login from "./Login/Login.vue"
// import Register from "./Login/Register.vue"
import Footer from "./components/Footer.vue"


export default{
  name: "komponen",
  components:{
    Navbar,
    LandingPage,
    News,
    ProductRPTRA,
    OurLocation,
    // BookingFacillities,
    Event,
    // LH,
    // Login,
    // Register,
    Footer
  }
}
</script>