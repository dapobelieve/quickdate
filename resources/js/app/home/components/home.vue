<template>
    <div>
    <header>
        <div class="container clearfix">
            <!--logo-->
            <a href="#" id="logo" class="pull-left"> 
                <img src="/assets/img/logo.png" alt="logo">
            </a>
            <p class="slogan pull-left nmB">Quick Date</p> 
            <v-btn @click="formToggle = !formToggle" color="orange" class="pull-right">{{ formToggle ? 'Login' : 'Register'}}</v-btn>  
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
                      <form v-if="formToggle" @submit.prevent="regUser" id="joinForm" accept-charset="utf-8">
                        <fieldset>
                          <legend class="text-center nb nm"><span>Join Us for free</span></legend>
                          <p class="text-center">Your perfect match is just a click away</p>
                          
                          <div class="row-fluid">
                            <div class="span6 im">
                              <h4>I'm</h4>
                              <label class="radio inline male">
                                <input type="radio" v-model="registerForm.sex" name="sex" value="m" >
                                <span>Male</span>
                              </label>
                              <label class="radio inline female">
                                <input type="radio" v-model="registerForm.sex" name="sex" value="f">
                                <span>Female</span>
                              </label>
                            </div>
                            <div class="span6 looking">
                              <h4>Looking</h4>
                              <span class="checkbox inline male">
                                <input type="checkbox" v-model="registerForm.datetype" value="m">
                                <span>Male</span>
                              </span>
                              <span class="checkbox inline female">
                                <input type="checkbox" v-model="registerForm.datetype" value="f">
                                <span>Female</span>
                              </span>
                            </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Full Name</label>
                                  <input type="text" v-model="registerForm.name" placeholder="Name">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">DOB</label>
                                  <datetime v-model="registerForm.dob"  format="yyyy-MM-dd" 
                                     type="text" placeholder="Date of birth"></datetime>
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Email</label>
                                  <input type="text" v-model="registerForm.email" placeholder="Enter your Email">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Password</label>
                                  <input v-model="registerForm.password" type="password" placeholder="Enter your Password">
                              </div>
                          </div>

                          <div class="formFoot">
                              <button type="submit" class="btn">Join For Free</button>
                              <span class="leftSide">
                                  
                              </span>
                              <span class="rightSide"></span>
                          </div>
                          <span class="help-block text-center footForm">By signing up you agree our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></span>
                        </fieldset>
                      </form>
                      <!-- -----------LOGIN FORM HERE-------------------- -->
                      <form v-if="!formToggle" @submit.prevent="loginUser" id="joinForm" accept-charset="utf-8">
                        <fieldset>
                          <legend class="text-center nb nm"><span>Your Spouse is waiting</span></legend>
                          <!-- <p class="text-center">Your perfect match is just a click away</p> -->
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Email</label>
                                  <input type="text" v-model="loginForm.email" placeholder="Enter your Email">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="span12">
                                  <label class="no">Enter your Password</label>
                                  <input v-model="loginForm.password" type="password" placeholder="Enter your Password">
                              </div>
                          </div>
                          <div class="row-fluid">
                              <div class="text-xs-center span12">
                                  <v-btn @click="loginUser">Login</v-btn>
                              </div>
                          </div>
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
  import moment from 'moment'
  import { mapActions } from 'vuex'
  export default {
    data: () => ({
      formToggle: true,
      lorem: `Lorem ipsum dolor sit amet, mel at clita quando. Te sit oratio vituperatoribus, nam ad ipsum posidonium mediocritatem, explicari dissentiunt cu mea. Repudiare disputationi vim in, mollis iriure nec cu, alienum argumentum ius ad. Pri eu justo aeque torquatos.`,
      registerForm: {
        name: '',
        email: '',
        password: '',
        sex: '',
        datetype: [],
        location: ''
      },
      loginForm: {},
      errors: [],
      loginErrors: [],
    }),
    components: {
      sfooter
    },
    methods: {
      ...mapActions({
        register: 'register',
        login: 'login'
      }),
      nextPage() {
        this.$router.push({
          name: 'user-home'
        })
      },
      loginUser () {
        this.login({
          payload: this.loginForm,
          context: this
        })
        .then(() => {
          this.$router.replace({
            name: 'user-home'
          })
        })
      },
      regUser() {
        // alert('here');
        this.registerForm.dob =  moment(this.registerForm.dob).format('YYYY-MM-DD')+' 00:00'+':00',
        this.register({
          payload: this.registerForm,
          context: this
        })
        .then(() => {
          this.$router.replace({
            name: 'user-home'
          })
        })
      }
    }
  }
</script>
<style scoped>
input[type="text"], input[type="password"], input[type="date"] {
  background: white !important;
  color: black !important;
  padding: 0 !important;
  padding-left: 6px !important;
  font-size: 16px;
  height: 54px !important;
}
.form-container form select, .form-container form input[type="text"], .form-container form input[type="password"] {
  background: white !important;
}
</style>