<template>
  <div class="lft pt-5">
    <v-layout row wrap>
    <v-flex d-flex xs6 sm4 md4 class="lg5-custom pr-2 mb-2" v-for="(user, i) in users" :key="i" >
        <!-- {{ user }} -->
      <card :userdata="user"></card>
    </v-flex>
    </v-layout>
  </div>
</template>
<script>
import card from './card.vue'
export default {
  data () {
    return {
      users: []
    }
  },
  components: {
    card
  },
  mounted () {
    Echo.join('online')
    .here((users) => {
        this.users = users
    })
    .joining((user) => {
        this.users.push(user)
    })
    .leaving((user) => {
        this.users = this.users.filter(u => (u.id !== user.id));
    })
  }
}
</script>
<style>
.rounder {
  border-radius: 7px;
}
.lft {
  overflow-y: hidden;
  overflow-x: hidden;
  max-height: auto;
}
@media (min-width: 1264px) and (max-width: 1903px) {
    .flex.lg5-custom {
        width: 20%;
        max-width: 20%;
        flex-basis: 20%;
    }
}
</style>