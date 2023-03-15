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
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_total">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-if="carts.length == 0">
                                           <td class="product_remove" colspan="6">Your cart is empty</td>
                                        </tr>
                                        <tr v-for="cart in carts" :key="cart.id">
                                            <!-- <td>{{carts.index}}</td> -->
                                            <td class="product_thumb"><router-link :to="{name: 'Product-Details', params: { name: cart.product.name}}" v-for="image in images" :key="image.id" v-if="cart.product.id == image.id"><img :src="'/images/'+image.images[0].file" alt=""></router-link></td>
                                            <td class="product_name"><a href="#">{{cart.product.name.replace(/-/g," ")}}</a></td>
                                            <!-- <td class="product_name"><a href="#" v-if="cart.size !== null">{{cart.size.size}}</a></td> -->
                                            <td class="product-price">₹ {{cart.product.amount_rupees}}/{{cart.product.quantity_unit}}</td>
                                            <td class="product_quantity"><label>Quantity</label><input type="hidden" v-model="cart.id"> <input min="1" max="100" v-model="cart.quantity" type="number"></td>
                                            <td class="product-price">₹ {{cart.product.amount_rupees * cart.quantity}}/-</td>
                                            <td class="product_total"><a v-on:click="removeItem(cart.id)" class="btn btn-danger mr-2 rounded-circle"><i class="fa fa-trash-o"></i></a><button class="btn btn-dark rounded-pill" type="button" v-on:click="updateCart(cart.id,cart.quantity,cart.product.id)">Save</button></td>


                                        </tr>
                                    </tbody>
                                </table>   
                            </div>  
                            <!-- <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>       -->
                        </div>

                     </div>
                 </div>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">   
                                    <p>Enter your coupon code if you have one.</p>                                
                                    <input placeholder="Coupon code" type="text" id="coupon_code">
                                    <button type="button" @click.prevent="applyCoupon(userDetails.id)">Apply coupon</button>
                                </div>    
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount">₹ {{total}}.00</p>
                                   </div>
                                   <div class="cart_subtotal" v-if="coupon !== null && coupon.discount_type == 0">
                                       <p>Coupon Discount</p>
                                       <p class="cart_amount text-success">₹ {{(coupon.discount/100)*total}}.00</p>
                                   </div>
                                   <div class="cart_subtotal" v-else-if="coupon !== null && coupon.discount_type == 1">
                                       <p>Coupon Discount</p>
                                       <p class="cart_amount text-success">₹ {{coupon.discount}}.00</p>
                                   </div>
                                   <a></a>

                                   <div class="cart_subtotal">
                                       <p>Total</p>
                                       <p class="cart_amount" v-if="coupon !== null && coupon.discount_type == 0"><input type="hidden" class="total" :value="total-((coupon.discount/100)*total)"> ₹ {{total-((coupon.discount/100)*total)}}.00</p>
                                       <p class="cart_amount" v-else-if="coupon !== null && coupon.discount_type == 1"><input type="hidden" class="total" :value="total-coupon.discount"> ₹ {{total-coupon.discount}}.00</p>
                                       <p class="cart_amount" v-else><input type="hidden" class="total" :value="total"> ₹ {{total}}.00</p>
                                   </div>
                                   <div class="checkout_btn">
                                       <router-link to="/" v-if="total == 0" class="disabled">Proceed to Checkout</router-link>
                                       <button type="submit" @click.prevent="createOrder()" v-else>Proceed to Checkout</button>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
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
            carts: {},
            userDetails:{},
            images:{},
            show:true,
            amount:{},
            coupon:{}
       
        }
    },
    watch: {
        // call again the method if the route changes
		'$route': 'fetchCart'
    },
    created() {
        this.fetchCart(),
        this.fetchUser(),
        this.fetchImages()
    },
    computed: {
        total: function(){
          console.log(this.carts);
          return this.carts.reduce(function(total, item){
          
            return total + (item.quantity * item.product.amount_rupees); 
          },0);
        },
        
    },
    methods: {

        fetchCart() {
            this.axios
            .get(`/api/cart/${this.$route.params.id}`)
            .then((response) => {
                if (this.userDetails) {   
                    this.carts = response.data;
                }
                console.log(response.data);
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
            });
        },
        updateCart(id,qty,p_id) {

            this.axios.post('/api/updateCart', {cart_id:id, quantity:qty, user_id:this.userDetails.id, product_id:p_id}).then(response => {
                this.$fire({
                  title: "Cart Updated Successfully",
                  type: "success",  
                  timer: 3000,
                  showCancelButton: false,
                  showConfirmButton: false
                });
            //   window.location.reload();
              console.log(response.data)
            });
        },
        removeItem(cart_id) {
            this.axios.post('/api/removeCartProduct', {cart_id:cart_id}).then(response => {
              window.location.reload();
            //   console.log(response.data)
            });
        },
        createOrder() {
            var xhr = this.axios;
            var swal = this.$fire;
            var router = this.$router;
            var userId = this.$route.params.id;
            var coupon = this.coupon;
                this.axios
                    .get(`/api/cart/${this.userDetails.id}`)
                    .then((response) => {
                        this.carts = response.data;
                        var carts = this.carts;
                        this.amount = $('.total').val();
                        console.log($('.total').val());
                            xhr
                                .post('/api/makeOrder', {user_id:userId, amount:this.amount})
                                .then((response) => {
                                    console.log(response.data);
                                    var options = {
                                        "key": "rzp_live_TI86Iuf6UjcLoD", // Enter the Key ID generated from the Dashboard
                                        "amount": response.data.amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                        "currency": "INR",
                                        "name": "Anokha Dhaga",
                                        "order_id": response.data.rzp_order_id,
                                        "handler": function(payResponse){
                                            // this.paymentDetails = response;
                                            xhr
                                            .post('/api/payment',{userId, coupon, payResponse, carts, amount:response.data.amount, id:response.data.id})
                                            .then((response) => {
                                                console.log(response);
                                                swal({
                                                  title: "Payment Successfull",
                                                  text: "Your Id is "+response.data,
                                                  type: "success",
                                                  showCloseButton: true,
                                                  showCancelButton: false,
                                                  showConfirmButton: false
                                                });
                                                router.push('/');
                                            });
                                        //    return response;
                                        },
                                        "theme": {
                                            "color": "#a23f25"
                                        }
                                    };
                                    var rzp1 = new Razorpay(options);
                                        rzp1.open();
                                })

                    })

        },
        applyCoupon(id)
        {
            var code = $('#coupon_code').val();
            this.axios.post('/api/checkCoupon',{coupon:code,user_id:id}).then(response => {
              console.log(response.data);
                if(response.data !== null)
                {
                    this.coupon = response.data;
                    this.$fire({
                        title: "Coupon applied successfully",
                        type: "success",  
                        timer: 3000,
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                } else {
                    this.$fire({
                        title: "Invalid Coupon",
                        type: "error",  
                        timer: 5000,
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                }
            });
        }
        
    }
}
</script>