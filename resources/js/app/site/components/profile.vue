<template>
<v-layout class="lft" row wrap> 
    <v-flex xs12 >
      <v-card class="rounder">
        <v-img class="mb-5 pb-5" src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" aspect-ratio="2.75">
          <v-flex md12 align-self="center">
            <v-card-text >
              <h5 style="color: white" class="title font-weight-bold">Dapo Believe</h5>
            </v-card-text>
          </v-flex>
        </v-img>
        <v-layout row wrap >
          <v-flex style="margin-top: -156px; margin-left: 40px" md3>
            <v-card class="rounder">
              <v-img class="white--text" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
                <v-container >
                  <v-layout fill-height>
                    <v-flex align-end xs12 flexbox>
                      <v-btn>Upload Picture</v-btn>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-img>
            </v-card>
          </v-flex>
        </v-layout>
      </v-card>
    </v-flex>
    <v-layout column wrap>
        <v-flex d-flex xs12 sm7>
            <v-layout row wrap>
                <v-flex d-flex md6>
                    <v-card color="indigo lighten-2" dark tile flat>
                      <v-card-text> 1 {{ lorem.slice(0, 70) }}</v-card-text>
                    </v-card>
                </v-flex>
                <v-flex d-flex md6>
                    <v-layout row wrap>
                      <v-flex d-flex md8>
                        <v-card color="amber lighten-2" tile flat>
                          <v-card-text> 2 {{ lorem.slice(0, 40) }}</v-card-text>
                        </v-card>
                      </v-flex>
                      <v-flex d-flex md4>
                        <v-card color="amber lighten-2" tile flat>
                          <v-card-text> 3 {{ lorem.slice(0, 40) }}</v-card-text>
                        </v-card>
                      </v-flex>
                      <v-flex d-flex md6>
                        <v-card color="amber lighten-2" tile flat>
                          <v-card-text> 2 {{ lorem.slice(0, 40) }}</v-card-text>
                        </v-card>
                      </v-flex>
                      <v-flex d-flex md6>
                        <v-card color="amber lighten-2" tile flat>
                          <v-card-text> 3 {{ lorem.slice(0, 40) }}</v-card-text>
                        </v-card>
                      </v-flex>
                    </v-layout>
                </v-flex>
                <v-flex d-flex md4 sm6>
                    <v-card color="indigo lighten-2" dark tile flat>
                        <v-card-text> 1 {{ lorem.slice(0, 70) }}</v-card-text>
                    </v-card>
                </v-flex>
                <v-flex d-flex md8 sm6>
                    <v-layout row wrap>
                        <v-flex d-flex md6>
                            <v-card color="dark lighten-2" dark tile flat>
                                <v-card-text> 1 {{ lorem.slice(0, 70) }}</v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex d-flex md6>
                            <v-card color="red lighten-2" dark tile flat>
                                <v-card-text> 1 {{ lorem.slice(0, 70) }}</v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-flex>
    </v-layout>
</v-layout>
</template>
<script>
export default {
  data () {
    return {
      card: {
        title: 'Upload a Photo'
      },
      lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
    }
  },
    mounted () {
        // alert('Hello profile')
    }
}
</script>
<style>
.rounder {
  border-radius: 5px;
}
.lft {
  overflow-y: hidden;
  overflow-x: hidden;
  max-height: auto;
}
</style>