<template>
  <div id="app1">
    <!-- <div id="app-component">
      <nav class="lists">
        <ul>
          <my-list v-bind:message="title">sASas</my-list>
        </ul>
      </nav>
    </div> -->

    <h1>{{message}} </h1>
    <img src="./assets/logo.png">
    <!-- <router-view/> -->
    <Hello1 v-bind:message="message" v-bind:test="test" :objA="testObj" :array="testArray"></Hello1>

    <HelloWorld2/>

    <Hello2-component/>
  </div>
</template>

<script>
import Hello1 from "./components/HelloWorld1"
export default {
  name: 'App',
  components : {
    Hello1
  },
  data(){
    return{
      message: "dasd",
      test : 100,
      testObj : {
        obj1 : "obj1",
        obj2 : "obj2"
      },
      testArray : [
        "array1","array2"
      ]
    }
  },
  mounted(){
    console.log(this);
  }
}
</script>
<style scoped>
#app1 {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #1479df;
  margin-top: 60px;
}

#app1 h1{
  color: red;
}
</style>
