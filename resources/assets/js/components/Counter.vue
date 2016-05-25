<template>
  <h3>
    {{subject}} <span v-if="count = 0">0</span><span v-else>
      {{count}}
    </span>
    <button @click="count += 1"><i class="fa fa-plus " aria-hidden="true"></i></button>
    <button @click="count -= 1"><i class="fa fa-minus " aria-hidden="true"></i></button>
  </h1>
  <input type="number" v-model="count" ></input>


  <pre>
    {{ $data | json }}
  </pre>
</template>


<script>
   export default {
     props: ['subject'],
     data: function () {
       return{
         count: 0
       }
     }
   }
</script>

<style>
  h3  {
    font-family: sans-serif;
  }
  button {
    color: aquamarine;

  }
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
      /* display: none; <- Crashes Chrome on hover */
      -webkit-appearance: none;
      margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
  }
</style>
