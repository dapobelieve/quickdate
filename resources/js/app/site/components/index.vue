<template>
  <div  class="site">
    <v-container  fluid grid-list-md>
      <navy></navy>
      <v-layout id="fix-top" px-3 column wrap>
          <v-flex d-flex xs12 sm7>
              <v-layout row wrap>
                  <v-flex d-flex md9 mb-2>
                      <router-view></router-view>
                  </v-flex>
                  <v-flex d-flex md3>
                    <!-- <div > -->
                      <chat></chat>
                    <!-- </div> -->
                  </v-flex>
              </v-layout>
          </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
import navy from './Navigation.vue'
import chat from './chat.vue'
  export default {
    data () {
      return {
        lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
      }
    },
    components: {
      navy,
      chat,
    }
  }
</script>
<style>
#fix-top {
  margin-top: 76px;
}
.site {
  background-color: #f9f9f9;
}
.container {
  padding: 0 !important;
  /*margin: 0 !important;*/
}


</style>