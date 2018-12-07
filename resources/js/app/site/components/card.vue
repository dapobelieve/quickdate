<template>
<v-card class="rounder">
    <v-img class="white--text" height="150px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"></v-img>
    <v-card-title>
        <v-layout row wrap>
            <v-flex align-self-center sm12 md12 v-if="user">
                <div class="user-details">
                    <span class="user-name">{{ user.name }}</span>
                    <span class="user-age">,&nbsp;28 </span>
                    <span class="">
                        <img style="margin-left: 20px" src="assets/online.png" alt="">
                    </span>
                </div>
                <div class="story-details">
                    Curabitur aliquet quam id dui posuere blandit. Vestibulum ac Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, distinctio nostrum!
                </div>
            </v-flex>
        </v-layout>
    </v-card-title>
</v-card>
</template>
<script>
export default {
    props: {
        userdata: {
            type: Object,
            required: true
        }
    },
    data () {
        return {
            user: this.userdata
        }
    },
    mounted () {
        console.log(this.userdata)
    }
}
</script>
<style scoped>
.rounder {
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
}
.story-details {
    display: block;
}
.user-details {
    font-family: 'Roboto';
    display: flex;
    font-size: 18px;
    font-weight: bold;
    color: #222;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.user-name {
    /*width: 100px;*/
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    /*flex-grow: 1;*/
    color: black;
    font-size: 18px;
    font-weight: bold;
}
.story-details {
    /*width: auto;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;*/
    color: black;
    word-wrap: break-word;
    font-size: 14px;
}
.user-age {
    display: inline-block;
    white-space: nowrap;
    color: black;
    font-size: 18px;
    /*font-weight: bold;*/
}
.con-status {
    font-size: small;
}
.online {
    color: #00E676 !important;
    font-size: 18px;
}
</style>