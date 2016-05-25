import Vue from 'vue';
import Test from './Test.vue';
import Skills from './Skills.vue'


new Vue ({
  el: '#app',
  components: {
     Test
   }
}),
 new Vue ({
   el: '#skills',
   components: {
     Skills
   }
 })
