<template>
    <div class="pop-up__wrapper">
        <div class="pop-up__wrapper-rel" v-on:click="closePopUp()">
            <img src=""  class="pop-up--img">
        </div>
    </div>
    <div class="tabs_wrapper">
        <ul class="tab_nav wow slideInLeft" data-wow-delay="0.3s">
            <li class="tab_link active" id="link1" v-on:click="changeTab( 'web-UI','link1' )">Веб-интерфейсы <div class="dec"></div></li>
            <li class="tab_link" id="link2" v-on:click="changeTab( 'landing', 'link2')" >Лендинги <div class="dec"></div> </li>
            <li class="tab_link" id="link3" v-on:click="changeTab( 'photoshop', 'link3')">Photoshop <div class="dec"></div> </li>
            <li class="tab_link" id="link4" v-on:click="changeTab( 'sai', 'link4')">SAI <div class="dec"></div> </li>
        </ul>
        <div class="tab_content wow slideInRight active animate"  data-wow-delay="0.4s" id="web-UI">
            <div class="card_web-UI">
                <div class="card_describe">
                    <h2>SaaS - UI</h2>
                    <h3>(Без адаптива)</h3>
                    <a href="http://r979102l.beget.tech/Project1/Saas.html" class="btn">Перейти</a>
                </div>
            </div>

            <div class="card_web-UI">
                <div class="card_describe">
                    <h2>F. - UI</h2>
                    <h3>(С адаптивом)</h3>
                    <a href="http://r979102l.beget.tech/Project2/F.html" class="btn">Перейти</a>
                </div>>
            </div>
        </div>


        <div class="tab_content" id="photoshop">
            <div class="card-photoshop">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/ph1.2fe0e07b.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>

            <div class="card-photoshop">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/ph2.b60051a5.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>

            <div class="card-photoshop">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/ph3.910e962c.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>

        <div class="tab_content" id="landing">
            <div class="card_web-UI"  id="card_3">
                <div class="card_describe">
                    <h2>CRAPPO</h2>
                    <h3>(С адаптивом)</h3>
                    <a href="http://r979102l.beget.tech/Project3/index.html" class="btn">Перейти</a>
                </div>
            </div>
        </div>

        <div class="tab_content" id="sai">
            <div class="card-photoshop" id="ph-card_1">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/sai_1.fd845e5f.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>

            <div class="card-photoshop" id="ph-card_2">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/sai_2.8481f956.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>

            <div class="card-photoshop" id="ph-card_3">
                <div class="card-photoshop--describe">
                    <a class="resize_img_btn" v-on:click="popUpImg('/img/sai_3.6df040a0.jpg')"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>

    </div>

</template>
<script>
    export default
    {
        methods: {
            changeTab(title, id_link){
                console.log(title)
                let tabcontent = document.getElementsByClassName("tab_content");
                for (let i = 0; i < tabcontent.length; i++) {

                    tabcontent[i].className = tabcontent[i].className.replace(" active", "");

                    tabcontent[i].className = tabcontent[i].className.replace(" animate", "");
                }

                let tablinks = document.getElementsByClassName("tab_link");
                for (let i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(title).className += " active";
                document.getElementById(id_link).className += " active";
                setTimeout(() => document.getElementById(title).classList+=' animate', 500);
            },
            popUpImg(link){
                let img = document.querySelector(".pop-up--img")
                img.src = link
                let pop = document.querySelector(".pop-up__wrapper")
                pop.classList.toggle('active')

                setTimeout(() => pop.classList.toggle('animate'), 100);

                let body = document.querySelector("body")
                body.style.overflowY="hidden"
            },
            closePopUp()
            {
                let pop = document.querySelector(".pop-up__wrapper")
                pop.classList.toggle('animate')
                setTimeout(() => pop.classList.toggle('active'), 500);



                let body = document.querySelector("body")
                body.style.overflowY="auto"
            }
        }

    }
</script>
<style scoped>
    #ph-card_3
    {
        background-image: url("../img/sai_3.jpg");
        background-size: cover;
    }
    #ph-card_2
    {
        background-image: url("../img/sai_2.jpg");
        background-size: cover;
    }
    #ph-card_1
    {
        background-image: url("../img/sai_1.jpg");
        background-size: cover;
    }
    .pop-up__wrapper.active.animate .pop-up--img
    {
        transform: translateX(0);
        opacity: 1;
    }
    .pop-up__wrapper.active.animate
    {
        opacity: 1;
        transform: translateY(0px);
    }
    .pop-up__wrapper.active
    {
        opacity: 0;
        display: block;
    }

    .pop-up--img
    {
        opacity: 0;
        transition: 1s;
        transform: translateX(-200px);
        transition-delay: 1s;
        z-index: 15;
        height: auto;
        width: 100%;
        max-width: 800px;
        padding: 20px;
    }
    .pop-up__wrapper-rel
    {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .pop-up__wrapper
    {

        transition: 0.5s;
        transform: translateY(-1000px);
        display: none;
        backdrop-filter: blur(5px);
        position: fixed;
        width: 100%;
        height: 100vh;
        background: rgba(0,0,0,0.5);
        top: 0;
        left: 0;
        z-index: 100;
    }

    .card-photoshop:hover
    {
        box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
        transform: scale(1.1);
    }
    .resize_img_btn
    {
        font-size: 36px;
        color: #fff;
        cursor: pointer;
    }
    .card-photoshop:hover .card-photoshop--describe
    {
        transform: translateY(0);
    }
    .card-photoshop--describe
    {
        transition: 0.5s;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        transform: translateY(-400px);
    }
    .dec
    {
        transition: 0.3s;
        border-radius: 99em;
        position: absolute;
        bottom: -5px;
        width: 0;
        height: 3px;
        background: #000;
    }
    .tab_link.active .dec
    {
        width: 100%;
    }
    .tab_content.active.animate
    {
        opacity: 1;
        transform: translateY(0px);
    }
    .tab_content.active
    {
        display: flex;
        align-items: center;
        opacity: 0;
        transform: translateY(100px);
    }
    .card-photoshop:nth-child(3)
    {
        background-image: url("../img/ph3.jpg");
        background-size:cover;

    }
    .card-photoshop:nth-child(2)
    {
        background-image: url("../img/ph2.jpg");

    }
    .card-photoshop:nth-child(1)
    {
        background-image: url("../img/ph1.jpg");

    }
    .card-photoshop
    {
        transition: 1s;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        width: 300px;
        height: 300px;
        margin: 0 10px;
        overflow: hidden;
    }
    .btn:hover
    {
        background: #000;
        color: #fff;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }
    .btn
    {
        transition: 0.6s;
        transition: 0.5s ease;
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        width: 130px;
        height: 35px;
        border: 1px solid #000;
        color: #000;
        transform: translateY(400px);
    }
    .card_describe:hover .btn
    {
        transform: translateY(0);
    }
    .card_describe:hover h3
    {
        opacity: 1;
        transform: translateX(0px);
    }
    .card_describe:hover h2
    {
        opacity: 1;
        transform: translateX(0px);
    }

    .card_describe h2
    {
        transition: 0.5s;
        opacity: 0;
        transform: translateX(-100px);
    }
    .card_describe h3
    {
        opacity: 0;
        transform: translateX(-100px);
        font-size: 14px;
        font-weight: 300;
        transition: 0.3s;
        transition-delay: 0.3s;
    }
    .card_web-UI:hover .card_describe
    {
        transform: translateY(0px);
    }
    .card_describe
    {
        transform: translateY(-200px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: "Open Sans";
        position: relative;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        transition: 0.5s ;
    }
    .tab_content
    {
        display: none;
        min-height: 320px;
        transition: 1s;
    }
    #card_3
    {
        background-image: url('../img/land_1.png')
    }

    .card_web-UI:nth-child(2)
    {
        background-image: url("../img/web_2.png");
    }

    .card_web-UI:nth-child(1)
    {
        background-image: url("../img/web_1.png");
    }

    .card_web-UI
    {
        overflow: hidden;
        margin: 0 10px;
        width: 400px;
        height: 200px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }
    .tabs_wrapper
    {
        overflow: hidden;
        padding-top: 50px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding-bottom: 20px;
    }

    .tab_link
    {
        position: relative;
        cursor: pointer;
    }

    .tab_nav
    {
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-decoration: none;
        list-style: none;
        font-family: "Open Sans";
        max-width: 500px;
        width: 100%;
        margin-bottom: 20px;


    }
    @media screen and (max-width: 768px)
    {
        .card-photoshop
        {
            margin: 10px 0;
        }

        .card_web-UI
        {
            margin: 10px 0;
            width: 350px;

        }
        .tab_content
        {
            flex-direction: column;
            min-height: auto;
        }
    }

    @media screen and (max-width: 576px)
    {
        .tab_nav li
        {
            margin: 5px 0;
        }
        .tab_nav
        {
            flex-direction: column;
        }
        .pop-up--img
        {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            box-shadow: none;
        }
    }
</style>