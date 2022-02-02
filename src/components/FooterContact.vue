<template>
    <section>
        <div class="container">

            <a class="container__upBtn-wrapper wow fadeInLeft" href="#home">
                <i class="fas fa-chevron-circle-up"></i>
            </a>
            <ul class="container__social-wrapper wow fadeInRight">
                <li><a href="https://www.instagram.com/_twel_._/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://pixabay.com/ru/users/tweswe-7735782/"><i class="far fa-images"></i></a></li>
                <li><a href="https://t.me/tweswe"><i class="fab fa-telegram-plane"></i></a></li>
            </ul>
            <p class="footer_describe wow fadeInUp" data-wow-delay="0.5s">
                ILYA SKRYNNIKOV <span>©2022</span>
            </p>

        </div>
    </section>
</template>

<style scoped>
    .footer_describe span
    {
        color: darkred;
    }
    .footer_describe
    {
        font-family: "Open Sans";
        font-size: 16px;
        color: rgba(0,0,0,0.5);
        margin: 10px 0;
    }

    @keyframes hang {
        50% {
            transform: translateY(3px);
        }

        100% {
            transform: translateY(6px);
        }
    }

    @keyframes pulse-shrink {
        to {
            transform: scale(.9);
        }
    }

    .container__social-wrapper li:hover
    {
        background: #5a2da8;
        animation-name: pulse-shrink;
        animation-duration: 0.3s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }
    .container__social-wrapper li a{
        color: #fff;
        font-size: 24px;
        text-align: center;
        width: 30px;
    }
    .container__social-wrapper li
    {
        transition: 0.5s;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
        padding-top: 10px;
        padding-bottom: 8px;
        padding-left: 10px;
        padding-right: 10px;
        background: rgba(0,0,0,0.3);

    }
    .container__social-wrapper
    {
        margin: 20px 0;
        display: flex;
        list-style: none;
    }
    .container__upBtn-wrapper
    {
        animation-name: hang;
        animation-duration: 1s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        margin-top: 10px;
        font-size: 48px;
        color: #673AB7;
        cursor: pointer;
    }

    section
    {
        background: rgb(238,238,238);
        background: linear-gradient(360deg, rgba(238,238,238,1) 0%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
    }

    .container
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
    }
</style>