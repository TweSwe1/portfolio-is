<template>
    <section>
        <div class="container">
            <div class="container__first-card wow fadeInLeft">
                <img src="../img/me.png" class="container__first-card-photo">
                <div class="container__first-card-text">
                    <h3>Давайте познакомимся?</h3>
                    <p>Закончил факультет программного обеспечения, большую часть времени занимаюсь дизайном и веб-разработками.</p>
                </div>
            </div>
            <div class="container__second-card wow fadeInRight">
                <div class="container__progress-bar-wrapper" v-for="item in skills" :key="item.title">
                    <div class="container__progress-bar-tech">
                        <p>{{item.title}}</p>
                    </div>
                    <div class="container__progress-bar-line-wrapper">
                        <div class="container__progress-bar-line wow slideInLeft" :style="item.width" :data-wow-delay="item.delay">

                        </div>
                    </div>
                    <p class="container__progress-bar-procent">
                        {{item.procent}}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default
    {
        props:{
            skills:{
                type: Array
            }
        }
    }
</script>
<style scoped>
    .container__progress-bar-procent
    {
        font-family: "Open Sans";
        color: rgba(0,0,0,0.5);
        position: absolute;
        top: 35%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 14px;
    }
    .container__progress-bar-wrapper
    {
        position: relative;
        display: flex;
    }
    .container__progress-bar-line
    {

        height: 100%;
        background: rgba(86, 45, 168, 0.8);

    }
    .container__progress-bar-tech
    {
        height: 30px;
        width: 100px;
        color: #fff;
        background: #673AB7;
        font-size: 14px;
        font-family: "Open Sans";
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container__progress-bar-line-wrapper
    {
        overflow: hidden;
        display: flex;
        position: relative;
        width: 100%;
        height: 30px;
        margin-bottom: 10px;
        background: #EAEAEA;
    }
    .container__second-card
    {
        max-width: 600px;
        width: 100%;
        display: flex;
        flex-direction: column;
        padding: 10px;
    }
    .container__first-card-text h3
    {
        font-size: 24px;
        font-family: "Open Sans";
        margin-bottom: 15px;
        text-align: center;
    }
    .container__first-card-text
    {
        padding: 10px;
    }
    .container__first-card-text p
    {
        font-family: "Open Sans";
        max-width: 400px;
        width: 100%;
        text-align: center;
    }
    .container__first-card-photo
    {
        padding: 10px;
        max-width: 400px;
        width: 100%;
        margin-bottom: 5px;
    }
    .container
    {
        padding-bottom: 50px;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;

    }
    @media screen and (max-width: 574px) {
        .container
        {
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container__progress-bar-procent
        {
            display: none;
        }
    }
</style>