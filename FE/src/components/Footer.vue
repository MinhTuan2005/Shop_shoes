<template>
    <div id="footer">
        <div class="col">
            <img src="../assets/img/logo.png" class="logo">
            <h4>Contact</h4>
            <p><strong>Address :</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone :</strong> +84 936004631</p>
            <p><strong>Hours :</strong> 10:00 - 18:00, Mon -Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div>
                    <font-awesome-icon :icon="['fab', 'facebook']" />
                    <font-awesome-icon :icon="['fab', 'twitter']" />
                    <font-awesome-icon :icon="['fab', 'instagram']" />
                    <font-awesome-icon :icon="['fab', 'tiktok']" />
                    <font-awesome-icon :icon="['fab', 'youtube']" />
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="../assets/img/pay/app.jpg">
                <img src="../assets/img/pay/play.jpg">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../assets/img/pay/pay.png">
        </div>
    </div>
    <div class="copyright">
        <p>@ 2022, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
</template>
<script>
export default {

}
</script>
<style scoped>
#footer{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1em;
    margin: 1em 4em  0;
}
#footer .col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 2em;
}
#footer .logo {
    margin-bottom: 2em;
}
#footer h4 {
    font-size: 1.8em;
    padding-bottom: 0.4em;
}
#footer p {
    font-size: 1em;
    padding-bottom: 0.4em;
}
#footer a {
    font-size: 1em;
    color: #222;
    margin-bottom: 0.4em;
}
#footer .follow svg{
    color: #465b52;
    cursor: pointer;
    padding-right: 0.2em;
    transition: 0.2s ease;
}
#footer .follow svg, #footer a:hover{
    color: #088178;
}
#footer .install .row img {
    border: 1px solid #088178;
    border-radius: 6px;
    margin: 0.4em 0.1em;
}
.copyright{
    text-align: center;
    font-size: 1.3em;
    margin-bottom: 2em;
}
@media only screen and (max-width: 1000px) {
    #footer {
        font-size: 0.8em;
    }
    .copyright{
        font-size: 1em;
    }
}
@media only screen and (max-width: 780px) {
    #footer .install .row img {
        width: 100%;
    }
}
</style>