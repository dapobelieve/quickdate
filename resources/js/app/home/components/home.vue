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
                              <div class="span6"> 
                                  <div class="row-fluid">
                                                                      
                                      <select name="month" class="selectpicker span12">
                                        <option>Month</option>
                                        <option>January</option>       
                                          <option>February</option>       
                                          <option>March</option>       
                                          <option>April</option>       
                                          <option>May</option>       
                                          <option>June</option>       
                                          <option>July</option>       
                                          <option>August</option>       
                                          <option>September</option>       
                                          <option>October</option>       
                                          <option>November</option>       
                                          <option>December</option>  
                                      </select>
                                  </div>
                              </div>
                              <div class="span3"> 
                                  <div class="row-fluid">                                     
                                      <select name="day" class="selectpicker span12">
                                        <option>day</option>
                                        <option>1</option>       
                                          <option>2</option>       
                                          <option>3</option>       
                                          <option>4</option>       
                                          <option>5</option>       
                                          <option>6</option>       
                                          <option>7</option>       
                                          <option>8</option>       
                                          <option>9</option>       
                                          <option>10</option>       
                                          <option>11</option>       
                                          <option>12</option>       
                                          <option>13</option>       
                                          <option>14</option>       
                                          <option>15</option>       
                                          <option>16</option>       
                                          <option>17</option>       
                                          <option>18</option>       
                                          <option>19</option>       
                                          <option>20</option>       
                                          <option>21</option>       
                                          <option>22</option>       
                                          <option>23</option>       
                                          <option>24</option>       
                                          <option>25</option>       
                                          <option>26</option>       
                                          <option>27</option>       
                                          <option>28</option>       
                                          <option>29</option>       
                                          <option>30</option>       
                                          <option>31</option>   
                                      </select>
                                  </div>
                              </div>
                              <div class="span3">     
                                  <div class="row-fluid">                         
                                      <select name="year" class="selectpicker span12">
                                        <option>Year</option>
                                            <option>2009</option>       
                                              <option>2010</option>       
                                              <option>2011</option>       
                                              <option>2012</option>       
                                              <option>2013</option>       
                                              <option>2014</option>       
                                              <option>2015</option>       
                                              <option>2016</option>       
                                              <option>2017</option>       
                                              <option>2018</option>   
                                      </select>
                                  </div>
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