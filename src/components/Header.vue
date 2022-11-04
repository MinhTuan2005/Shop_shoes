<template>
    <div id="header">
        <a href="#"><img src="../assets/img/logo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#"><span class="material-symbols-outlined">shopping_bag</span></a></li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    name: 'Header',
}
</script>
<style scoped>
#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2em 8em;
    background: #E3E6F3;
    box-shadow: 0 0.5em 1.5em rgba(0, 0, 0, 0.06);
    position: sticky;
    top: 0;
    left: 0;
    z-index: 999;
}
#navbar{
    display: flex;
    align-items: center;
    justify-content: center;
}
#navbar li{
    list-style: none;
    padding: 0 1em;
    position: relative;
}
#navbar li a{
    font-size: 1.3em;
    font-weight:600;
    color: #1a1a1a;
    transition: 0.3s ease;
}
#navbar li a:hover,#navbar li a.active{
    color: #088178;
}
#navbar li a.active::after{
    content: "";
    width: 40%;
    height: 2px;
    background-color: #088178;
    position: absolute;
    bottom: -4px;
    left: 0.7em;
}
</style>