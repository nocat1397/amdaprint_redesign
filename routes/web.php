<?php

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(env('DOMAIN'))->group(function () {
    Auth::routes();
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    });

    Route::get('/user', 'UserController@details');
    Route::get('/', 'LinkController@home')->name('Home');
    Route::get('/about', 'LinkController@about')->name('About');
    Route::get('/contact', 'LinkController@contact')->name('Contact');
    Route::get('/terms-and-condition', 'LinkController@terms')->name('Terms');
    Route::get('/privacy-policy', 'LinkController@privacy')->name('Privacy');
    Route::get('/faq', 'LinkController@faq')->name('FAQ');
    Route::get('/products', 'ProductController@products');
    Route::get('/product-details', 'ProductController@fetchProducts');
    Route::get('/orderDetails/{id}', 'OrderController@frontOrderDetails');
    Route::post('/couponCheck', 'LinkController@couponCheck');
    Route::post('/autocomplete', 'LinkController@autocomplete')->name('autocomplete');
    Route::get('/dealer-registration', 'DealerController@front');
    Route::get('/dealerregistration', 'DealerController@register');
    Route::post('/dealer-store', 'DealerController@store');

    Route::get('/redirect/facebook', 'SocialController@fb_redirect'); // register using facebook
    Route::get('/callback/facebook', 'SocialController@fb_callback'); // callback facebook url
    Route::get('/redirect/google', 'SocialController@google_redirect'); // register using google
    Route::get('/callback/google', 'SocialController@google_callback'); // callback google url
    Route::get('/user/login', function(){
        $categories = Category::with('product')->has('product')->orderBy('sequence','ASC')->get();
        return view('login',compact('categories'));
    });
    Route::post('/login-user', 'UserController@login'); // callback google url

    Route::get('/user/register', function(){
        $categories = Category::with('product')->has('product')->orderBy('sequence','ASC')->get();
        return view('register',compact('categories'));
    });
    Route::group(['middleware'=>'auth'], function(){
        // Purchasers Routes Start
        Route::post('/cart-add', 'CartController@store');
        Route::get('/cart-count', 'CartController@cartCount');
        Route::get('/my-cart', 'LinkController@mycart');
        Route::get('/cart-remove/{id}', 'CartController@destroy');
        
        Route::post('/upload', 'UploadController@store');
        Route::post('/usa-find', 'CountryController@usaCheck');
        
        Route::get('/uploadfile/{id}', 'LinkController@fileUpload');
        Route::get('/designer/{id}', 'LinkController@designer');
        
        Route::post('/desc-store', 'UploadController@descStore');
        
        Route::get('/payment', 'PaymentController@index');
        Route::post('/charge', 'PaymentController@charge');
        Route::get('/success', 'PaymentController@success');
        Route::get('/error', 'PaymentController@error');
        
        Route::get('/my-orders', 'OrderController@userOrders');
        // Purchasers Routes End
    });

    Route::get('/product-details', 'ProductController@fetchProducts');
    Route::post('/registerUser', 'UserController@user');


    Route::get('/{category}/{product}', 'ProductController@dynaRoute');
    /////////Banners Start/////////

    //all banners vinyl
    Route::get('/banners/custom-vinyl-banner', 'ProductController@customVinyl');


    /////////Banners End/////////




    /////////Business Card, Folders, Brochure, Letterheads, Envelope, Invitation Cards, Greeting Cards/////////
    Route::post('/custom-card-price', 'BcardController@cardPrice');
    Route::post('/custom-card-properties', 'BcardController@cardProperty');
    //////////Custom & Other Banners /////////
    Route::post('/custom-banner-price', 'BannerController@bannerPrice');
    Route::post('/custom-banner-properties', 'BannerController@bannerProperty');
    //////////Stand & displays & Frames /////////
    Route::post('/custom-stand-price', 'StandController@standPrice');
    Route::post('/custom-bstand-price', 'StandController@bstandPrice');
    Route::post('/custom-banner-stand-price', 'StandController@bannerStandPrice');
    Route::post('/custom-stand-properties', 'StandController@standProperty');





    // Standard Cards start
    Route::get('/business-cards/standard-business-cards', 'ProductController@bStandard');
    Route::get('/business-cards/standard-business-cards/custom-business-card', 'ProductController@bcustom');
    Route::post('/custom-card-size', 'BcardController@cardSize');
    Route::post('/custom-card-qty', 'BcardController@mainQty');
    Route::post('/custom-card-paper', 'BcardController@paperType');
    Route::post('/custom-card-printside', 'BcardController@printSide');
    Route::post('/custom-card-finishtype', 'BcardController@finishType');
    Route::post('/custom-card-rounded', 'BcardController@rounded');
    Route::get('/business-cards/standard-business-cards/slim-business-card', 'ProductController@bslim');
    Route::post('/slim-card-size', 'BcardController@slimcardSize');
    Route::post('/slim-card-qty', 'BcardController@slimmainQty');
    Route::post('/slim-card-paper', 'BcardController@slimpaperType');
    Route::post('/slim-card-printside', 'BcardController@slimprintSide');
    Route::post('/slim-card-finishtype', 'BcardController@slimfinishType');
    Route::post('/slim-card-rounded', 'BcardController@slimrounded');
    Route::get('/business-cards/standard-business-cards/square-business-card', 'ProductController@bsquare');
    Route::post('/square-card-size', 'BcardController@squarecardSize');
    Route::post('/square-card-qty', 'BcardController@squaremainQty');
    Route::post('/square-card-paper', 'BcardController@squarepaperType');
    Route::post('/square-card-printside', 'BcardController@squareprintSide');
    Route::post('/square-card-finishtype', 'BcardController@squarefinishType');
    Route::post('/square-card-rounded', 'BcardController@squarerounded');
    // Standard Cards end
    
    // Premium Cards start
    Route::get('/business-cards/premium-business-cards', 'ProductController@bpremium');
    Route::get('/business-cards/premium-business-cards/raised-uv-business-card', 'ProductController@braiseduv');
    Route::post('/uv-card-size', 'BcardController@uvcardSize');
    Route::post('/uv-card-qty', 'BcardController@uvmainQty');
    Route::post('/uv-card-paper', 'BcardController@uvpaperType');
    Route::post('/uv-card-printside', 'BcardController@uvprintSide');
    Route::post('/uv-card-side', 'BcardController@uvSide');
    Route::post('/uv-card-rounded', 'BcardController@uvrounded');
    Route::get('/business-cards/premium-business-cards/raised-foils-business-card', 'ProductController@braisedfoils');
    Route::post('/foils-card-size', 'BcardtwoController@foilscardSize');
    Route::post('/foils-card-qty', 'BcardtwoController@foilsmainQty');
    Route::post('/foils-card-paper', 'BcardtwoController@foilspaperType');
    Route::post('/foils-card-printside', 'BcardtwoController@foilsprintSide');
    Route::post('/foils-card-side', 'BcardtwoController@foilsSide');
    Route::post('/foils-card-rounded', 'BcardtwoController@foilsrounded');
    // Premium Cards end

    // Textured Cards start
    Route::get('/business-cards/textured-business-cards', 'ProductController@btextured');
    Route::get('/business-cards/textured-business-cards/linen-business-card', 'ProductController@blinen');
    Route::post('/linen-card-size', 'BcardthreeController@linencardSize');
    Route::post('/linen-card-qty', 'BcardthreeController@linenmainQty');
    Route::post('/linen-card-paper', 'BcardthreeController@linenpaperType');
    Route::post('/linen-card-printside', 'BcardthreeController@linenprintSide');
    Route::post('/linen-card-rounded', 'BcardthreeController@linenrounded');
    Route::get('/business-cards/textured-business-cards/cotton-business-card', 'ProductController@bcotton');
    Route::post('/cotton-card-size', 'BcardthreeController@cottoncardSize');
    Route::post('/cotton-card-qty', 'BcardthreeController@cottonmainQty');
    Route::post('/cotton-card-paper', 'BcardthreeController@cottonpaperType');
    Route::post('/cotton-card-printside', 'BcardthreeController@cottonprintSide');
    Route::post('/cotton-card-rounded', 'BcardthreeController@cottonrounded');
    Route::get('/business-cards/textured-business-cards/rendezvous-business-card', 'ProductController@brendezvous');
    Route::post('/rendezvous-card-size', 'BcardthreeController@rendezvouscardSize');
    Route::post('/rendezvous-card-qty', 'BcardthreeController@rendezvousmainQty');
    Route::post('/rendezvous-card-paper', 'BcardthreeController@rendezvouspaperType');
    Route::post('/rendezvous-card-printside', 'BcardthreeController@rendezvousprintSide');
    Route::post('/rendezvous-card-rounded', 'BcardthreeController@rendezvousrounded');
    // Textured Cards end

    Route::get('/business-cards/die-cut-business-cards', 'ProductController@bdiecut');
    Route::get('/business-cards/die-cut-business-cards/custom-shape-business-card', 'ProductController@bcustomShape');


    /////////Business Card End/////////

    /////////Marketing Start/////////
    Route::get('/marketing-essentials/brochure', 'ProductController@brochure');
    Route::post('/brochure-size', 'BrochureController@brochureSize');
    Route::post('/brochure-qty', 'BrochureController@mainQty');
    Route::post('/brochure-paper', 'BrochureController@paperType');
    Route::post('/brochure-printside', 'BrochureController@printSide');
    Route::post('/brochure-folding', 'BrochureController@folding');


    Route::get('/marketing-essentials/flyers', 'ProductController@flyers');
    Route::get('/marketing-essentials/flyers/club-flyers', 'ProductController@club');
    Route::get('/marketing-essentials/flyers/business-flyers', 'ProductController@business');
    Route::get('/marketing-essentials/flyers/die-cut-flyers', 'ProductController@die');

    /////////Marketing End/////////


    ///////////Invitation Cards////////////

    Route::get('/invitation-greetings-cards/invitation-cards', 'ProductController@invitation');
    Route::get('/invitation-greetings-cards/invitation-cards/flat-invitation-cards', 'ProductController@invitationFlat');
    Route::get('/invitation-greetings-cards/invitation-cards/folded-invitation-cards', 'ProductController@invitationFolded');
    Route::get('/invitation-greetings-cards/greeting-cards', 'ProductController@greetings');
    Route::get('/invitation-greetings-cards/greeting-cards/flat-greeting-cards', 'ProductController@greetingsFlat');
    Route::get('/invitation-greetings-cards/greeting-cards/folded-greeting-cards', 'ProductController@greetingsFolded');

    /////////Stationary Start/////////
    Route::get('/office-stationary/envelopes', 'ProductController@envelopes');
    // 10 evelope //
    Route::get('/office-stationary/envelopes/10-envelope', 'ProductController@tenenvelope');
    Route::post('/10-envelope-qty', 'EnvelopeController@mainQty');
    Route::post('/10-envelope-window', 'EnvelopeController@window');
    
    Route::get('/office-stationary/envelopes/a6-envelope', 'ProductController@a6envelope');
    Route::post('/a6-envelope-qty', 'EnvelopeController@a6mainQty');
    Route::post('/a6-envelope-window', 'EnvelopeController@a6window');
    Route::get('/office-stationary/envelopes/9x12-envelope', 'ProductController@ninetwelveenvelope');
    Route::post('/9x12-envelope-qty', 'EnvelopeController@mainQty9x12');
    Route::post('/9x12-envelope-window', 'EnvelopeController@window9x12');
    Route::get('/office-stationary/envelopes/9-envelope', 'ProductController@nineenvelope');
    Route::post('/9-envelope-qty', 'EnvelopeController@mainQty9');
    Route::post('/9-envelope-window', 'EnvelopeController@window9');
    Route::get('/office-stationary/envelopes/a2-envelope', 'ProductController@a2envelope');
    Route::post('/a2-envelope-qty', 'EnvelopeController@a2mainQty');
    Route::post('/a2-envelope-window', 'EnvelopeController@a2window');
    Route::get('/office-stationary/envelopes/a7-envelope', 'ProductController@a7envelope');
    Route::post('/a7-envelope-qty', 'EnvelopeController@a7mainQty');
    Route::post('/a7-envelope-window', 'EnvelopeController@a7window');
    Route::get('/office-stationary/envelopes/6x9-envelope', 'ProductController@sixenvelope');
    Route::post('/6x9-envelope-qty', 'EnvelopeController@mainQty6x9');
    Route::post('/6x9-envelope-window', 'EnvelopeController@window6x9');
    // letterhead
    Route::get('/office-stationary/letterhead', 'ProductController@letterhead');
    Route::post('/letterhead-size', 'LetterheadController@letterheadSize');
    Route::post('/letterhead-qty', 'LetterheadController@mainQty');
    Route::post('/letterhead-printside', 'LetterheadController@printSide');

    Route::get('/office-stationary/notebooks', 'ProductController@notebooks');
    Route::get('/office-stationary/notepads', 'ProductController@notepads');

    Route::get('/office-stationary/folders', 'ProductController@folders');
    Route::get('/office-stationary/folders/large-folders', 'ProductController@large');
    Route::post('/large-size', 'FolderController@largeSize');
    Route::post('/large-qty', 'FolderController@largeQty');
    
    Route::get('/office-stationary/folders/mini-folders', 'ProductController@mini');
    Route::post('/mini-size', 'FolderController@miniSize');
    Route::post('/mini-qty', 'FolderController@miniQty');
    
    Route::get('/office-stationary/folders/key-card-holder', 'ProductController@keyCard');
    Route::post('/key-size', 'FolderController@keySize');
    Route::post('/key-qty', 'FolderController@keyQty');

    Route::get('/office-stationary/folders/silk-presentation-folders', 'ProductController@silk');
    /////////Stationary End/////////

    /////////Stand and Display Start/////////

    //rollup stand
    

    Route::get('/stand-display/rollup-banner-stand', 'ProductController@rollupStand');
    Route::post('/rollup-banner-stand-size', 'StandController@bannerSize');
    Route::post('/rollup-banner-stand-qty', 'StandController@mainQty');
    Route::post('/rollup-banner-stand-add', 'StandController@stand');
    Route::post('/rollup-banner-stand-banner', 'StandController@bannerAdd');
    Route::post('/rollup-banner-stand-lamination', 'StandController@lamination');

    //deluxe single side
    
    Route::get('/stand-display/deluxe-wide-base-single-sided-banner-stand', 'ProductController@deluxeSingle');
    Route::post('/deluxe-wide-base-single-sided-banner-stand-size', 'StandController@bannerSizeDeluxe');
    Route::post('/deluxe-wide-base-single-sided-banner-stand-qty', 'StandController@mainQtyDeluxe');
    Route::post('/deluxe-wide-base-single-sided-banner-stand-add', 'StandController@standDeluxe');
    Route::post('/deluxe-wide-base-single-sided-banner-stand-banner', 'StandController@bannerAddDeluxe');
    Route::post('/deluxe-wide-base-single-sided-banner-stand-lamination', 'StandController@laminationDeluxe');
    
    //deluxe double side
    
    Route::get('/stand-display/deluxe-wide-base-double-sided-banner-stand', 'ProductController@deluxeDouble');
    Route::post('/deluxe-wide-base-double-sided-banner-stand-size', 'StandController@bannerSizeDeluxeD');
    Route::post('/deluxe-wide-base-double-sided-banner-stand-qty', 'StandController@mainQtyDeluxeD');
    Route::post('/deluxe-wide-base-double-sided-banner-stand-add', 'StandController@standDeluxeD');
    Route::post('/deluxe-wide-base-double-sided-banner-stand-banner', 'StandController@bannerAddDeluxeD');
    Route::post('/deluxe-wide-base-double-sided-banner-stand-lamination', 'StandController@laminationDeluxeD');

    //static X banner
    
    Route::get('/stand-display/static-x-banner-stand', 'ProductController@staticX');
    Route::post('/static-x-banner-stand-size', 'StandtwoController@bannerSizeStatic');
    Route::post('/static-x-banner-stand-qty', 'StandtwoController@mainQtyStatic');
    Route::post('/static-x-banner-stand-add', 'StandtwoController@standStatic');
    Route::post('/static-x-banner-stand-banner', 'StandtwoController@bannerAddStatic');
    Route::post('/static-x-banner-stand-lamination', 'StandtwoController@laminationStatic');

    //multifunctional X banner
    
    Route::get('/stand-display/multifunctional-x-banner-adjustable-stand', 'ProductController@multiX');
    Route::post('/multi-x-banner-stand-size', 'StandtwoController@bannerSizeMulti');
    Route::post('/multi-x-banner-stand-qty', 'StandtwoController@mainQtyMulti');
    Route::post('/multi-x-banner-stand-add', 'StandtwoController@standMulti');
    Route::post('/multi-x-banner-stand-banner', 'StandtwoController@bannerAddMulti');
    Route::post('/multi-x-banner-stand-lamination', 'StandtwoController@laminationMulti');

    //adjustable X banner
    
    Route::get('/stand-display/adjustable-x-banner-stand', 'ProductController@adjustX');
    Route::post('/adjust-x-banner-stand-size', 'StandtwoController@bannerSizeAdjust');
    Route::post('/adjust-x-banner-stand-qty', 'StandtwoController@mainQtyAdjust');
    Route::post('/adjust-x-banner-stand-add', 'StandtwoController@standAdjust');
    Route::post('/adjust-x-banner-stand-banner', 'StandtwoController@bannerAddAdjust');
    Route::post('/adjust-x-banner-stand-lamination', 'StandtwoController@laminationAdjust');

    //SEG fabric Frame
    
    Route::get('/stand-display/seg-fabric-frame', 'ProductController@segFrame');
    Route::post('/seg-fabric-frame-size', 'StandframeController@bannerSizeSEG');
    Route::post('/seg-fabric-frame-qty', 'StandframeController@mainQtySEG');
    Route::post('/seg-fabric-frame-frame', 'StandframeController@frameSEG');
    Route::post('/seg-fabric-frame-banner', 'StandframeController@bannerAddSEG');
    Route::post('/seg-fabric-frame-color', 'StandframeController@colorSEG');

    //Clip Frame
    
    Route::get('/stand-display/clip-frame', 'ProductController@clipFrame');
    Route::post('/clip-frame-size', 'StandframeController@bannerSizeClip');
    Route::post('/clip-frame-qty', 'StandframeController@mainQtyClip');
    Route::post('/clip-frame-frame', 'StandframeController@frameClip');
    Route::post('/clip-frame-banner', 'StandframeController@bannerAddClip');
    Route::post('/clip-frame-color', 'StandframeController@colorClip');

    //Poster Frame
    
    Route::get('/stand-display/poster-frame', 'ProductController@posterFrame');
    Route::post('/poster-frame-size', 'StandframeController@bannerSizePoster');
    Route::post('/poster-frame-qty', 'StandframeController@mainQtyPoster');
    Route::post('/poster-frame-frame', 'StandframeController@framePoster');
    Route::post('/poster-frame-banner', 'StandframeController@bannerAddPoster');
    Route::post('/poster-frame-color', 'StandframeController@colorPoster');

    //Aluminum Frame
    
    Route::get('/stand-display/aluminum-a-frame', 'ProductController@aluminumFrame');
    Route::post('/aluminum-frame-size', 'StandframeController@bannerSizeAluminum');
    Route::post('/aluminum-frame-qty', 'StandframeController@mainQtyAluminum');
    Route::post('/aluminum-frame-frame', 'StandframeController@frameAluminum');
    Route::post('/aluminum-frame-banner', 'StandframeController@bannerAddAluminum');
    Route::post('/aluminum-frame-color', 'StandframeController@colorAluminum');

    /////////Stand and Display End/////////

    ///////sample kit start /////////

    Route::get('/sample-kit', 'ProductController@samplekit')->name('FREE Sample Kit');
});

Route::domain(env('SUB_DOMAIN'))->group(function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['middleware'=>'auth'], function(){
        
        Route::get('/pending-orders', 'OrderController@pending');
        Route::get('/accepted-orders', 'OrderController@accepted');
        Route::get('/dispatch-orders', 'OrderController@dispatched');
        Route::get('/delivered-orders', 'OrderController@delivered');
        Route::get('/declined-orders', 'OrderController@declined');
        Route::get('/cancel-orders', 'OrderController@cancelled');
        Route::get('/orderDetails/{id}', 'OrderController@orderDetails');
        Route::get('/updateStatus/{o_id}/{s_id}', 'OrderController@updateStatus');
        Route::get('/accept/{id}', 'OrderController@acceptOrder');
        Route::get('/decline/{id}', 'OrderController@declineOrder');
        Route::get('/add-banners', 'LinkController@banners');
        Route::post('/store-banner', 'LinkController@bannerStore');
        Route::post('/update-header', 'LinkController@header');
        Route::post('/update-footer', 'LinkController@footer');
        Route::get('/add-coupon', 'LinkController@coupon');
        Route::post('/store-coupon', 'LinkController@couponStore');
        Route::post('/update-coupon', 'LinkController@couponUpdate');
        Route::get('/delete-coupon/{id}', 'LinkController@couponDelete');
        Route::get('/show-coupons', 'LinkController@showCoupon');
        Route::get('/show-dealers', 'DealerController@index');
        
        //products CRUD
        Route::get('/add-product', 'ProductController@addProduct');
        Route::get('/show-products', 'ProductController@showProduct');
        Route::get('/product/{id}/{name}', 'ProductController@showCatProduct');
        Route::post('/product-info-session', 'ProductController@infoSession');
        Route::post('/product-property-session', 'ProductController@propertySession');
        Route::post('/product-pricing-session', 'ProductController@pricingSession');
        Route::post('/uploadProductImg', 'ProductController@uploadImg');
        Route::get('/deleteImg/{id}', 'ProductController@deleteImg');
        Route::post('/assign-subcat-product', 'ProductController@assignSubcat');
        
        //categories CRUD
        Route::get('/sub-categories/{id}', 'CategoryController@subCategories');
        Route::post('/store-subcategory', 'CategoryController@storeSub');
        Route::post('/update-subcategory', 'CategoryController@updateSub');
        Route::get('/add-category', 'CategoryController@index');
        Route::get('/categories', 'CategoryController@show');
        Route::post('/store-category', 'CategoryController@store');
        Route::post('/update-category', 'CategoryController@update');
        Route::get('/delete-category/{id}', 'CategoryController@destroy');
        Route::post('/categorySeq', 'CategoryController@sequence');

        Route::get('/logout', function(){
            Auth::logout();
            return redirect('/home');
        });
    });
});