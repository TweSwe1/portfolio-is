<template>
  <Head></Head>
  <Navbar></Navbar>
  <AboutMe v-bind:about_cards="about_cards"></AboutMe>
  <Portfolio></Portfolio>
  <Footer></Footer>
  <FooterContact></FooterContact>
</template>

<script>

import Head from "@/components/Head"
import AboutMe from "@/components/AboutMe"
import Navbar from "@/components/Navbar"
import Portfolio from "@/components/Portfolio"
import Footer from "@/components/Footer"
import FooterContact from "@/components/FooterContact"
export default {
  name: 'App',

  data(){
    return{
      about_cards:[
        {title:"Коммуникабельность",text:"Нет проблем при общении с заказчиком",cls:"fas fa-hands-helping", delay:"0.2s"},
        {title:"Упорство",text:"Всегда достигаю желаемого результата",cls:"fas fa-cogs", delay:"0.4s"},
        {title:"Концентрация",text:"Полное погружение в поставленную задачу",cls:"fas fa-crosshairs", delay:"0.6s"},
        {title:"Хочу все знать!",text:"Желание обучатсья всему!",cls:"fas fa-brain", delay:"0.8s"}
      ]
    }
  },
  components: {
    Head,
    AboutMe,
    Navbar,
    Portfolio,
    Footer,
    FooterContact

  }
}
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
  *
  {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  html {
    scroll-behavior: smooth;
  }

#app {

}
</style>
