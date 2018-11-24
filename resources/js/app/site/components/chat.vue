<template>
  <div class="col-md-3 ryt chat">
    <v-layout  column>
        <v-flex d-flex md12>
          <v-card  color="white" >
            <v-list two-line>
                <v-subheader>Chats</v-subheader>
                <v-divider></v-divider>
                <div class="scrollbar" id="scroll-kit">
                  <v-list-tile v-for="i in 12" :key="i" avatar @click="">
                    <v-list-tile-avatar>
                      <img src="https://cdn.vuetifyjs.com/images/lists/2.jpg">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title>
                        Summer BBQ <span class="grey--text text--lighten-1">4</span>
                      </v-list-tile-title>
                      <v-list-tile-sub-title>
                        <span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?
                      </v-list-tile-sub-title>
                    </v-list-tile-content>
                  </v-list-tile>
                </div>
                <!-- <div>Search <v-icon small>search</v-icon></div> -->
            </v-list>
          </v-card>
        </v-flex>
    </v-layout>
  </div>
</template>
<script>
export default {

}
</script>
<style scoped>
.scrollbar {
  height: 420px;
  overflow-y: scroll;
  background-color: #f5f5f5
}
@media only screen and (min-width: 1400px) {
  .scrollbar {
    height: 500px;
  }
}
#scroll-kit::-webkit-scrollbar {
  width: 5px;
  background-color: red;
}
#scroll-kit::-webkit-scrollbar-thumb {
    background-color: #b1acac;
    border-radius: 10px;
}
#scroll-kit::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #FFF;
}
.ryt {
  padding-top: 0 !important;
  position: fixed;
  height: 100%;
}
</style>