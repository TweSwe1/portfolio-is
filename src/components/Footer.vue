<template>
    <footer>

        <div class="container">
            <div class="container__title-wrapper">
                <h2 class="wow fadeInLeft" id="footer">Обратная связь</h2>
                <div class="dec wow fadeInRight" data-wow-delay ="0.2s"></div>
            </div>

            <div class="container__form-wrapper">
                <div class="container__form-wrapper--inner wow bounceIn">
                    <form @submit="sendForm($event)">
                        <div class="name">
                            <div class="input_dec">
                                <i class="fas fa-user"></i>
                            </div>
                            <input name="name" class="name_input" type="text" placeholder="Имя" @change="validation_name()">
                        </div>
                        <div class="email">
                            <div class="input_dec">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <input name="email" class="email_input" type="text" placeholder="Почта" @change="validation_email()">
                        </div>
                        <div class="content">
                            <textarea name="message" class="text_message" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <div class="btn__wrapper">
                            <input type="submit" content="Отправить">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="wave__wrapper">
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>

    </footer>
</template>
<script>
    import axios from 'axios'


    export default
    {
        data()
        {
          return{
              error_email: 0,
              error_name: 0
          }
        },

        methods:{
            sendForm(e)
            {
                let name = document.querySelector(".name_input")
                let email = document.querySelector(".email_input")
                e.preventDefault()
                if (this.error_email == 1)
                {
                    name.classList.add("border")
                    setTimeout(function(){
                        name.className = name.className.replace(" border", "");
                    }, 2000);
                }

                if (this.error_email==1)
                {
                    email.classList.add("border")
                    setTimeout(function(){
                        email.className = email.className.replace(" border", "");
                    }, 2000);
                }

                if(this.error_email == 0 & this.error_name==0)
                {

                    let name = document.querySelector(".name_input").value
                    let email = document.querySelector(".email_input").value
                    let message = document.querySelector(".text_message").value

                    const params = new URLSearchParams();
                    params.append('name', name);
                    params.append('email', email);
                    params.append('message', message);

                    // axios.post(
                    //     "http://localhost:3000/server.php",
                    //     params, {
                    //         headers: {
                    //             'content-type': 'application/x-www-form-urlencoded',
                    //         }
                    //     }
                    // ).then(function () {
                    //     console.log('SUCCESS!!');
                    // })
                    //     .catch(function () {
                    //         // console.log(response.indentText)
                    //         console.log('FAILURE!!');
                    //     });
                }
            },

            validation_name()
            {
                let data = document.querySelector(".name_input")
                let regex = new RegExp(/[а-яА-ЯЁё]/);
                if (regex.test(data.value))
                {
                    if (data.classList.contains('true'))
                    {
                        //pass
                    }
                    else{
                        data.className +=" true"
                    }

                    if(data.classList.contains('false'))
                    {
                        data.className = data.className.replace(" false", "");
                    }
                    this.error_name = 0
                }
                else
                {
                    if (data.classList.contains('false'))
                    {
                        //pass
                    }
                    else
                    {
                        data.className +=" false"
                    }

                    if(data.classList.contains('true'))
                    {
                        data.className = data.className.replace(" true", "");
                    }
                    this.error_name = 1
                }
            },

            validation_email()
            {

                let data = document.querySelector(".email_input")
                let regex = new RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);



                if (regex.test(data.value))
                {
                    if (data.classList.contains('true'))
                    {
                       //pass
                    }
                    else{
                        data.className +=" true"
                    }

                    if(data.classList.contains('false'))
                    {
                        data.className = data.className.replace(" false", "");
                    }
                    this.error_email = 0
                }
                else
                {
                    if (data.classList.contains('false'))
                    {
                        //pass
                    }
                    else
                    {
                        data.className +=" false"
                    }

                    if(data.classList.contains('true'))
                    {
                        data.className = data.className.replace(" true", "");
                    }
                    this.error_email = 1
                }

            }
        },

    }
</script>
<style scoped>
    .email_input.border
    {
        border: 2px solid red;
    }
    .name_input.border
    {
        border: 2px solid red;
    }

    .name_input.true
    {
        border-bottom: 1px solid green;
    }

    .name_input.false
    {
        border-bottom: 1px solid red;
    }

    .email_input.false
    {
        border-bottom: 1px solid red;
    }

    .email_input.true
    {
        border-bottom: 1px solid green;
    }
    .email
    {
        position: relative;
    }
    .input_dec
    {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 42px;
        height: 42px;
        background: rgba(0,0,0,0.4);
        color: rgba(255,255,255,0.5);
        left: 0;
        top: 0;
    }
    .name
    {
        position: relative;
    }
    input[type=submit]
    {
        width: 200px;
        cursor: pointer;
    }
    textarea
    {
        padding: 10px 10px;
    }

    input:focus
    {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    }

    input
    {
        transition: 1s;
        padding: 10px 50px;
    }
    input, textarea
    {
        resize: none;
        border: none;
        margin-bottom: 10px;
        width: 100%;
        outline: none;
        background: rgba(0,0,0,0.5);
        color: #fff;
        font-family: "Open Sans";
        font-size: 16px;
        font-weight: 500;
    }
    .container__form-wrapper
    {
        max-width: 500px;
        padding: 10px;
        width: 100%;
    }
    .container__title-wrapper
    {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 50px;
    }
    .dec {
        height: 3px;
        width: 90px;
        background: #fff;
    }
    .container__title-wrapper h2
    {
        color: #fff;
        text-align: center;
        font-size: 2vw;
        font-family: "Open Sans";
        text-transform: uppercase;
        font-weight: 400;
        margin-bottom: 10px;
    }

    footer
    {
        background: linear-gradient(60deg, #673AB7 0%, #1A237E 100%);
    }

    .container
    {
        display: flex;
        align-items: center;

        flex-direction: column;
        padding-top: 50px;
        position: relative;
        max-width: 1200px;
        width: 100%;
        margin: 0 auto;
        min-height: 400px;
        z-index: 16;
    }

    .wave__wrapper {
        position:relative;
        text-align:center;
        color:white;
    }

    .waves {
        position:relative;
        width: 100%;
        height:15vh;
        margin-bottom:-7px; /*Fix for safari gap*/
        min-height:100px;
        max-height:150px;
    }

    .parallax > use {
        animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
    }
    .parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }
    .parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }
    .parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }
    .parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }
    @keyframes move-forever {
        0% {
            transform: translate3d(-90px,0,0);
        }
        100% {
            transform: translate3d(85px,0,0);
        }
    }

    @media (max-width: 768px) {
        .waves {
            height:40px;
            min-height:40px;
        }

    }
    @media (max-width: 576px)
    {
        #footer
        {
            font-size: 24px;
        }
    }
</style>