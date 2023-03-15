<template>
    <div>
    <!--header area start-->
    
       <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu offcanvas_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a v-on:click="canvasOpen"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a v-on:click="canvasClose"><i class="icon-x"></i></a>  
                        </div>
                        <div class="header_social text-right">
                            <ul>
                                <!-- <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li> -->
                                <li><a href="https://www.facebook.com/anokhadhaga/"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/Anokha_dhaga/"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="search_container">
                            <div>
                                <autocomplete
                                  :search="search"
                                  placeholder="Search Products"
                                  :get-result-value="getResultValue"
                                  @submit="handleSubmit"
                                ></autocomplete>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <ul v-if="!userDetails" class="d-inline-flex">
                                <li><router-link to="/Register">Register</router-link></li>
                                <li><span>/</span></li>
                                <li><router-link to="/Login">Login</router-link></li>
                            </ul>
                        </div>


                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <router-link to="/" style="line-height: unset; color: #0ebaeb; font-weight: bold; font-size: 15px">{{userDetails.name}}</router-link>
                                    <ul class="sub-menu">
                                        <li><router-link v-if="userDetails" :to="{name: 'orders', params: { id: userDetails.id}}">Your Orders</router-link></li>
                                        <li><a v-if="userDetails" @click.prevent="logout">Logout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <router-link to="/">Home</router-link>
                                </li>
                                 <li v-for="category in categories" :key="category.index" class="mega_items">
                                            <router-link :to="{name: 'Category', params: { cat: category.name}}" >{{category.name}}<i v-if="category.subcategories.length > 0" class="fa fa-angle-down"></i></router-link>
                                            <ul>
                                                <li>
                                                     <div class="mega_menu" v-if="category.subcategories.length > 0">
                                                <ul class="">
                                                    <li class="menu-item-has-children" v-for="subcategory in category.subcategories" :key="subcategory.index">
                                                        <router-link :to="{name: 'subCategory', params: {  cat: category.name,  subcat: subcategory.name}}" class="text-capitalize font-weight-bold">{{subcategory.name}}</router-link>
                                                        <ul v-if="category.subsubcategories.length > 0">
                                                            <li v-for="subsubcategory in category.subsubcategories" :key="subsubcategory.index" v-if="subcategory.id == subsubcategory.sub_category_id"><router-link :to="{name: 'subSubCategory', params: { cat: category.name, subcat: subcategory.name, subsubcat: subsubcategory.name}}">{{subsubcategory.name}}</router-link></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                                </li>
                                            </ul>
                                           
                                        </li>
                                <li class="menu-item-has-children">
                                    <router-link to="/contact"> Contact Us</router-link> 
                                </li>
                            </ul>
                        </div>
                        <div class="call-support">
                            <p><a href="tel:919913902090">(+91) 9913902090</a></p>
                        </div>
                        <div class="offcanvas_footer">
                                                    
                            <span><a href="mailto:anokhadhaga@gmail.com"><i class="fa fa-envelope-o"></i> anokhadhaga@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header header_two">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                       
                        <div class="col-lg-12">
                            <div class="header_social text-right">
                                <ul>
                                    <li><a href="https://www.facebook.com/anokhadhaga/"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/Anokha_dhaga/"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_middle header_middle2">
                <div class="container">
                    <div class="row align-items-center">
                       <div class="col-lg-4 col_search">
                            <autocomplete
                              :search="search"
                              placeholder="Search Products"
                              :get-result-value="getResultValue"
                              @submit="handleSubmit"
                              class="mobail_s_none"
                            ></autocomplete>
                           <!-- <div class="search_container mobail_s_none">
                                <form action="#">
                                    <div class="search_box">
                                        <input placeholder="Search here..." type="text" v-model="search">
                                         <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                                    </div>
                                </form>
                             
                            </div> -->
                       </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 col-3">
                            <div class="logo">
                                <router-link to="/"> <img src="/img/logo/logo.png" alt="Rihu Kollection"> </router-link>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-7 col-8">
                            <div class="header_account_area">
                                <div class="header_account_list register main_menu">
                                    <nav>

                                    <ul v-if="userDetails">
                                        <li>
                                            <router-link to="/" style="line-height: unset">{{userDetails.name}}<i class="fa fa-angle-down"></i></router-link>
                                            <ul class="sub_menu">
                                                <li style="display: block!important"><router-link :to="{name: 'orders', params: { id: userDetails.id}}" class="text-dark">Your Orders</router-link></li>
                                                <li style="display: block!important"><a  @click.prevent="logout" class="text-dark">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </nav>
                                    <ul v-if="!userDetails">
                                        <li><router-link to="/Register">Register</router-link></li>
                                        <li><span>/</span></li>
                                        <li><router-link to="/Login">Login</router-link></li>
                                    </ul>
                                </div>
                                <div class="header_account_list header_wishlist">
                                    <router-link to="/login" v-if="!userDetails"><span class="lnr lnr-heart"></span> <span class="item_count">{{wishlists.length}}</span> </router-link>
                                    <router-link v-if="userDetails" :to="{name: 'wishlist', params: { id: userDetails.id}}"><span class="lnr lnr-heart"></span> <span class="item_count">{{wishlists.length}}</span> </router-link>
                                </div>
                                <div class="header_account_list  mini_cart_wrapper">
                                   <router-link to="/login" v-if="!userDetails"><span class="lnr lnr-cart"></span><span class="item_count">{{carts.length}}</span></router-link>
                                   <router-link v-if="userDetails" :to="{name: 'cart', params: { id: userDetails.id}}"><span class="lnr lnr-cart"></span><span class="item_count">{{carts.length}}</span></router-link>
                         
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom sticky-header">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-8 offset-lg-2">
                            <!--main menu start-->
                            <div class="main_menu  menu_two color_two menu_position"> 
                                <nav>  
                                    <ul>
                                        <li><router-link class="active" to="/">home</router-link></li>
                                        <li v-for="category in categories" :key="category.index" class="mega_items">
                                            <router-link :to="{name: 'Category', params: { cat: category.name}}" v-scroll-to="{element: '.'+catParam+''}">{{category.name}}<i v-if="category.subcategories.length > 0" class="fa fa-angle-down"></i></router-link>
                                            <div class="mega_menu" v-if="category.subcategories.length > 0">
                                                <ul class="mega_menu_inner row">
                                                    <li class="menu-item-has-children col-md-3" v-for="subcategory in category.subcategories" :key="subcategory.index">
                                                        <router-link :to="{name: 'subCategory', params: {  cat: category.name,  subcat: subcategory.name}}" v-scroll-to="{element: '.'+subcatParm+''}" class="text-capitalize font-weight-bold">{{subcategory.name}}</router-link>
                                                        <ul v-if="category.subsubcategories.length > 0">
                                                            <li v-for="subsubcategory in category.subsubcategories" :key="subsubcategory.index" v-if="subcategory.id == subsubcategory.sub_category_id"><router-link :to="{name: 'subSubCategory', params: { cat: category.name, subcat: subcategory.name, subsubcat: subsubcategory.name}}">{{subsubcategory.name}}</router-link></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li><router-link to="/contact"> Contact Us</router-link></li>
                                    </ul>  
                                </nav> 
                            </div>
                            <!--main menu end-->
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--header area end-->
    <vue-page-transition name="fade-in-down">
        <router-view>
        
        </router-view>
    </vue-page-transition>

        <!--footer area start-->
    <footer class="footer_widgets color_two">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-7">
                        <div class="widgets_container contact_us">
                           <div class="footer_logo">
                               <h3>About Us</h3>
                           </div>
                           <p class="footer_desc">Dhaval dodiya, post graduate banker joined family business of 150 years old weaving tradition . 

At anokhadhaga, we connect you to the roots patola heritage, most beautiful handcrafted and worlds best saree from weaving community. We discover the best design from artisans from all over india. And reach to you at your place.
</p>
                            <p><span>Address:</span> 64, vahanvati krupa, salangpur road , botad Gujarat.</p>
                            <p><span>Email:</span> <a href="mailto:anokhadhaga@gmail.com">anokhadhaga@gmail.com</a></p>
                            <p><span>Call us:</span> <a href="tel:919913902090">+91 9913902090</a> </p>
                        </div>          
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                            
                                <ul>
                                    <!-- <li><a href="">About Us</a></li>
                                    <li><a href="">Delivery Information</a></li> -->
                                    <li><router-link to="/terms"> Terms & Conditions</router-link></li>
                                    <li><router-link to="/policy"> Privacy Policy</router-link></li>
                                    <li><router-link to="/refund"> Refund Policy</router-link></li>
                                    <li><router-link to="/contact"> Contact Us</router-link></li>
                                    <!-- <li><a href="#"> Site Map</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="widgets_container widget_menu">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="">Brands</a></li>
                                    <li><a href="">  Gift Certificates</a></li>
                                    <li><a href="">Affiliate</a></li>
                                    <li><a href="">Specials</a></li>
                                    <li><a href="">Returns</a></li>
                                    <li><a href=""> Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="widgets_container widget_newsletter">
                            <h3>Sign up newsletter</h3>
                            <p class="footer_desc">Get updates by subscribe our weekly newsletter</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" @submit.prevent="addNewsletter">
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email" v-model="email"/>
                                    <button id="mc-submit" type="submit">Subscribe</button>
                                </form>
                                <!--Start -->
                                <div class="header_social text-centre mt-2">
                                    <ul class="p-2">
                                        <li class="fb-social"><a href="https://www.facebook.com/anokhadhaga/"><i class="ion-social-facebook"></i></a></li>
                                        <li class="insta-social"><a href="https://www.instagram.com/Anokha_dhaga/"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </div><!--end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>Copyright  © {{new Date().getFullYear()}}  <router-link to="/">Anokha Dhaga</router-link>  . All Rights Reserved. Design by  <router-link to="https://nocat.tech">nocat technologies</router-link></p>
                        </div>
                    </div>    
                    <div class="col-lg-6 col-md-5">    
                        <div class="footer_payment">
                            <ul>
                                <!-- <li><a href="#"><img src="/img/icon/paypal1.jpg" alt=""></a></li> -->
                                <li><a href=""><img src="/img/icon/paypal2.jpg" alt=""></a></li>
                                <!-- <li><a href="#"><img src="/img/icon/paypal3.jpg" alt=""></a></li> -->
                                <li><a href=""><img src="/img/icon/paypal4.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
    <!--footer area end-->
   
   
    </div>
</template>

<script>
import '@trevoreyre/autocomplete-vue/dist/style.css'
export default {
    
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            userDetails:{},
            carts:{},
            products:{},
            categories:'',
            searchProducts:'',
            email:{}
        }
    },
    props: {
        userDetails: {},
        carts:{},
        wishlists:{},
        products:{},
        categories:'',
        searchProducts:''

    },
    watch: {
        // call again the method if the route changes
        '$route': 'fetchUser'
    },
    created() {
        this.fetchUser(),
        this.fetchProducts(),
        this.fetchCategory()
    },
    methods:{
       search(input) {
        if (input.length < 1) { return [] }
        return this.axios.get(`/api/searchProducts/${input}`).then(response => {
           var products = response.data;
        //    console.log(this.products);
        return products.filter(search => {
            
          return search.name.toLowerCase()
            .startsWith(input.toLowerCase())
        })
       })
    },

    // We want to display the name 
    getResultValue(result) {
      return result.name
    },
    handleSubmit(result) {
      this.$router.push({name: 'Product-Details', params: { name: result.name}})
    },
            fetchUser:function() {
                this.axios.get('/user').then(response => {
                  this.userDetails = response.data;
                    this.axios
                    .get(`/api/cart/${response.data.id}`)
                    .then((response) => {
                        this.carts = response.data;
                        this.axios
                            .get(`/api/wishlist/${this.userDetails.id}`)
                            .then((response) => {  
                                this.wishlists = response.data;
                                console.log();
                            });
                    });
                });
            },
            fetchProducts:function(){
            this.axios.get('/api/products').then(response => {
                  this.products = response.data;
                //   window.location.reload();
                  console.log(response.data)
                });
            },
            fetchCategory:function(){
            this.axios.get('/api/category').then(response => {
                  this.categories = response.data;
                //   window.location.reload();
                  console.log(response.data)
                });
            },
            addNewsletter:function() {
                this.axios.post('/api/addNewsletter',{email:this.email}).then(response => {
                  console.log(response.data)
                })
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
            },

            logout:function(){
               axios.post('/logout').then(response => {
                  if (response.status === 302 || 401) {
                    window.location.reload();
                  }
                  else {
                    // throw error and go to catch block
                  }
                }).catch(error => {

              });
            },

            canvasOpen(){
                $('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
            },
            canvasClose(){
                $('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
            },
            
        }
}
</script>
<style scoped>
[data-position=below] .autocomplete-result-list {
    z-index: 1000!important;
}
</style>
