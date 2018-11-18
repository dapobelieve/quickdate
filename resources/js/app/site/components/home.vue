<template>
  <div  class="site">
    <v-container  fluid grid-list-md>
      <navy></navy>
      <v-layout id="fix-top"  px-2 column wrap>
          <v-flex d-flex xs12 sm7>
              <v-layout row wrap>
                  <v-flex pt-5 d-flex md9>
                    <div class="lft">
                      <v-layout row wrap>
                        <v-flex d-flex sm6 md3 class="pr-2 mb-2" v-for="i in 100" :key="i" >
                          <card :hasImage="i"></card>
                        </v-flex>
                      </v-layout>
                    </div>
                  </v-flex>
                  <v-flex d-flex md3>
                    <div class="ryt">
                      <div class="btom">
                        <v-layout row wrap>
                            <v-flex d-flex md12>
                              <v-card  class="rounder" color="white"flat tile >
                                <v-card-text> 2 {{ lorem.slice(0, 40) }}</v-card-text>
                              </v-card>
                            </v-flex>
                            <v-flex d-flex md12>
                              <v-card  class="rounder" color="white"flat tile >
                                <v-card-text> 3 {{ lorem.slice(0, 40) }}</v-card-text>
                              </v-card>
                            </v-flex>
                        </v-layout>
                      </div>
                    </div>
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
  export default {
    data: () => ({
      lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`
    }),
    components: {
      navy,
      card
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
.ryt {
  padding-top: 0 !important;
  position: fixed;
  height: 100%;
}
</style>