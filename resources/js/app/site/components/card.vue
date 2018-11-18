<template>
<v-card class="rounder">
    <v-img class="white--text" height="200px" src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
    >
    </v-img>
    <v-card-title>
        <v-layout row wrap>
            <v-flex d-flex sm6 md6>
                <p class="user-details">
                    <span class="user-name">Dapo surajulationsdlasdklnasdklaslkdnaodas</span>
                    <span class="user-age">,&nbsp;28 </span>
                    <span class="">
                        &nbsp;<v-icon class="online">check_circle</v-icon>
                    </span>
                </p>
            </v-flex>
            <v-flex d-flex md12>
                <div class="story-details">
                    Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui
                </div>
            </v-flex>
        </v-layout>
    </v-card-title>
</v-card>
</template>
<style>
.rounder {
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
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
    width: 100px;
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    /*flex-grow: 1;*/
    color: black;
    font-size: 18px;
    font-weight: bold;
}
.user-age {
    display: inline-block;
    white-space: nowrap;
    color: black;
    font-size: 18px;
    /*font-weight: bold;*/
}
.sm-margin {
    margin-bottom: -20px !important;
}
.con-status {
    font-size: small;
}
.online {
    color: #00E676 !important;
    font-size: 18px;
}
</style>
<script>
export default {
    props: ['hasImage']

}
</script>