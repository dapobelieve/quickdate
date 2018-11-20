<template>
    <div class="chat">
      <div class="ryt">
        <div class="btom">
          <v-layout row wrap>
                <v-flex d-flex md12>
                  <v-card flat tile class="rounder" color="white"flat tile >
                    <v-card-text> 2 {{ lorem.slice(0, 40) }}</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex d-flex md12>
                  <v-card class="rounder" color="white" flat tile >
                    <v-card-text> 3 {{ lorem.slice(0, 40) }}</v-card-text>
                  </v-card>
                </v-flex>
          </v-layout>
        </div>
      </div>
    </div>
</template>
<script>
export default {

}
</script>