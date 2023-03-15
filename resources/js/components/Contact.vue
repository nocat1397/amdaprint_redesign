<template>
    <div>
          <!-- <vue-element-loading :active="show" spinner="bar-fade-scale" color="#FF6700" background-color="rgba(255,255,255,1)" :is-full-screen="true"/> -->

        <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3><b>Contact Us</b></h3>
                        <ul>
                            <li><router-link to="/">home</router-link></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--contact map start-->
    <div class="contact_map mt-70">
       <div class="map-area">
          <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3694.6847248026093!2d71.66978531495243!3d22.17606998538828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe001997f8f726de!2zMjLCsDEwJzMzLjkiTiA3McKwNDAnMTkuMSJF!5e0!3m2!1sen!2sin!4v1639540492133!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h3>contact us</h3>    
                         <p>Dhaval dodiya, post graduate banker joined family business of 150 years old weaving tradition . 

At anokhadhaga, we connect you to the roots patola heritage, most beautiful handcrafted and worlds best saree from weaving community. We discover the best design from artisans from all over india. And reach to you at your place.
</p>
                        <ul>
                            <li><i class="fa fa-fax"></i>  Address : 64, vahanvati krupa, salangpur road , botad Gujarat.</li>
                            <li><i class="fa fa-phone"></i> <a href="mailto:anokhadhaga@gmail.com">anokhadhaga@gmail.com</a></li>
                            <li><i class="fa fa-envelope-o"></i><a href="tel:919913902090">+91 9913902090</a>  </li>
                        </ul>             
                    </div> 
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <h3>Tell us your project</h3>   
                        <form @submit.prevent="contactForm">
                            <p>  
                               <label> Your Name (required)</label>
                                <input v-model="contact.name" placeholder="Name *" type="text" required> 
                            </p>
                            <p>       
                               <label>  Your Email (required)</label>
                                <input v-model="contact.email" placeholder="Email *" type="email" required>
                            </p>
                            <p>          
                               <label>  Mobile</label>
                                <input v-model="contact.mobile" placeholder="Mobile Number *" type="tel" required>
                            </p>    
                            <div class="contact_textarea">
                                <label>  Your Message</label>
                                <textarea placeholder="Message *" v-model="contact.message"  class="form-control2" required></textarea>     
                            </div>   
                            <button type="submit"> Send</button>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->
    </div>
</template>
<script>
import VueElementLoading from 'vue-element-loading';
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
            show:true,
            contact:{}
        }
    },
    methods: {
        contactForm()
        {
            this.axios.post('/api/addEnquiry', this.contact)
                    .then(response => (
                        // this.$router.push({name: 'home'})
                        this.$fire({
                  title: "Message Sent Successfully",
                  type: "success",  
                  timer: 3000,
                  showCancelButton: false,
                  showConfirmButton: false
                })
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
        }
    }
    
}
</script>