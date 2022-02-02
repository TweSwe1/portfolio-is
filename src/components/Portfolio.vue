<template>
    <section id="portfolio">
        <div class="container">
            <div class="container__title">
                <h2 class="wow fadeInLeft">Портфолио</h2>
                <div class="dec wow fadeInLeft" data-wow-delay="0.2s"></div>
            </div>
            <Tabs></Tabs>
            <div class="container__describe">
                <p class="wow bounce">Все работы выполнены для себя и не являются полноценными проектами. Примеры разработок: баннеров, визиток, бизнес-презентация, 3D моделей - предоставяються в личной переписке.</p>
            </div>
        </div>
    </section>
</template>
<script>
    import Tabs from "@/components/Tabs"
    export default
    {
        components:{
            Tabs
        }
    }

</script>
<style scoped>
    .container__describe
    {

    }

    .container__describe p
    {
        max-width: 600px;
        width: 100%;
        text-align: center;
    }
    .container__describe
    {

        font-size: 20px;
        font-family: "Open Sans";
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .dec
    {
        height: 3px;
        width: 90px;
        background: #000;
    }
    .container__title h2
    {
        text-align: center;
        font-size: 2vw;
        font-family: "Open Sans";
        text-transform: uppercase;
        font-weight: 400;
        margin-bottom: 10px;
    }

    .container__title
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;

    }
    section
    {
        background: #F5F5F5;
    }
    .container
    {
        padding-top: 50px;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-bottom: 50px;
    }
    @media screen and (max-width: 576px)
    {
        .container__title h2
        {
            font-size: 24px;
        }

    }
</style>