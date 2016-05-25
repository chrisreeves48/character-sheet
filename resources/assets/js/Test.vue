<template>

  <div class="container">


      <div class="row">
      <div class="col-xs-4">
          <counter subject="LVL"></counter>
      </div>

        <div class="col-xs-4">
          <counter subject="STR"></counter>
        </div>

        <div class="col-xs-4">
          <counter subject="AGI"></counter>
        </div>
      </div>

  </div>
  <pre>
    {{ $data | json }}
  </pre>


</template>



<script>
import Counter from  './components/Counter.vue'
export default {
    data() {
      return {
        count: 0
      }
    },
    methods: {
      updateCount: function() {
        this.count += 1;
      }
    },
    components: {
      Counter
    }
  }
</script>

<style media="screen">
  .error{
    color: red;
  }

  .wrapper  {
    text-align: center;
  }
</style>
