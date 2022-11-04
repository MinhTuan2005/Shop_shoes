<template>
    <div id="product">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div id="pro-container">
            <div class="pro">
                <img src="../assets/img/products/n8.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n1.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n2.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n3.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/f4.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n5.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n6.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
            <div class="pro">
                <img src="../assets/img/products/n7.jpg">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span>
                    </div>
                    <h4>$78</h4>
                    <a href="#"><span id="cart" class="material-symbols-outlined">shopping_cart</span></a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "product"
}
</script>
<style scoped>
#product{
    text-align: center;
    padding: 0 4em;
}
#product h2 {
    font-size: 4em;
}
#product p {
    font-size: 1.3em;
    color: #878787;
}
#pro-container {
    padding-top: 2em;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1em;
}
.pro {
    width: 23%;
    min-width: 23em;
    padding: 1em 0em;
    border: 1px solid #cce7d0;
    border-radius: 20px;
    margin: 0 1.5em;
    transition: 0.2s ease;
    position: relative;
}
.pro img{
    width: 90%;
    border-radius: 20px;
}
.pro:hover{
    box-shadow: 1px 1px 5px 5px rgb(0 0 0 / 3%);
    cursor: pointer;
}
.pro .des {
    text-align: start;
    padding: 1em 2em;
}
.pro .des span{
    color: #606063;
    font-size: 1.2em;
}
.pro .des h5{
    padding-top: 0.2em;
    color: #1a1a1a;
    font-size: 1.4em;
}
.pro .des .star .span {
    font-size: 1.2em;
}
.pro .des h4 {
    padding-top: 0.2em;
    font-size: 1.5em;
    font-weight: 700;
    color: #088178;
}
.pro .des #cart {
    text-align: center;
    width: 1.2em;
    height: 1.2em;
    line-height: 1.25em;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    font-size: 2em;
    position: absolute;
    bottom: 1em;
    right: 1em;
}
</style>