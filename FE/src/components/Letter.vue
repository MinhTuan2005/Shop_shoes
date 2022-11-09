<template>
    <div id="letter">
        <div class="new-letter">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail update about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="nomal">Sign Up</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Letter"
}
</script>
<style scoped>
#letter {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    background-image: url("../assets/img/banner/b14.png");
    background-repeat: no-repeat;
    background-position: 20% 30%;
    background-color: #041e42;    
    height: 15vh;
}
#letter h4{
    font-size: 1.4em;
    font-weight: 700;
    color: #fff;
}
#letter p{
    font-size: 1em;
    font-weight: 600;
    color: #818ea0;
}
#letter .new-letter {
    padding-left: 2em;
}
#letter p span{
    color: #ffbd27;
}
#letter input {
    height: 2.125em;
    padding-top: 0.23em;
    padding-bottom: 0.095em;
    width: 30em;
    font-size: 1em;
    border: 1px solid transparent;
    border-radius: 4px;
    outline: none;
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
}
#letter button{
    background-color: #088178;
    color: #fff;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
#letter .form {
    padding-right: 2em;
}
@media only screen and (max-width: 1150px) {
    #letter h4{
        font-size: 1em;
    }
    #letter p{
        font-size: 0.8em;
    }
    #letter input {
        height: 1.325em;
    }
    #letter button{
        font-size: 1em;
        padding: 0.45em 1em 0.2em 1em;
    }
}
@media only screen and (max-width: 1000px) {
    #letter h4{
        font-size: 0.8em;
    }
    #letter p{
        font-size: 0.6em;
    }
    #letter input {
        height: 1.325em;
    }
    #letter button{
        font-size: 1em;
        padding: 0.45em 1em 0.25em 1em;
    }
}
@media only screen and (max-width: 910px) {
    .new-letter{
        display: none;
    }
    #letter{
        justify-content: center;
    }
}
</style>