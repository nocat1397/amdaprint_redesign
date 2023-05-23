<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
			#priceCard {
				top: 12%;
				z-index: 1000;
			}
			#details_form {
			    height: auto;
			    overflow: unset;
			}
            .hr-text {
  line-height: 1em;
  position: relative;
  outline: 0;
  border: 0;
  color: black;
  text-align: center;
  height: 1.5em;
  opacity: 0.5;
  margin-top: 50px!important;
  margin-bottom: 50px!important;
}
.hr-text:before {
  content: '';
  background: linear-gradient(to right, transparent, #818078, transparent);
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 1px;
}
.hr-text:after {
  content: attr(data-content);
  position: relative;
  display: inline-block;
  color: black;
  padding: 0 0.5em;
  /* line-height: 1.5em; */
  color: #818078;
  background-color: #fcfcfa;
}
.bg-google {
    background-color: #dd4c39;
}
.bg-facebook {
    background-color: #3b5898;
}
.loginbackground {
    min-height: 692px;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    /* z-index: 0; */
    overflow: hidden;
}
.flex-flex {
    display: flex;
}
.align-center {
  align-items: center; 
}
.center-center {
  align-items: center;
  justify-content: center;
}
.box-root {
    box-sizing: border-box;
}
.flex-direction--column {
    -ms-flex-direction: column;
    flex-direction: column;
}
.loginbackground-gridContainer {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
    grid-template-columns: [start] 1fr [left-gutter] repeat(16,86.6px) [left-gutter] 1fr [end];
    -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
    grid-template-rows: [top] 1fr [top-gutter] repeat(8,64px) [bottom-gutter] 1fr [bottom];
    justify-content: center;
    margin: 0 -2%;
    transform: rotate(-12deg) skew(-12deg);
}
.box-divider--light-all-2 {
    box-shadow: inset 0 0 0 2px #e3e8ee;
}
.box-background--blue {
    background-color: #443266;
}
.box-background--white {
  background-color: #ffffff; 
}
.box-background--blue800 {
    background-color: #443266;
}
.box-background--gray100 {
    background-color: #a062a8;
}
.box-background--cyan200 {
    background-color: #a062a8;
}
.padding-top--64 {
  padding-top: 64px;
}
.padding-top--24 {
  padding-top: 24px;
}
.padding-top--48 {
  padding-top: 48px;
}
.padding-bottom--24 {
  padding-bottom: 24px;
}
.padding-horizontal--48 {
  padding: 48px;
}
.padding-bottom--15 {
  padding-bottom: 15px;
}
.animationRightLeft {
  animation: animationRightLeft 2s ease-in-out infinite;
}
.animationLeftRight {
  animation: animationLeftRight 2s ease-in-out infinite;
}
.tans3s {
  animation: animationLeftRight 3s ease-in-out infinite;
}
.tans4s {
  animation: animationLeftRight 4s ease-in-out infinite;
}

@keyframes animationLeftRight {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 

@keyframes animationRightLeft {
  0% {
    transform: translateX(0px);
  }
  50% {
    transform: translateX(-1000px);
  }
  100% {
    transform: translateX(0px);
  }
} 

		</style>
    </head>
    <body>
        
        @include('front-end.section.header')

<!-- main body - start
		================================================== -->
		<main>

                

			<!-- details_section - start
			================================================== -->
			<section class="details_section shop_details sec_ptb_130 pt-0 bg_gray clearfix">
				<div class="shop_container">
					<div class="container-fluid">
                        <div class="loginbackground box-background--white padding-top--64">
                            <div class="loginbackground-gridContainer">
                              <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                                <div class="box-root" style=" flex-grow: 1;">
                                </div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                                <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                                <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                                <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                                <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                                <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                                <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                                <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
                              </div>
                              <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                                <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
                              </div>
                            </div>
                          </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="card shadow">
                                    <div class="card-header bg_default_blue text-center">
                                        <h5 class="text-light">Login</h5>
                                    </div>
                                    <div class="card-body">

                                        <form action="/login" method="POST">
                                            @csrf
                                            <b class="text-dark">Email or Mobile</b>
                                            <div class="form-group">
                                                <input type="email" name="email" id="" class="form-control" required>
                                            </div>
                                            <b class="text-dark">Password</b>
                                            <div class="form-group">
                                                <input type="password" name="password" id="" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <button class="addtocart_btn custom_btn bg_default_orange" type="submit">Login</button>
                                                <a href="/user/register" class="float-right">Create new account?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <div class="card-body text-center">
                                        <a href="/redirect/google" class="addtocart_btn custom_btn bg-google pt-3 pb-3"><i class="fab fa-google mr-2"></i> Login with Google</a>
                                        <hr class="hr-text" data-content="OR">
                                        <a href="/redirect/facebook" class="addtocart_btn custom_btn bg-facebook pt-3 pb-3"><i class="fab fa-facebook mr-2"></i> Login with Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>

					</div>
				</div>
			</section>
			<!-- details_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->
@include('front-end.section.footer')
@include('front-end.section.scripts')

</body>


</html>