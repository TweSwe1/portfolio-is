<template>
    <div class="load_page" :class="{'active':!isLoad}"></div>
    <div class="load_page-down" :class="{'active':!isLoad}"></div>
</template>
<script>
    export default
    {
        data(){
            return{
                isLoad:true
            }
        },
        mounted() {
            document.onreadystatechange = () =>{
                if(document.readyState == "complete")
                {

                    setTimeout(() => this.isLoad = false, 200);
                }

            }
        }
    }
</script>
<style scoped>
    .load_page-down.active
    {
        height: 0;
    }
    .load_page-down
    {
        bottom: 0;
        left: 0;
        position: absolute;
        z-index: 98;
        width: 100%;
        height: 100vh;
        background: #5a2da8;
        transition: 0.5s;
    }
    .load_page.active
    {

        height: 0;
    }
    .load_page
    {
        top: 0;
        left: 0;
        position: absolute;
        z-index: 99;
        width: 100%;
        height: 100vh;
        background: #673AB7;
        transition: 0.5s;
    }
</style>