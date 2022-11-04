<template>
  <Header />
  <Content />
  <Feature />
  <Products/>
  <Banner1 />
  <NewProduct />
  <Banner2 />
  <Banner3 />
  <Letter />
</template>

<script>
import Content from './components/Content.vue';
import HelloWorld from './components/HelloWorld.vue'
import Header from './components/Header.vue';
import Feature from './components/Feature.vue';
import Products from './components/Product.vue';
import Banner1 from './components/Banner1.vue';
import NewProduct from './components/NewProduct.vue';
import Banner2 from './components/Banner2.vue';
import Banner3 from './components/Banner3.vue';
import Letter from './components/Letter.vue';

export default {
  name: 'App',
  components: {
    Header,
    Content,
    Feature,
    Products,
    Banner1,
    NewProduct,
    Banner2,
    Banner3,
    Letter
  }
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
}
a {
  text-decoration: none;
}
body {
  width: 100% ;  
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
}
button.nomal{
  font-size: 1.2em;
  font-weight: 600;
  padding: 0.5em 2em;
  color: #000;
  background-color: #fff;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: 0.2s ease;
}
button.white{
  font-size: 1.2em;
  font-weight: 600;
  padding: 0.5em 2em;
  color: #fff;
  background-color: transparent;
  cursor: pointer;
  border: 1px solid #fff;
  outline: none;
  transition: 0.2s ease;
}
</style>
