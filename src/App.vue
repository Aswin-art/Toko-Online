<template>
  <!--<div id="nav">
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </div>-->
  <router-view/>
</template>

<style>
  html, body{
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
  }

  p, h1, h2, h3, h4, h5{
    margin: 0;
  }

  a{
    text-decoration: none;
  }

  li{
    list-style-type: none;
  }

  ul{
    margin: 0;
    padding: 0;
  }
</style>
