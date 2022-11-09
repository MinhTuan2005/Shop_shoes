<template>
    <div id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box-img-2">
            <h2>New FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box-img-3">
            <h2>T-SHIRTS</h2>
            <h3>New Tredy Prints</h3>
        </div>
    </div>
</template>
<script>
export default {
    name: "Banner3"
}
</script>
<style scoped>
#banner3 {
    padding: 0em 4em 3em 4em;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 5em;
}
#banner3 .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("../assets/img/banner/b7.jpg");
    height: 20vh;
    min-height: 30%;
    background-size: cover;
    background-position: center;
    margin: 2em 0em;
    padding: 0 0 0 3em;
}
#banner3 h2 {
    color: #fff;
    font-weight: 900;
    font-size: 2.2em;
}
#banner3 h3 {
    color: #ec544e;
    font-weight: 900;
    font-size: 1.5em;
}
#banner3 .banner-box-img-2{
    background-image: url("../assets/img/banner/b4.jpg");
}
#banner3 .banner-box-img-3{
    background-image: url("../assets/img/banner/b18.jpg");
}
@media only screen and (max-width: 1408px) {
    #banner3 .banner-box-img-3{
        display: none;
    }
    #banner3 {
        grid-template-columns: repeat(2, 1fr);
        padding: 0em 3.1em 3em 3.1em;
    }
}
@media only screen and (max-width: 1100px) {
    #banner3{
        grid-template-columns: repeat(1, 1fr);
        padding: 0;
    }
    #banner3 .banner-box-img-2{
        display: none;
    }
}
</style>