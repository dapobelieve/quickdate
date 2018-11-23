<template>
    <div>
    <header>
        <div class="container clearfix">
            <!--logo-->
            <a href="#" id="logo" class="pull-left"> 
                <img src="/assets/img/logo.png" alt="logo">
            </a>
            <p class="slogan pull-left nmB">Quick Date</p> 
            <v-btn color="orange" class="pull-right">Login</v-btn>  
        </div>
    </header>
       
    <!-- Slider -->
    <section class="join-form">
        <div class="slider-container">
            <ul class="rslides" id="slider">
              <li><img src="/assets/img/slider/img-2.jpg"  alt="//"/></li>
            </ul>
        </div>
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-12">
                    <div class="form-container pull-right box animated pulse">
                      <form id="joinForm" accept-charset="utf-8">
                         <fieldset>
                          <legend class="text-center nb nm"><span>Join Us for free</span></legend>
                          <p class="text-center">Your perfect match is just a click away</p>
                          
                          <div class="row-fluid">
                            <div class="span6 im">
                              <h4>im</h4>
                              <label class="radio inline male">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="male" checked>
                                <span>male</span>
                              </label>
                              <label class="radio inline female">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="female">
                                <span>female</span>
                              </label>
                            </div>
                            <div class="span6 looking">
                              <h4>Looking</h4>
                              <span class="checkbox inline male">
                                <input type="checkbox" name="lookingMale" id="optionscheckbox1" value="man">
                                <span>male</span>
                              </span>
                              <span class="checkbox inline female">
                                <input type="checkbox" name="lookingfemale" id="optionscheckbox2" value="girl">
                                <span>female</span>
                              </span>
                            </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Name</label>
                                  <input type="text" name="name" placeholder="Name">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Country</label>
                                  <input type="text" name="country" placeholder="Country">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Username</label>
                                  <input type="text" name="usr" placeholder="Enter your Username">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Password</label>
                                  <input name="pass" type="password" placeholder="Enter your Password">
                              </div>
                          </div>
                          
                                  
                          <div class="formFoot">
                              <button @click.prevent="nextPage" type="submit" class="btn">Join For Free</button>
                              <span class="leftSide">
                                  
                              </span>
                              <span class="rightSide">
                                  
                              </span>
                          </div>
                          
                                  
                          <span class="help-block text-center footForm">By signing up you agree our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></span>
                        </fieldset>
                      </form>
                    </div>                  
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider -->

    <v-container fluid grid-list-sm>
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
    </v-container>
    <sfooter></sfooter>
</div>
</template>
<script>
  import sfooter from './footer.vue'
  export default {
    data: () => ({
      lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
      login: {
        btn: false
      }
    }),
    components: {
      sfooter
    },
    methods: {
      nextPage() {
        this.$router.push({
          name: 'user-home'
        })
      }
    }
  }
</script>