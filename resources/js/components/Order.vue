<template>
    <div>
         <vue-element-loading :active="show" spinner="bar-fade-scale" color="#FF6700" background-color="rgba(255,255,255,1)"/>
         <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">  
            <form action="#"> 
                <div class="row">
                    <div class="col-12">

                        <div class="table_desc">
                            <div class="cart_page">
                                <table>
                                    <thead>
                                        <tr>
                                            <!-- <th class="product_remove">Delete</th> -->
                                            <th class="product_name">Product</th>
                                            <th class="product_thumb">Name</th>
                                            <!-- <th class="product_thumb">Size</th> -->
                                            <th class="product_total">Status</th>
                                            <th class="product_total">Order Id</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product-price">Amount</th>
                                            <!-- <th class="product-price">Rating</th> -->
                                            <th class="product_total">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="purchaser in purchasers" :key="purchaser.id">
                                           <!-- <td class="product_remove"><a v-on:click="removeItem(purchaser.id)"><i class="fa fa-trash-o"></i></a></td> -->
                                            <td class="product_thumb"><router-link :to="{name: 'Product-Details', params: { name: purchaser.product.name}}" v-for="image in images" :key="image.id" v-if="purchaser.product.id == image.id"><img :src="'/images/'+image.images[0].file" alt=""></router-link></td>
                                            <td class="product_name"><a href="#">{{purchaser.product.name.replace(/-/g," ")}}</a></td>
                                            <!-- <td class="product_name"><a href="#">{{purchaser.size.size}}</a></td> -->
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 1">Not Confirmed</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 2">Order Confirmed</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 3">On The Way</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 4">Delivered</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 5">Cancel confirmation pending</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 6">Return/Refund Confirmed</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 7">Return/Refund in Progress</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 8">Return/Refund Delivered</td>
                                            <td class="product_quantity" v-if="purchaser.order.orderstatus_id == 9">Order Cancelled</td>
                                            <td class="product_name"><a>{{purchaser.order.rzp_order_id}}</a></td>
                                            <td class="product_quantity">{{purchaser.quantity}}</td>
                                            <td class="product-price">₹ {{purchaser.product.amount_rupees*purchaser.quantity}}/-</td>
                                            <!-- <td>
                                                <input type="hidden" :value="userDetails.id">
                                                <input type="hidden" :value="purchaser.product.id">
                                                 <star-rating v-model="rating" :increment="0.5" text-class="custom-text" class="productRating"></star-rating>

                                            </td> -->
                                            <td class="product_total"><button class="btn btn-danger btn-sm rounded-pill" type="button" v-if="purchaser.order.orderstatus_id > 4" disabled>Cancel</button>
                                            <button class="btn btn-danger btn-sm rounded-pill" type="button" v-on:click="orderCancel(purchaser.order.id)" v-if="purchaser.order.orderstatus_id <= 4">Cancel</button></td>
                                        </tr>
                                    </tbody>
                                </table>  
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        
                                    </div>
                                     
                                </div> 
                                <button @click="setRating" class="btn btn-primary" type="button">Publish</button> -->
                            </div>  
                            <!-- <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>       -->
                        </div>

                     </div>
                 </div>
                 
            </form> 
        </div>     
    </div>
     <!--shopping cart area end -->
    </div>
</template>
<script>
import VueElementLoading from 'vue-element-loading'
export default {
    components:{
        VueElementLoading
    },
    data() {
        return {
            purchasers: {},
            userDetails:{},
            images:{},
            quantity:1,
            show:true,
            rating: 0
        }
    },
     mounted() {
        window.scrollTo({
          top: 0,
          left: 0,
          behavior: 'smooth'
        });
        setTimeout(() => {
          this.show = false
        }, 2000);
        $(document).on('click', '.productRating', function(e){
            var rating = $(this).find('.custom-text').html();
            // console.log(rating);
            // return false;
            var user_id = $(this).prev().prev().val();
            var product_id = $(this).prev().val();
             axios.post('/api/rating/new', {product_id:product_id, user_id:user_id, rating:rating }).then(response => {
            //   this.userDetails = response.data;
              console.log(response.data);
            });
        });
    },

    watch: {
        // call again the method if the route changes
		'$route': 'fetchPurchaser'
    },
    created() {
        this.fetchPurchaser(),
        this.fetchUser(),
        this.fetchImages()

    },
    methods: {
        setRating(){
            // var pathArray = location.pathname.split('/');
            // var uid = pathArray[2];
            var product_id = $(this).prev().val();
             this.axios.post('/api/rating/new', {product:product_id, user:this.userDetails.id, rating:this.rating }).then(response => {
            //   this.userDetails = response.data;
              console.log(response.data);
            });
            // fetch('api/rating/new', {
            //     method: 'post',
            //     body: JSON.stringify({product:this.product, user:this.user, rating:this.rating }),
            //     headers: {
            //         'content-type': 'application/json'
            //     }
            // }).then(res => res.json())
            // .then(data => {
            //     swal('Thank you!' , 'success')
            // }).catch(err => {
            //     swal('Failed' , 'error');
            // });
        },
        fetchPurchaser() {
            this.axios
            .get(`/api/orders/${this.$route.params.id}`)
            .then((response) => {
                if (this.userDetails) {   
                    this.purchasers = response.data;
                    console.log(this.purchasers);
                } else {
                    this.$router.push({name: 'home'})
                }
                // console.log(response.data);
            });
        },
        fetchImages() {
            this.axios
            .get(`/api/images`)
            .then((response) => {
                this.images = response.data;
                // console.log(response.data);
            });
        },
        fetchUser:function() {
            this.axios.get('/user').then(response => {
              this.userDetails = response.data;
              console.log(response.data);
            });
        },
        orderCancel(order_id) {
            var status_id = 5;
            this.axios.post('/api/orderCancel', {o_id:order_id, s_id:status_id}).then(response => {
                window.location.reload();
            });
        }
        
    }
}
</script>