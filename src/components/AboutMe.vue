<template>
    <section class="about" id="about">
        <div class="container">
            <div class="container__title">
                <h2 class="wow fadeInLeft" >Про меня</h2>
                <div class="dec wow fadeInLeft" data-wow-delay="0.2s"></div>
            </div>
            <div class="container__quality">
                <div class="container__quality-card" v-for="item in about_cards" :key="item.title">

                    <div class="container__quality-card-img wow flipInY" :data-wow-delay="item.delay">
                        <i :class="item.cls"></i>
                    </div>

                    <div class="container__quality-card-text wow fadeInUp" :data-wow-delay="item.delay">
                        <h3>{{item.title}}</h3>
                        <p>{{item.text}}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <ItsMe v-bind:skills="skills"></ItsMe>
</template>
<script>
    import ItsMe from "@/components/It'sMe.vue"
    export default {
        components:{
            ItsMe
        },
        props:{
            about_cards:{
                type: Array
            }
        },
        data()
        {
            return{
                skills:[
                    {title:'CSS', width:"width:70%;", procent:"70%", delay:"0.1s"},
                    {title:'HTML', width:"width:90%;", procent:"90%", delay:"0.2s"},
                    {title:'Vue', width:"width:40%;", procent:"40%", delay:"0.3s"},
                    {title:'JavaScript', width:"width:70%;", procent:"70%", delay:"0.4s"},
                    {title:'PHP', width:"width:40%;", procent:"40%", delay:"0.5s"},
                    {title:'UI Design', width:"width:30%;", procent:"30%", delay:"0.6s"},
                    {title:'Photoshop', width:"width:90%;", procent:"90%", delay:"0.7s"},
                    {title:'Figma', width:"width:50%;", procent:"50%", delay:"0.8s"},
                    {title:'SAI', width:"width:90%;", procent:"90%", delay:"0.9s"},
                    {title:'Python', width:"width:60%;", procent:"60%", delay:"1s"},
                    {title:'Illustrator', width:"width:50%;", procent:"50%", delay:"1.1s"},


                ]
            }
        }
    }
</script>
<style scoped>

    .about.fixed
    {
        margin-top: 60px;
    }
    .container__quality
    {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }

    .container__quality-card-text h3
    {
        margin-bottom: 10px;
    }
    .container__quality-card-text
    {
        text-align: center;
        width: 100%;
        max-width: 230px;
        font-family: "Open Sans";
    }
    .container__quality-card-img i
    {
        position: absolute;
        color: #fff;
        font-size: 48px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .container__quality-card
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 300px;
        width: 100%;
        margin-bottom: 15px;
    }
    .container__quality-card-img
    {
        position: relative;
        width: 150px;
        height: 150px;


        background-color: #673AB7;
        -webkit-mask:  url("../img/hexagon.svg") no-repeat 50% 50%;
        mask: url("../img/hexagon.svg") no-repeat 50% 50%;


    }

    .dec
    {
        height: 3px;
        width: 90px;
        background: #000;
    }
    section
    {
        padding-top: 50px;
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
        margin-bottom: 50px;
    }
    .container
    {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;

    }
    @media screen and (max-width: 576px)
    {
        .container__title h2
        {
            font-size: 24px;
        }
        section
        {
            padding-top: 0;
        }
    }
</style>