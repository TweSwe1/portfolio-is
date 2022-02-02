<template>
   <section class="header" id="home">
       <Preloader></Preloader>
       <canvas id='canvas'></canvas>
       <div class="header__inner">
           <h1>Привет, я <span>Илья Скрынников</span>.<br>Я начинающий веб-разработчик</h1>
           <a class="btn wow bounceIn" href="#about">
               <p>Узнать обо мне больше</p>
               <i class="fas fa-arrow-right"></i>
           </a>
       </div>
   </section>
</template>

<script>
    import Preloader from "@/components/Preloader"
    export default
    {
        components:{
            Preloader
        }
    }
</script>

<style scoped>
    .btn  i
    {
        transition: 0.3s;
    }
    .btn:hover i
    {
        transform: rotate(90deg);
    }
    .btn:hover
    {
        background: #fff;
        color: #1A237E;
    }
    .btn
    {
        text-decoration: none;
        width:270px;
        display: flex;
        height: 50px;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #fff;
        padding: 0 20px;
        cursor: pointer;
        transition: 1s;
        color: #fff;
    }
    .header__inner h1 span
    {
        font-weight: 500;
        color: red;
    }

    .header__inner h1
    {
        font-weight: 300;
        margin-bottom: 30px;
    }
    .header__inner
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #fff;
        font-family: 'Open Sans', sans-serif;
        width: 100%;
        max-width: 700px;
        position: absolute;

        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .header
    {
        position: relative;

        height: 100vh;
        width: 100%;
        overflow: hidden;
    }
    canvas{
        display:block;
    }
</style>