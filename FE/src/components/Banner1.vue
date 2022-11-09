<template>
    <div id="banner-1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-shirt & Accessories</h2>
        <button class="nomal">Explore More</button>
    </div>
</template>
<script>
export default {
    name: "Banner1"
}
</script>
<style scoped>
#banner-1 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url("../assets/img/banner/b2.jpg");
    height: 20vh;
    background-size: cover;
    background-position: center;
    margin: 2em 0em;
}
#banner-1 h4{
    color: #fff;
    font-size: 1.5em;
}
#banner-1 h2{
    color: #fff;
    font-size: 2.5em;
    padding: 0.3em 0;
}
#banner-1 h2 span {
    color: #ef3636;
}
#banner-1 button:hover {
    background: #088178;
    color: #fff;
}
</style>