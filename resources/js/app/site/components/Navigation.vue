<template>
  <div>
    <v-toolbar scroll-off-screen flat fixed tile scroll-target="#fix-top" fixed color="#fff" class="mb-5">
      <v-toolbar-side-icon class="hidden-md-and-up"></v-toolbar-side-icon>      
      <v-spacer class="hidden-md-and-up"></v-spacer>
      <v-toolbar-title>QuickDate</v-toolbar-title>

      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat>Link One</v-btn>
        <v-btn flat>Link Two</v-btn>
        <v-spacer></v-spacer>
          <v-menu  attach nudge-left="75" bottom position-y min-width="200" offset-y>
            <v-toolbar-side-icon slot="activator"></v-toolbar-side-icon>
            <v-list style="border-radius: 20px">
              <v-list-tile v-for="(item, index) in items" :key="index" @click="">
                <v-list-tile-title class="text-xs-center">{{ item.title }}</v-list-tile-title>
              </v-list-tile>
            </v-list>
          </v-menu>
      </v-toolbar-items>
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