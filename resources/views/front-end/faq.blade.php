<!DOCTYPE html>
<html lang="en">

<head>
    @include('front-end.section.styles')
</head>
<body>
    
    @include('front-end.section.header')

    <!-- main body - start
		================================================== -->
		<main>


			

			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section d-flex align-items-center clearfix" data-background="assets/images/breadcrumb/bg_01.jpg">
				<div class="container">
					<div class="row align-items-center justify-content-lg-between">
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay=".1s">
							<h1 class="page_title mb-0">About Us</h1>
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay=".1s">
							<ul class="breadcrumb_nav ul_li_right clearfix">
								<li><a href="/">Home</a></li>
								<li>About Us</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


            <!-- faq_section - start
                ================================================== -->
                <div class="faq_section mt-5 mb-5 clearfix">
                    <div class="container">
                        <div class="section_title text-center mb_50 wow fadeInUp2" data-wow-delay=".1s">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-7 col-sm-9 col-xs-12">
                                    <h4 class="small_title">Frequently Asked Questions</h4>
                                    <h2 class="big_title mb-0">
                                        Here’s all you need, to know us better.
                                    </h2>
                                    <span class="biggest_title">FAQ</span>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
    
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3 class="mb-5">All about artworks and graphics</h3>
                                <div id="left_faq_accordion" class="faq_accordion mr__30 wow fadeInUp2" data-wow-delay=".1s">
                                    <div class="card">
                                       
                                        <div class="card-header" id="left_heading_one">
                                            <button data-toggle="collapse" data-target="#left_collapse_one" aria-expanded="true" aria-controls="left_collapse_one">
                                                What file types are recommended for artwork uploads?
                                            </button>
                                        </div>
    
                                        <div id="left_collapse_one" class="collapse show" aria-labelledby="left_heading_one" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Be sure to convert all fonts to outlines or curves before sending the file. Please set the size of the proof in proportion to the exact size of the custom banner's order. There's no need to include bleeds in the proof, unless it is a part of the graphic. All text should be at least two inches from the edge of the banner's grommets. Acceptable formats include: 
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>EPS (Encapsulated Post Script)</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>AI (Adobe Illustrator)</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>PDF (Adobe Reader PDF)</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>PSD (Adobe Photoshop)</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>JPEG (High Resolution JPEG)</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>TIFF (High Resolution TIFF)</li>
                                                </ul>
                                                <p>
                                                    Depending on the resolution and pixels, PSD, JPEG, TIFF files gets blurry when enlarged. Thumbnail JPGs or GIFs cannot be used for large prints. If submitting these files please follow these guidelines.
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>100% scale (full size output) at 100 dpi</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>50% scale at 200 dpi or higher</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>25% scale at 300 dpi or higher</li>
                                                    <li><i class="fas fa-caret-right text-danger mr-2"></i>10% scale at 600-1200 dpi</li>
                                                </ul>
                                                <p>
                                                    Vector: Line art is scalable to any size, it never loses resolution and the image stays clean and crisp. Vector files can be submitted in any size, in proportion to your banner's size
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-header" id="left_heading_two">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_two" aria-expanded="false" aria-controls="left_collapse_two">
                                                Once my reprint has been approved, can I change the artwork?
                                            </button>
                                        </div>
                                        <div id="left_collapse_two" class="collapse" aria-labelledby="left_heading_two" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    All reprints must duplicate what was originally printed.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-header" id="left_heading_three">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_three" aria-expanded="false" aria-controls="left_collapse_three">
                                                How many colors can each banner include? 
                                            </button>
                                        </div>
                                        <div id="left_collapse_three" class="collapse" aria-labelledby="left_heading_three" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Amdaprints does not have a color limit on its custom banners, allowing you to choose as many photos or graphics as you want on your displays.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-header" id="left_heading_four">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_four" aria-expanded="false" aria-controls="left_collapse_four">
                                                Can Amdaprints print on both sides of the banner? 
                                            </button>
                                        </div>
                                        <div id="left_collapse_four" class="collapse" aria-labelledby="left_heading_four" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    We cannot print on both sides of one vinyl banner, but our two-sided banners are made with two banners attached together. This prevents either print from showing through the material while providing twice the durability.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-header" id="left_heading_five">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_five" aria-expanded="false" aria-controls="left_collapse_five">
                                                Do you print height by width (H x W) or width by height (W x H)?
                                            </button>
                                        </div>
                                        <div id="left_collapse_five" class="collapse" aria-labelledby="left_heading_five" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Amdaprints always measures width by height (W x H). When you select a size on the website, width is always the first dimension, not height. Make sure it matches with your file size.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card">
                                        <div class="card-header" id="left_heading_six">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_six" aria-expanded="false" aria-controls="left_collapse_six">
                                                Can I change my artwork once it has been approved and is in production?
                                            </button>
                                        </div>
                                        <div id="left_collapse_six" class="collapse" aria-labelledby="left_heading_six" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Once your artwork has been approved it will go straight to production and no changes can be made.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_seven">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_seven" aria-expanded="false" aria-controls="left_collapse_six">
                                                Does Amdaprints make vertical print banners?
                                            </button>
                                        </div>
                                        <div id="left_collapse_seven" class="collapse" aria-labelledby="left_heading_seven" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Yes we do.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_eight">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_eight" aria-expanded="false" aria-controls="left_collapse_six">
                                                What if I don't like the proof of the banner?
                                            </button>
                                        </div>
                                        <div id="left_collapse_eight" class="collapse" aria-labelledby="left_heading_eight" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Our design team will work with you until we create a banner that satisfies you. If we cannot come to an agreement, you can expect to see a full refund within 24 hours.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_nine">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_nine" aria-expanded="false" aria-controls="left_collapse_six">
                                                What if the colors on the custom banner don't come out the way I expected?
                                            </button>
                                        </div>
                                        <div id="left_collapse_nine" class="collapse" aria-labelledby="left_heading_nine" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Printers at Amdaprints are calibrated to print colors accurately to match the order, but in cases that they do not, we cannot be held responsible. The appearance of the thumbnail could be different on our screens and equipment compared to yours. We will not issue refunds or accept returns due to color, depth or tone. However, we recommend you to provide PMS (Solid coated) for the best match. We address each of these situations on a case-by-case basis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_ten">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_ten" aria-expanded="false" aria-controls="left_collapse_six">
                                                What does it mean by 'Instant preview for this file type not available'?
                                            </button>
                                        </div>
                                        <div id="left_collapse_ten" class="collapse" aria-labelledby="left_heading_ten" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    For certain file types like PDF, DOC, DOCX, EPS, CDR, AI, PSD, TIF, TIFF, PPT, BMP, SVG, our system is not able to generate an instant proof for review but we have your file and our pre-press department will review your file for size and quality (resolution) before sending it to the production. They will contact you if the file is not good for printing. If a proof is requested, you will receive an email proof (even if the file is good) within 24 hours and we will only process the order after you review and approve the proof.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_eleven">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_eleven" aria-expanded="false" aria-controls="left_collapse_six">
                                                What printer resolution do you use?
                                            </button>
                                        </div>
                                        <div id="left_collapse_eleven" class="collapse" aria-labelledby="left_heading_eleven" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Starting from 360 dpi to 1440 dpi
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_twelve">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_twelve" aria-expanded="false" aria-controls="left_collapse_six">
                                                What printing technology do you use?
                                            </button>
                                        </div>
                                        <div id="left_collapse_twelve" class="collapse" aria-labelledby="left_heading_twelve" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    We have invested in latest printing and finishing technology. We have UV-LED, solvent, Eco-solvent, HP-Latex, dye-sublimation and direct to fabric printers. Our solvent and Eco-solvent printers can print up to 720 dpi and UV printers can print up to 1000 dpi. All our fabric products are printed using dye-sublimation transfer technology and direct to fabric printing. For our banner and decals media, we offer solvent and UV printing options.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <h3 class="mt-5 mb-5">All about Orders, Payments and Shipping</h3>

                                    <div class="card">
                                        <div class="card-header" id="left_heading_01">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_01" aria-expanded="false" aria-controls="left_collapse_six">
                                                Does Amdaprints give bigger discounts to commercial orders?
                                            </button>
                                        </div>
                                        <div id="left_collapse_01" class="collapse" aria-labelledby="left_heading_01" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Yes, please contact our sales department at amdaprints.com or call us at  +1 (302) 200 0642 for more information on how we can process your bulk order.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_02">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_02" aria-expanded="false" aria-controls="left_collapse_six">
                                                How much is shipping?
                                            </button>
                                        </div>
                                        <div id="left_collapse_02" class="collapse" aria-labelledby="left_heading_02" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    To make things even simpler for our customers, we offer fixed shipping rates anywhere in the United States, largely dependent on the size of your order.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_03">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_03" aria-expanded="false" aria-controls="left_collapse_six">
                                                How long does it take to receive my custom banner?
                                            </button>
                                        </div>
                                        <div id="left_collapse_03" class="collapse" aria-labelledby="left_heading_03" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Once we get the approval for the artwork, our team will take 12-24 hours to work on the banner. From there, it depends on the type of shipping, which could range between three to nine business days.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_04">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_04" aria-expanded="false" aria-controls="left_collapse_six">
                                                Will I get a full refund if I decide not to go with the order after 60 days?
                                            </button>
                                        </div>
                                        <div id="left_collapse_04" class="collapse" aria-labelledby="left_heading_04" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    We only provide store credit after 60 days
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_05">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_05" aria-expanded="false" aria-controls="left_collapse_six">
                                                Does Amdaprints ship outside of the United States?
                                            </button>
                                        </div>
                                        <div id="left_collapse_05" class="collapse" aria-labelledby="left_heading_05" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Yes, please contact us to get additional shipping information for locations outside of the United States.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_06">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_06" aria-expanded="false" aria-controls="left_collapse_six">
                                                What if my order is not delivered within the guaranteed time frame?
                                            </button>
                                        </div>
                                        <div id="left_collapse_06" class="collapse" aria-labelledby="left_heading_06" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Estimated delivery times posted on the Amdaprints' website reflect products that are already printed. We offer several shipping options. When you get to checkout please make sure you choose the appropriate shipping.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_07">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_07" aria-expanded="false" aria-controls="left_collapse_six">
                                                Where do I mail my payment?
                                            </button>
                                        </div>
                                        <div id="left_collapse_07" class="collapse" aria-labelledby="left_heading_07" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    All checks should be mailed to our sales office located at 595 Old Norcross Road, Suite G, Lawrenceville GA 30046, United States.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_08">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_08" aria-expanded="false" aria-controls="left_collapse_six">
                                                May I purchase a custom sized banner?
                                            </button>
                                        </div>
                                        <div id="left_collapse_08" class="collapse" aria-labelledby="left_heading_08" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    Yes, please input the custom dimensions in the instant price space. For example, if you are looking for a 4.5 foot by 10 foot banner, input that measurement in the space where it says 'instant price'.
                                                    Repeat these exact dimensions in the 'special directions' space to make sure that the design and printing teams are aware of the size of the custom banner.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_09">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_09" aria-expanded="false" aria-controls="left_collapse_six">
                                                What if my package is returned to the sender?
                                            </button>
                                        </div>
                                        <div id="left_collapse_09" class="collapse" aria-labelledby="left_heading_09" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    if orders are returned to our facility we will make every attempt to contact the customer to reship the order. If we cannot make contact with the customer we will be forced to toss the order after 30 days of receiving the returned order.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="left_heading_10">
                                            <button class="collapsed" data-toggle="collapse" data-target="#left_collapse_10" aria-expanded="false" aria-controls="left_collapse_six">
                                                Where are you located?
                                            </button>
                                        </div>
                                        <div id="left_collapse_10" class="collapse" aria-labelledby="left_heading_10" data-parent="#left_faq_accordion">
                                            <div class="card-body">
                                                <p class="mb-0">
                                                    We have two offices for different company purposes.Address all mail to: VIBGYOR PRINTS LLC
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- faq_section - end
                ================================================== -->





		</main>
		<!-- main body - end
		================================================== -->

    @include('front-end.section.footer')
@include('front-end.section.scripts')
</body>
</html>