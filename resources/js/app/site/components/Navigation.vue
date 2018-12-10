<template>
  <div>
    <v-toolbar scroll-off-screen flat fixed tile scroll-target="#fix-top" color="#fff" elevation-2 class="mb-5">
      <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>      
      <v-spacer class="hidden-md-and-up"></v-spacer>
      <v-toolbar-side-icon :to="{name: 'user-home'}">Quick</v-toolbar-side-icon>

      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat>Link One</v-btn>
        <v-btn :to="{name: 'user-profile'}" flat>Profile</v-btn>
        <v-spacer></v-spacer>
      </v-toolbar-items>
      <v-menu class="hidden-sm-and-down" attach nudge-left="75" bottom min-width="200" offset-y>
        <v-toolbar-side-icon slot="activator"></v-toolbar-side-icon>
        <v-list style="margin-top: 2px; border-radius: 20px;">
          <v-list-tile v-for="(item, index) in items" :key="index" @click="">
            <v-list-tile-title class="text-xs-center">{{ item.title }}</v-list-tile-title>
          </v-list-tile>
        </v-list>
      </v-menu>
      <v-spacer></v-spacer>
    </v-toolbar>

  </div>
</template>
<script>
  export default {
    data: () => ({
      items: [
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me' },
        { title: 'Click Me 2' }
      ]
    })
  }
</script>
<style>
.fixtop {
  /*z-index: 200000*/
  /*margin-bottom: 20px;*/
}
</style>