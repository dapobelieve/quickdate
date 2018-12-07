<template>
  <!-- <div class="chaty"> -->
    <v-layout row>
      <v-flex xs12 sm12 md12 >
        <v-card color="lightgrey">
          <v-toolbar style="margin-bottom: 0px" color="cyan" dark>
            <v-toolbar-side-icon></v-toolbar-side-icon>
            <v-toolbar-title>Jane Doe</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn icon>
              <v-icon>search</v-icon>
            </v-btn>
          </v-toolbar>
  
          <v-list class="chat-history">
            <span class="chat-data" v-for="(item, index) in 5" :key="index">
              <v-layout :align-end="(index % 2 == 0)" column >
                <div class="small message-data-name">Dapo Believe</div>
                <div :class="{'message-other': (index % 2 == 1)}" class="message pa-2" >
                  <span  v-if="index%2 == 0" class="">
                    {{ index }} Hey dear  
                  </span>
                  <span v-else class="message-content">
                    {{ index }}Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi eaque ullam lab
                  </span>
                </div>
                <div style="font-size: 10px">hello who be</div>
              </v-layout>
            </span>
          </v-list>
          <v-layout mt-2 mb-4 row wrap>
            <v-flex d-flex  xs11 sm11 md11 color="blue">
              <v-textarea solo rows="2" label="Enter your message" value=""></v-textarea>
            </v-flex>
            <v-flex d-flex xs1 sm1 md1>
              <v-icon @click="triga">send</v-icon>
            </v-flex>
          </v-layout>
        </v-card>
        
      </v-flex>
    </v-layout>
  <!-- </div> -->
</template>
<script>
export default {
  mounted(){
    console.log('Welcome to chatty!')
  },
  data: () => ({
    show: false,
    message: 'Hey!',
    marker: true,
    
  }),
  methods: {
    triga () {
      axios.get('api/me')
      .then(response => {
        // console.log(response.data)
      })
      .catch(error => {
        console.log(error.response.data)
      })
    },
    getUser () {
      // alert('works')
    }
  },
  mounted() {
    this.getUser();
  }
}
</script>
<style scoped>
.chat-data:first-child {
  margin-top: 30px;
}
.chat-data {
/*   background-color: grey; */
  padding: 0 10px 0 10px;
}

.chat-history {
  overflow-y: scroll;
  overflow-x: hidden;
  padding: 0px 2px 1px 0px;
  height: 350px;
  display: grid;
  grid-row-gap: 9px;
}

.message-data-name {
  font-size: 10px;
  font-weight: bolder;
/*   font-style:  */
}
.message-other {
  background-color: grey !important;
}
.message {
  border-radius: 10px;
  background-color: yellow;
  max-width: 500px;
  color: black;
}

@media only screen and (max-width: 700px){
.chat-history {
    grid-row-gap: 11px
  }
}
</style>