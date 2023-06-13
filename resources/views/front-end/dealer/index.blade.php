<!DOCTYPE html>
<html lang="en">
    
    <head>
        @include('front-end.section.styles')
		<style>
            /* .exclusiveBanefitsBox {
                width: 100%;
    float: left;
    height: auto;
    padding: inherit;
    margin: 0px 0px 50px;
            } */
            .pageTitleBox {
    width: 100%;
    float: left;
    height: auto;
    margin: 0px 0px 40px;
}
.iconBox::after {
    left: 100%;
    top: 50%;
    border-style: solid;
    border-image: initial;
    content: "";
    height: 0px;
    width: 0px;
    position: absolute;
    pointer-events: none;
    border-color: rgba(99, 175, 238, 0) rgba(99, 175, 238, 0) rgba(99, 175, 238, 0) rgb(74 49 101);
    border-width: 8px;
    margin-top: -8px;
}
            .benefitsBox {
                width: 450px;
    float: left;
    height: 100px;
    position: relative;
    margin: 0px 0px 30px 0px;
    padding: 0px 0px 0px 100px;
    box-shadow: rgb(0 0 0 / 3%) 0px 2px 10px;
            }
            @media screen and (max-width: 991px) {
                .benefitsBox{
                    width: 100%!important;
                }
                .becomeDealerBox .simpleStepsBox .stepBox{
                    width: 100%!important;
                    margin-bottom: 57px!important;
                }
                .becomeDealerBox .generalBox .qualificationListBox{
                    width: 100%!important;
                }
            }
            .benefitsContentBox {
                width: 100%;
    float: left;
    height: 100px;
    display: table;
    padding: 0px 28px;
            }
            .benefitsContentBox h6 {
                margin: 0px;
    display: table-cell;
    height: 100%;
    vertical-align: middle;
            }
            .iconBox {
                width: 100px;
                min-height: 100px;
                height: 100%;
                position: absolute;
                left: 0px;
                top: 0px;
                background-color: rgb(74 49 101);
                display: table;
            }
            .becomeDealerBox .simpleStepsBox {
    width: 100%;
    float: left;
    height: auto;
    padding: 50px 0px;
    background: rgb(245, 245, 245);
    margin: 0px;
    text-align: center;
}
.becomeDealerBox .simpleStepsBox .pageTitleBox {
    text-align: center;
    margin: 0px 0px 80px;
}
.becomeDealerBox .simpleStepsBox .stepBox {
    width: 390px;
    display: inline-block;
    vertical-align: top;
    height: auto;
    position: relative;
    background: rgb(255, 255, 255);
    padding: 70px 30px 0px;
    min-height: 185px;
    margin: 0px 80px 0px 0px;
    box-shadow: rgb(0 0 0 / 3%) 0px 2px 10px;
}
.becomeDealerBox .simpleStepsBox .stepBox .stepNumberBox {
    position: absolute;
    left: 50%;
    top: -40px;
    text-align: center;
    display: inline-block;
    background-color: rgb(89 59 122);
    box-shadow: rgb(0 0 0 / 17%) 0px 5px 5px 0px, rgb(156 112 203) 1px 1px 0px 8px inset;
    width: 82px;
    height: 82px;
    margin-left: -41px;
    border-width: 9px 8px 8px 9px;
    border-style: solid;
    border-color: rgb(126 83 171);
    border-image: initial;
    line-height: 68px;
    border-radius: 50%;
    font-family: work_sansmedium, Helvetica, Arial, sans-serif;
    font-size: 28px;
    color: rgb(255, 255, 255);
    font-weight: normal;
}
.becomeDealerBox .simpleStepsBox .stepBox h5 {
    text-align: center;
    margin-bottom: 5px;
}
.becomeDealerBox .simpleStepsBox .stepBox p {
    text-align: center;
    margin-bottom: 5px;
    padding: 0px 15px;
}
.becomeDealerBox .generalBox {
    width: 100%;
    float: left;
    height: auto;
    padding: 50px 0px;
    text-align: center;
}
.pageTitleBox {
    width: 100%;
    float: left;
    height: auto;
    margin: 0px 0px 40px;
}
.pageTitleBox p {
    text-align: center;
    margin: 0px;
    line-height: 21px;
    font-size: 14px;
    color: rgb(124, 124, 124);
}
.becomeDealerBox .generalBox .qualificationListBox {
    width: 425px;
    display: inline-block;
    height: auto;
    margin: 0px 23px;
    padding: 30px 30px 10px;
    text-align: left;
    vertical-align: top;
    min-height: 230px;
    box-shadow: rgb(0 0 0 / 3%) 0px 2px 10px;
}
ul {
    list-style-type: none;
}
ul.fancyCheck, ul.fancyArrow {
    margin-bottom: 20px;
    padding-left: 22px;
}
ul.fancyCheck > li, ul.fancyArrow > li {
    padding: 5px 0px;
    position: relative;
}
ul.fancyCheck > li::before, ul.fancyArrow > li::before {
    content: "\f00c";
    font-family: 'Font Awesome 5 Pro';
    position: absolute;
    left: -22px;
    top: 4px;
    font-weight: 600;
    color: rgb(126, 182, 46);
}

		</style>
    </head>
    <body>
        
        @include('front-end.section.header')
        <main>

            <div class="becomeDealerBox">
                <div class="commonBannerMainBox">
                    <div class="container-fluid bg-light"><img src="/img/dealers/registration-banner.jpg" alt="Dealer Registration"></div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="container-fluid">
                    <div class="pageTitleBox text-center">
                        <h3 class="text-dark">Seize the chance, and start trading right away.</h3>
                        {{--  <p class="pl-5 pr-5">Here’s the golden opportunity you were looking for. AMDA Prints is calling all resellers to join our ever-increasing dealer network. What does that mean? Special reseller pricing on a wide range of products. Yes, that includes Banners, Stands, Displays, Table covers, Posters, Signages, Boards, Mats, Decals and a lot more.</p>  --}}
                        <p class="pl-5 pr-5">You have found the perfect opportunity right here. All resellers are invited to join AMDA Prints' expanding dealer network. Why does that matter? Special reseller rates on a variety of goods. That does indeed include things like banners, stands, displays, tablecloths, posters, signs, boards, mats, and a lot more.</p>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="contactusBox">
                        <div class="delearRegistrationContact text-center"><img src="https://www.bannerbuzz.com/static/images/dealerregistration/delear-registration-contact.svg" style="filter: grayscale(1);" alt="Become A Delear"></div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="contactInfoDealerBox">
                            <div class="contactemailBox text-center"><h5><a href="mailto:support@amdaprints.com" class="text-dark"><span class="fa fa-envelope"></span> support@amdaprints.com </a></h5></div>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="exclusiveBanefitsBox container">
                        <div class="pageTitleBox text-center">
                            <h3 class="text-dark">Dealers, hello! You may be exclusive by doing this.</h3>
                        </div>
                     <div class="row">
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Quick Turnaround</h6>
                            </div>
                        </div>
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Unbranded sample kit and catalogue are provided without charge.</h6>
                            </div>
                        </div>
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Free blind shipments to your clients, together with unbranded packaging.</h6>
                            </div>
                        </div>
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Free credit account allocations based on your relationship with us.</h6>
                            </div>
                        </div>
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Free blind shipments to your clients, together with unbranded packaging.</h6>
                            </div>
                        </div>
                        <div class="benefitsBox col-md-4 col-lg-4">
                            <div class="iconBox">&nbsp;</div>
                            <div class="benefitsContentBox">
                                <h6>Completely free design assistance from top experts.</h6>
                            </div>
                        </div>
                     </div>
                    </div>
                </div>
                <div class="simpleStepsBox">
                    <div class="pageTitleBox">
                        <h3 class="text-dark">Being a dealer for AMDA Prints is very simple.</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="stepBox">
                            <div class="stepNumberBox">1</div>
                            <h5>Fill an online application</h5>
                            <p>A simple process of answering some basic questions.</p>
                        </div>
                        <div class="stepBox">
                            <div class="stepNumberBox">2</div>
                            <h5>Get approved. Get a special kit.</h5>
                            <p>Give us 48 hours to review your application and add you in.</p>
                        </div>
                        <div class="stepBox">
                            <div class="stepNumberBox">3</div>
                            <h5>Make sure your address is accurate</h5>
                            <p>Once Google locates you, we’ll send out an activation email immediately.</p>
                        </div>
                        <div class="buttonSet mt-5"><a class="custom_btn bg_default_orange wow fadeInUp2" href="/dealerregistration">Apply here</a></div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="container">
                    <div class="generalBox">
                        <div class="pageTitleBox">
                            <h3 class="text-dark">Standard Qualification Requirements</h3>
                            <p>The following industry specialists qualify for express approval:</p>
                        </div>
                        <div class="qualificationListBox">
                            <ul class="fancyCheck">
                                <li>Marketing Firms</li>
                                <li>Companies that handle promotions and points of sale</li>
                                <li>Managers or consultants for events</li>
                                <li>Wedding coordinators</li>
                                <li>Printing Companies</li>
                            </ul>
                            <div class="clearfix">&nbsp;</div>
                        </div>
                        <div class="qualificationListBox">
                            <ul class="fancyCheck">
                                <li>Brokers of prints</li>
                                <li>Signage Businesses</li>
                                <li>Graphic Designers</li>
                                <li>Agencies or Consultants for Advertising</li>
                            </ul>
                            <div class="clearfix">&nbsp;</div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('front-end.section.footer')
@include('front-end.section.scripts')
    </body>
</html>