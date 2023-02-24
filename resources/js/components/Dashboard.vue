<template lang="">
    <div>
        <h1>Welcome {Username}, <a @click=”logout”>Logout</a></h1>
    </div>
    
</template>
<script>
import { ref } from 'vue'

export default {
  setup() {
    const count = ref(0)

    // expose to template and other options API hooks
    return {
      count
    }
  },

  mounted() {
    console.log(this.count) // 0
  }
}
</script>