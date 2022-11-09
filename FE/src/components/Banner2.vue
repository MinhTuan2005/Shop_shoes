<template>
    <div id="banner2">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box-img-2">
            <h4>Spring/Summer</h4>
            <h2>Upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Banner2"
}
</script>
<style scoped>
#banner2 {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 5em;
}
#banner2 .banner-box h4{
    color: #fff;
    font-size: 2em;
    font-weight: 100;
}
#banner2 .banner-box h2{
    color: #fff;
    font-size: 3em;
    font-weight: 800;
}
#banner2 .banner-box span{
    color: #fff;
    font-size: 2em;
    font-weight: 500;
    padding-bottom: 1.5em;
}
#banner2 .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("../assets/img/banner/b17.jpg");
    height: 40vh;
    min-height: 48vh;
    width: 40%;
    background-size: cover;
    background-position: center;
    margin: 2em 0em;
    padding: 0 0 0 3em;
}

#banner2 .banner-box-img-2 {
    background-image: url("../assets/img/banner/b10.jpg");
}
#banner2 .banner-box:hover button{
    background: #088178;
    border: 1px solid #088178;
}
@media only screen and (max-width: 1100px) {
    #banner2 .banner-box-img-2{
        display: none;
    }
    #banner2 .banner-box {
        width: 100%;
    }
}
</style>