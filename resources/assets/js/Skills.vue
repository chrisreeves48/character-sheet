<template>
<h1>Skill: {{skill}} {{points}}</h1>
<input type="text" v-model="points"></input>
</template>

<script>
export default {
  data(){
    return {
      points: 50,
    }
  },

  computed: {
    skill: function() {
      if (this.points <= 100) {
        return 'Beginner';
      }
      return 'Advanced';
    }
  }
}
</script>
