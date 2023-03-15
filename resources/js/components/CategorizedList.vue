<template>
    <div>
  <!-- <vue-element-loading :active="show" spinner="bar-fade-scale" color="#FF6700" background-color="rgba(255,255,255,1)" :is-full-screen="true"/> -->
    
    <!--slider area start-->
    <section class="slider_section color_two mb-4">
        <carousel class="slider_area" :responsive="{0:{items:1,nav:false,loop:true,dots:false,autoplay:true},600:{items:1,nav:false,loop:true,dots:false,autoplay:true},1000:{items:1,nav:false,loop:true,dots:false,autoplay:true}}" v-if="banners.length > 0">
            <div class="single_slider d-flex align-items-center" :id="'banner'+banner.id" v-for="banner in banners" :key="banner.id">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider_content">
                                <h1> </h1>
                                <h2> </h2>
                                <p>  </p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </carousel>
    </section>
    <!--slider area end-->
    
    <!--banner area start-->
    <!-- <div class="banner_area banner_gallery2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <router-link to="/"><img src="/img/bg/pic-1.jpg" alt=""></router-link> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <router-link to="/"><img src="/img/bg/pic-2.jpg" alt=""></router-link> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="banner2_sidebar">
                        <div class="banner_thumb mb-30">
                            <router-link to="/"><img src="/img/bg/pic-3.jpg" alt=""></router-link> 
                        </div>
                        <div class="banner_thumb">
                            <router-link to="/"><img src="/img/bg/pic-4.jpg" alt=""></router-link> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--banner area end-->

      <!-- Categories -->
<!-- <section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-2 col-lg-12 section_title">
                <h2>Shop By Category</h2>
            </div>
           
        
            <div class="col-2 col-md-2 col-lg-2 banner_thumb"  v-for="subcategory in subCategories" :key="subcategory">
                <img class="cat-img2"  src="/img/service/home.jpg">
                <div class="text-center mt-2">
                    <h4>{{subcategory.name}}</h4>
                </div>
            </div>

        </div>

    </div>
</section> -->
    <!-- Categories end -->

    <!-- {{products.products}} -->
    <!--product area start-->
    <div class="product_area color_two  mb-60" v-for="tag in tags" :key="tag.id" v-if="tag.products.length > 0 && filteredList.products.length > 0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_header">
                        <div class="section_title">
                           <p>Recently added our store</p>
                           <h2>{{tag.name}} Products</h2>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="product_container">  
               <div class="row">
                   <div class="col-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="plant1" role="tabpanel">
                                <div v-if="filteredList.products.length > 0">
                                <carousel class=" product_column5" :key="refresh" :responsive="{0:{items:2,nav:false,loop:false,dots:false},600:{items:5,nav:false,margin:20,loop:false,dots:false}}">
                                <!-- <div class="product_carousel product_column5 owl-carousel"> -->
                                   

                                    <article v-for="product in filteredList.products" :key="product.id" v-if="product.tag_id == tag.id" :class="catParam+' '+subcatParm">
                                        <figure class="single_product" v-for="image in images" :key="image.id" v-if="image.id == product.id">
                                            <div class="product_thumb"> 
                                                <router-link  class="primary_img" :to="{name: 'Product-Details', params: { name: product.name}}"><img :src="'/images/'+image.images[0].file" alt=""></router-link>
                                                <!-- <router-link  class="primary_img" to="product-details"><img :src="'/images/'+product.images[0].file" alt=""></router-link> -->
                                                <div class="label_product">
                                                    <!-- <span class="label_sale">Sale</span> -->
                                                    <!-- <span class="label_new">New</span> -->
                                                </div>
                                                <div class="" v-if="product.quantity == 0" style="background: red; color:#fff">
                                                    <p class="text-center">Out of Stock</p>
                                                </div>
                                                <div class="action_links" v-if="product.quantity != 0">
                                                    <ul>
                                                        <!-- <li class="add_to_cart" v-if="!userDetails"><router-link to="/login" title="Add to cart"><span class="lnr lnr-cart"></span></router-link></li>
                                                        <li class="add_to_cart" v-if="userDetails"><button class="btn" v-on:click="addToCart(product.id)" title="Add to cart"><span class="lnr lnr-cart"></span></button></li> -->
                                                        <li class="add_to_cart" v-if="!userDetails"><router-link to="/login" title="Add to Wishlist"><span class="lnr lnr-heart"></span></router-link></li>
                                                        <li class="wishlist" v-if="userDetails"><button class="btn" v-on:click="addToWishlist(product.id)" title="Add to Wishlist"><span class="lnr lnr-heart"></span></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name"><router-link :to="{name: 'Product-Details', params: { name: product.name}}">{{product.name.replace(/-/g," ")}}</router-link></h4>
                                                <!-- <p><router-link to="#">Fruits</router-link></p> -->
                                                <div class="price_box"> 
                                                    <span class="current_price">₹ {{product.amount_rupees}}/-</span>
                                                    <!-- <span class="old_price">$362.00</span> -->
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    
                                </carousel> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>   
        </div> 
    </div>
    <!--product area end-->
    
    <!--banner fullwidth area satrt-->
    <div class="banner_fullwidth color_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner_full_content">
                        <p> </p>
                        <h2> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner fullwidth area end-->

    
    </div>
</template>
<script>

import carousel from 'vue-owl-carousel';
import VueElementLoading from 'vue-element-loading';

export default {

    components : { carousel,VueElementLoading },
     mounted() {
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
        setTimeout(() => {
          this.show = false
        }, 2000);
        
    },
    data() {
        return {
            products:[],
            images:[],
            userDetails:{},
            search:null,
            show:true,
            tags:{},
            refresh:0,
            categories:'',
            subCategories:'',
            subsubCategories:'',
            catParm:'',
            subcatParm:'',
            banners:{}
        }
    },
   
    computed: {
      filteredList() {
        if (this.search) {    
            return this.products.products.filter(product => {
                return product.name.toLowerCase().includes(this.search.toLowerCase())
            })
        }else{
            return this.products;
        }
      }
    },
    watch: {
        '$route': 'fetchProducts'
    },
    created() {
        this.fetchProducts(),
        this.fetchBanners(),
        this.fetchUser(),
        this.fetchTags(),
        this.noRoute(),
        this.fetchCategory()
    },
    methods: {
        fetchBanners:function(){
            this.axios.get('/api/banners').then(response => {
                  this.banners = response.data;
                //   window.location.reload();
                //   console.log(response.data)
                });
        },
        fetchProducts:function(){
            this.catParm = this.$route.params.cat;
            this.subcatParm = this.$route.params.subcat;
            var cat = this.$route.params.cat;
            var subcat = this.$route.params.subcat;
            var subsubcat = this.$route.params.subsubcat;
 
            this.axios.post('/api/product',{cat:cat , subcat:subcat , subsubcat:subsubcat}).then(response => {
                console.log(response.data);
                  this.products = response.data[0];
                //   this.Categories = response.data;
                const containsKey = (obj, key ) => Object.keys(obj).includes(key);
                if(containsKey, response.data[0].subcategories)
                {
                    // console.log('true')
                    this.subCategories = response.data[0].subcategories;
                } 
                if(containsKey, response.data[0].subsubcategories) 
                {
                    // console.log('true')
                    this.subCategories = response.data[0].subsubcategories;
                }
                  this.images = response.data[1];
                  this.refresh++;
                //   window.location.reload();
                });
        },
        fetchUser:function() {
            this.axios.get('/user').then(response => {
              this.userDetails = response.data;
            //   window.location.reload();
            //   console.log(response.data)
            });
        },
         fetchCategory:function(){
            this.axios.get('/api/category').then(response => {
                  this.categories = response.data;
                //   window.location.reload();
                //   console.log(response.data)
                });
            },
        fetchTags:function() {
            this.axios.get('/api/tags').then(response => {
              this.tags = response.data;
            //   window.location.reload();
              console.log(response.data)
            });
        },
        addToCart(id) {
            this.axios.post('/api/addCart', {product_id:id, user_id:this.userDetails.id, quantity:1}).then(response => {
                this.$fire({
                  title: "Product Added Successfully",
                  type: "success",  
                  timer: 3000,
                  showCancelButton: false,
                  showConfirmButton: false
                });
            });
        },
        addToWishlist(id) {

            this.axios.post('/api/addWishlist', {product_id:id, user_id:this.userDetails.id}).then(response => {
                this.$fire({
                  title: "Wishlist Added Successfully",
                  type: "success",  
                  timer: 3000,
                  showCancelButton: false,
                  showConfirmButton: false
                });
            });
        },
        noRoute(){
            if(empty(this.product))
            {
                this.$router.push({name: 'home'})
            }
        }

    },
    
}
</script>
    
