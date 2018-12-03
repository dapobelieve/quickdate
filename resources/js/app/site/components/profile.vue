<template>
<v-layout class="lft" row wrap> 
    <v-flex xs12 >
      <v-card class="rounder">
        <v-img height="350" class="mb-5" src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" aspect-ratio="2.75">
        </v-img>        
      <v-layout mx-3 class="user-data" column wrap>
        <v-flex d-flex xs12 sm7 class="mb-5">
            <v-layout row wrap>
                <v-flex d-flex sm6 md3>
                  <v-card color="indigo lighten-2" width="215" class="rounder">
                    <v-img class="white--text"widht="400px" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
                      <v-container >
                        <v-layout row wrap>
                          <v-flex align-self-end xs12 d-flex>
                            <v-btn style="margin-top: 155px">Upload Picture</v-btn>
                          </v-flex>
                        </v-layout>
                      </v-container>
                    </v-img>
                  </v-card>
                </v-flex>
               <!--  <v-flex> -->
                <v-flex d-flex md9>
                  <v-layout row wrap>
                    <v-flex d-flex sm12 md12 align-content-end>
                      <!-- <v-card-title class="user-name  headline">
                        Believe, 30
                      </v-card-title> -->
                    </v-flex>
                    <v-flex d-flex sm12 md12>
                      <v-card-title class="user-name  headline">
                        Believe, 30
                      </v-card-title>
                    </v-flex>
                    <v-flex d-flex sm12 md12>
                      <v-card color="green lighten-2" dark tile flat>
                        <v-card-text> 1 {{ lorem.slice(0, 70) }}</v-card-text>
                      </v-card>
                    </v-flex>
                  </v-layout>
                </v-flex>
            </v-layout>
        </v-flex>
        
      </v-layout>
      </v-card>
      <!-- <v-layout row wrap style="margin-top: -200px; margin-bottom: 24px" >
          <v-flex style="align-self: center; margin-bottom: 90px" xs6 sm6 offset-sm3 md3 offset-md1>
            <v-card width="215" class="rounder">
              <v-img class="white--text" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg">
                <v-container >
                  <v-layout row wrap>
                    <v-flex align-self-end xs12 d-flex>
                      <v-btn style="margin-top: 155px">Upload Picture</v-btn>
                    </v-flex>
                  </v-layout>
                </v-container>
              </v-img>
            </v-card>
          </v-flex>
          <v-flex d-flex sm6 md6  class="name-info">
            <v-layout row wrap >
              <v-flex  md12>
                <div class="bio">
                <h1 class="username headline font-weight-bold">Believe, 30</h1>
                </div>
              </v-flex>
              <v-flex md12>
                <h1 class="about font-weight-bold">About me</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eligendi eaque adipisci. Molestiae voluptates quos expedita beatae iste debitis iure mollitia odit accusantium, quaerat aliquid! Natus numquam incidunt ut,</p>
              </v-flex>
            </v-layout>
          </v-flex>
      </v-layout> -->
    </v-flex>
    
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
.user-name {
  font-weight: 600;
  color: white;
  z-index: 1000
}
.user-data {
  margin-top: -200px !important;
  margin-bottom: 0px !important;
}
@media only screen and (max-width: 900px) {
  .bio {
    margin-top: 25px;
  }
}
.bio {
  /*margin-top: 205px*/
}
.name-info {
  margin-top: -96px; 
  z-index: 0; 
  align-self: flex-end;
}
.rounder {
  border-radius: 5px;
}
.about {
  color: #171414;
  margin: 0;
  margin-top: 30px;
  font-size: 19px; 
}
.lft {
  overflow-y: hidden;
  overflow-x: hidden;
  max-height: auto;
}
.username {
  margin: 0; 
  font-size: 28px; 
  color: white !important;
}
</style>