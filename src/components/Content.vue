<template>
    <div id="content">
        <h4>Trande-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all product</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </div>    
</template>
<script>
export default {
    name: "Content",
}
</script>
<style scoped>
#content {
    background-image: url("../assets/img/hero4.png");
    height: 90vh;
    background-size: cover;
    background-position: top 10% right 0;
    padding: 0 8em;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}
#content h4 {
    padding-bottom: 1em;
    font-size: 2em;
}
#content h1 {
    color: #088178;
    padding-bottom: 0.3em;
}
#content h1,h2 {
    font-size: 4em;
}
#content button{
    margin: 2em 0 0 5em;
    background-image: url("../assets/img/button.png");
    background-color: transparent;
    color: #088178;
    border: 0;
    padding: 0.35em 3.5em 0.3em 2.5em;
    background-repeat: no-repeat;
    cursor: pointer;
    font-size: 1.5em;
}
</style>