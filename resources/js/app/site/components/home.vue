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
                        <v-flex d-flex xs6 sm4 md4 class="lg5-custom pr-2 mb-2" v-for="i in 100" :key="i" >
                          <card :hasImage="i"></card>
                        </v-flex>
                      </v-layout>
                    </div>
                  </v-flex>
                  <v-flex d-flex md3>
                    <div class="ryt">
                      <v-layout class="mr-2" row wrap>
                          <v-flex d-flex md12>
                            <v-card color="white" flat tile >
                              <v-list two-line>
                                <template v-for="(item, index) in items">
                                  <v-subheader
                                    v-if="item.header"
                                    :key="item.header"
                                  >
                                    {{ item.header }}
                                  </v-subheader>

                                  <v-divider
                                    v-else-if="item.divider"
                                    :inset="item.inset"
                                    :key="index"
                                  ></v-divider>

                                  <v-list-tile
                                    v-else
                                    :key="item.title"
                                    avatar
                                    @click=""
                                  >
                                    <v-list-tile-avatar>
                                      <img :src="item.avatar">
                                    </v-list-tile-avatar>

                                    <v-list-tile-content>
                                      <v-list-tile-title v-html="item.title"></v-list-tile-title>
                                      <v-list-tile-sub-title v-html="item.subtitle"></v-list-tile-sub-title>
                                    </v-list-tile-content>
                                  </v-list-tile>
                                </template>
                              </v-list>
                            </v-card>
                          </v-flex>
                          <!-- <v-flex d-flex md12>
                            <v-card color="white" flat tile >
                              <v-card-text> 3 {{ lorem.slice(0, 40) }}</v-card-text>
                            </v-card>
                          </v-flex> -->
                      </v-layout>
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
    data () {
      return {
        lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
      items: [
        { header: 'Today' },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg',
          title: 'Brunch this weekend?',
          subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?"
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg',
          title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
          subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend."
        },
        { divider: true, inset: true },
        {
          avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg',
          title: 'Oui oui',
          subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?"
        }
      ]
      }
    },
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