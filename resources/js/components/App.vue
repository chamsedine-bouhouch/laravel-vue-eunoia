<template>
    <div id="main">
        <router-link to="/">Home</router-link>
        <br>
        <router-link to="/login">Login</router-link>

        <router-view></router-view>
    </div>
</template>
  
<script>
export default {

}
</script>
<style>
#main{
    margin:2%
}
</style>
 