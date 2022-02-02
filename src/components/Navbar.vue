<template>
    <section class="menu">
        <div class="container">
            <a href="#home"><img src="../img/logo.svg" alt="" class="logo"></a>
            <ul class="navigation">
                <li><a href="#about">Про меня</a> <div class="dec"></div></li>
                <li><a href="#portfolio">Портфолио</a><div class="dec"></div></li>
                <li><a href="#footer">Контакты</a><div class="dec"></div></li>
            </ul>
            <div class="mobile__wrapper">
                <a href="#about" id="me" class="mobile_link"><i  class="far fa-laugh"></i></a>
                <a href="#portfolio" id="portfolio_l" class="mobile_link"><i class="fas fa-briefcase"></i></a>
                <a href="#footer" id="contact" class="mobile_link"><i class="far fa-envelope"></i></a>
                <div class="mobile__inner"></div>
                <div class="mobile__btn" @click="openMobileMenu()">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default
    {
        methods:{
            openMobileMenu()
            {
                let active = document.querySelector(".mobile__wrapper")
                active.classList.toggle("active")
            }
        }
    }
</script>
<style scoped>
    .mobile__wrapper
    {
        display: none;
    }
    .menu.anim.fixed
    {
        top: 0;
    }
    .menu.anim
    {
        position: fixed;
        top: -100px;
        z-index: 100;
        width: 100%;
    }


    .navigation li:hover .dec
    {
        width: 100%;
    }

    .dec
    {
        position: absolute;
        bottom: -5px;
        left: 0;
        background: rgba(255,255,255,0.5);
        width: 0px;
        height: 3px;
        border-radius: 99em;
        transition: 0.3s ease;
    }
    .navigation a{
        text-decoration: none;
        color: #fff;
        text-transform: uppercase;
        font-family: "Open Sans";
        font-weight: 300;
    }
    .navigation li
    {
        position: relative;
        list-style: none;
    }
    .navigation
    {
        display: flex;
        max-width: 500px;
        width: 100%;
        justify-content: space-between;
    }
    .logo
    {
        margin-right: 20px;
        width: 30px;
        cursor: pointer;
    }
    section
    {
        border-top: 1px solid rgba(255,255,255,0.1);
        background: linear-gradient(45deg, #673AB7, #1A237E);
        padding: 0 50px;
        transition: 1s;
    }
    .container
    {
        height: 50px;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    @media screen and (max-width: 576px)
    {

        .mobile__wrapper.active #portfolio_l
        {
            transform: translate(-160%, 20px);
            color: rgba(0,0,0,0.6);
        }

        #portfolio_l
        {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 34px;
            transition: 1s;
            transition-delay: 0.2s;
            cursor: pointer;
            z-index: 4;
        }

        .mobile__wrapper.active #contact
        {
            transform: translate(-45%, 40px);
            color: rgba(0,0,0,0.6);
        }

        #contact
        {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 34px;
            transition: 1s;
            transition-delay: 0.3s;
            cursor: pointer;
            z-index: 4;
        }

        .mobile__wrapper.active #me
        {
            transform: translate(-73px, -40%);
            color: rgba(0,0,0,0.6);
        }

        #me
        {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 34px;
            transition: 1s;
            transition-delay: 0.1s;
            cursor: pointer;
            z-index: 4;
        }

        .logo
        {
            display: none;
        }
        .mobile__btn
        {
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60px;
            height: 60px;
            transform: translate(-50%, -50%);
            background: #673AB7;
            border-radius: 50%;
            display: flex;
            align-items: center;
            font-size: 24px;
            justify-content: center;
            color: #fff;
            z-index: 5;
        }
        .mobile__wrapper
        {
            transform: translate(53px,-32px);

            display: block;
            position: relative;
            width: 165px;
            height: 165px;
        }
         .mobile__inner
        {
             width: 165px;
             height: 165px;
             transition: 1s;
             transform: scale(0.5);
             border-radius: 50%;

        }

        .mobile__wrapper.active .mobile__inner
        {

            background: rgba(0,0,0,0.3);
            border-radius: 50%;
            transform: scale(1);
        }
        .container
        {
            overflow: hidden;
            height: 100px;
        }


        section
        {
            padding: 0;
            background: transparent;
        }

        .navigation
        {
            display: none;
        }
    }
</style>