<template>
  <div  class="site">
    <v-container  fluid grid-list-md>
      <navy></navy>
      <v-layout id="fix-top" px-3 column wrap>
          <v-flex d-flex xs12 sm7>
              <v-layout row wrap>
                  <v-flex pt-5 d-flex md9>
                    <div class="lft">
                      <v-layout row wrap>
                        <v-flex d-flex xs6 sm4 md4 class="lg5-custom pr-2 mb-2" v-for="i in 100" :key="i" >
                          <card :hasImage="i"></card>
                        </v-flex>
                      </v-layout>
                    </div>
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
import card from './card.vue'
import chat from './chat.vue'
  export default {
    data () {
      return {
        lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
      }
    },
    components: {
      navy,
      card,
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
.ryt {
  padding-top: 0 !important;
  position: fixed;
  height: 100%;
}
</style>