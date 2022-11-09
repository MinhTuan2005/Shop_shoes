<template>
    <div id="feature">
        <div class="fe-box">
            <img src="../assets/img/features/f1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="../assets/img/features/f2.png">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="../assets/img/features/f3.png">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="../assets/img/features/f4.png">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="../assets/img/features/f5.png">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="../assets/img/features/f6.png">
            <h6>F27/7 Support</h6>
        </div>
    </div>
</template>
<script>
export default {
    name: "Feature"
}
</script>
<style scoped>
#feature {
    padding: 4em 8em;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2.3em;
}
.fe-box {
    width: 12em;
    text-align: center;
    padding: 2.5em 1.5em;
    border: 1px solid #cce7d0;
    border-radius: 4px;
    transition: 0.2s ease;
}
.fe-box:hover{
    box-shadow: 1px 1px 5px 5px rgb(0 0 0 / 3%);
    cursor: pointer;
}
.fe-box h6{
    margin-top: 1em;
    padding: 0.9em 0.8em 0.6em 0.8em;
    line-height: 1;
    border-radius: 4px;
    background-color: #fddde4;
}
.fe-box:nth-child(2) h6 {
    background-color: #cdebbc;
}
.fe-box:nth-child(3) h6 {
    background-color: #d1e8f2;
}
.fe-box:nth-child(4) h6 {
    background-color: #cdd4f8;
}
.fe-box:nth-child(5) h6 {
    background-color: #f6dbf6;
}
.fe-box:nth-child(6) h6 {
    background-color: #fff2e5;
}
</style>