<?php
if(!defined('ABSPATH')){
    die('-1');

}
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_homepage' ); // Hook in
 
function stock_rasel_ahmed_homepage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -homepage', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
        [vc_row full_width="stretch_row_content_no_spaces"][vc_column][stock_slide count="2" height="650" autoplay="false" dots="false"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1626416535841{background-color: #f5f8f9 !important;}"][vc_column][logo_carousel height="120" dots="false" nav="false" image="1925,1926,1927,1928,1929,1930,1931,1932,1933"][/vc_column][/vc_row][vc_row css=".vc_custom_1626495762600{padding-top: 80px !important;padding-bottom: 60px !important;}"][vc_column][vc_column_text el_class="text-center" css=".vc_custom_1626495928878{margin-bottom: 50px !important;}"]
        <h1>Services we offer.</h1>
        [/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1902" icon_type="1" title="Statup Business Strategy" desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1938" font_awesome="far fa-folder"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="385" icon_type="1" title="Finance Consultation." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" font_awesome="far fa-closed-captioning"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1898" icon_type="2" title="Insurance Policy." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1943"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1905" icon_type="2" title="Stock Market Sharing." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1947"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1904" icon_type="2" title="Cloud Service for Business." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1944"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1908" icon_type="2" title="Business Development." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1942"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1626504631347{padding-bottom: 80px !important;}"][vc_column offset="vc_col-lg-offset-3 vc_col-lg-6"][stock_cta_area link_type="1" page_link="2" cta_title="Get a service from us." desc="We offer free consultation before any project"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1626510416242{padding-top: 75px !important;padding-bottom: 100px !important;background-image: url(http://localhost/stock/wp-content/uploads/2021/07/01_Stock_Home_v1_001.jpg?id=251) !important;}" el_class="overlay"][vc_column][vc_row_inner][vc_column_inner width="1/2"][vc_column_text el_class="large-text" css=".vc_custom_1627215309158{padding-bottom: 50px !important;}"]
        <h1>Behind the story.</h1>
        Travelling alteration impression six all uncommonly. Chamber hearing inhabit joy highest private ask him our believe. Up nature valley do...[/vc_column_text][stock_btn link_type="1"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="250" img_size="large" alignment="right"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1626510682652{margin-top: 80px !important;}"][vc_column_inner width="1/6"][stock_stat number="55" after_text="%" desc="Active clients"][/vc_column_inner][vc_column_inner width="1/6"][stock_stat number="55" after_text="%" desc="Active clients"][/vc_column_inner][vc_column_inner width="1/6"][stock_stat number="54" desc="Active clients"][/vc_column_inner][vc_column_inner width="1/6"][stock_stat number="55" after_text="+" desc="Acibment"][/vc_column_inner][vc_column_inner width="1/6"][stock_stat number="99" after_text="%" desc="Success rate"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1626530735612{padding-top: 75px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][vc_column_text el_class="big-text"]
        <h2>Frequently Asked Question.</h2>
        [/vc_column_text][vc_tta_accordion active_section="1"][vc_tta_section title="How can I start a project with you?" tab_id="1626518483262-7601f0a5-41f3"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title="Do you support any refund policy?" tab_id="1626518583840-6f29e226-619a"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][vc_tta_section title="How do you take payments?" tab_id="1626518583229-0dc78c42-3b4a"][vc_column_text]John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest did built her him. Ignorant repeated hastened it do. Consider bachelor he yourself expenses no. Her itself active giving for expect vulgar months.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][vc_column width="1/2"][vc_column_text el_class="big-text"]
        <h2>Benefits of us.</h2>
        [/vc_column_text][vc_column_text el_class="text-size"]An country demesne message it. Bachelor domestic extended doubtful as concerns at. Morning prudent removal an letters by. On could my in order never it.[/vc_column_text][vc_row_inner][vc_column_inner el_class="list" width="1/2"][vc_column_text]
        <ul>
            <li>Proven results</li>
            <li>Strategy Documentation</li>
            <li>Instant Call Support</li>
        </ul>
        [/vc_column_text][/vc_column_inner][vc_column_inner el_class="list" width="1/2"][vc_column_text]
        <ul>
            <li>Expert advisors</li>
            <li>Refund policy</li>
            <li>Free Consultation</li>
        </ul>
        [/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1626541898355{padding-top: 75px !important;padding-bottom: 80px !important;background-color: #f5f8f9 !important;}"][vc_column][vc_column_text el_class="big-text text-center" css=".vc_custom_1627690637015{padding-bottom: 50px !important;}"]
        <h2>What customers say.</h2>
        [/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][stock_testimonial title="Robin Jonson" position="CEO, MyFinance" testimonial="“Unpacked reserved sir offering bed judgment
        may and quitting speaking. Is do be improved
        raptures offering required in replying raillery.
        Stairs ladies friend by in mutual an no. hence
        chief cause...”" photo="282"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="Jennifer Jones" position="Founder, World for Women" testimonial="“Unpacked reserved sir offering bed judgment
        may and quitting speaking. Is do be improved
        raptures offering required in replying raillery.
        Stairs ladies friend by in mutual an no. hence
        chief cause...”" photo="281"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="David Martin" position="Co-founder, Ultimate Solution" testimonial="“Unpacked reserved sir offering bed judgment
        may and quitting speaking. Is do be improved
        raptures offering required in replying raillery.
        Stairs ladies friend by in mutual an no. hence
        chief cause...”" photo="283"][/vc_column_inner][/vc_row_inner][vc_row_inner el_class="text-center" css=".vc_custom_1626542231222{margin-top: 70px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-3"][vc_column_text el_class="bnt-link"]<a href="http://localhost/stock/2021/07/04/hello-world/">Check all testimonials</a>[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="cta-bg" css=".vc_custom_1626615206310{padding-top: 70px !important;padding-bottom: 70px !important;background-image: url(http://localhost/stock/wp-content/uploads/2021/07/01_Stock_Home_v1_001s-Recovered.jpg?id=328) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column offset="vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-0"][vc_column_text el_class="text-center text-style"]
        <h2>“ The best preparation for tomorrow is doing your best today. ”</h2>
        [/vc_column_text][/vc_column][/vc_row][vc_row full_width="stretch_row" el_class="bg-left-buttom man-bg" css=".vc_custom_1626588259003{padding-top: 65px !important;padding-bottom: 70px !important;background-image: url(http://localhost/stock/wp-content/uploads/2021/07/01_Stock_Home_v1_001-1.jpg?id=297) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" offset="vc_col-lg-offset-6 vc_col-md-offset-6 vc_col-sm-offset-6"][contact-form-7 id="296"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" el_class="margin-0"][vc_column][vc_gmaps link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZ3d3cuZ29vZ2xlLmNvbSUyRm1hcHMlMkZlbWJlZCUzRnBiJTNEJTIxMW0xNCUyMTFtMTIlMjExbTMlMjExZDE3MjU2Ljk4NDM2MDgzNTA5JTIxMmQ4OS4wNjk5OTA4MTgxMjU1NSUyMTNkMjUuNDgwNTQxMzE2NTgyOTQlMjEybTMlMjExZjAlMjEyZjAlMjEzZjAlMjEzbTIlMjExaTEwMjQlMjEyaTc2OCUyMTRmMTMuMSUyMTVlMCUyMTNtMiUyMTFzZW4lMjEyc2JkJTIxNHYxNjI2NjAzODcyOTg3JTIxNW0yJTIxMXNlbiUyMTJzYmQlMjIlMjB3aWR0aCUzRCUyMjYwMCUyMiUyMGhlaWdodCUzRCUyMjQ1MCUyMiUyMHN0eWxlJTNEJTIyYm9yZGVyJTNBMCUzQiUyMiUyMGFsbG93ZnVsbHNjcmVlbiUzRCUyMiUyMiUyMGxvYWRpbmclM0QlMjJsYXp5JTIyJTNFJTNDJTJGaWZyYW1lJTNF" size="457px"][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}


//About page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_aboutpage' ); // Hook in
 
function stock_rasel_ahmed_aboutpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Aboutpage', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row][vc_column][vc_column_text el_class="text-center font-size" css=".vc_custom_1626683000748{padding-top: 80px !important;padding-bottom: 80px !important;}"]
<h3><em>We are doing this business from</em></h3>
<h3><em>last 24 years.</em></h3>
<h3></h3>
[/vc_column_text][stock_tile_gallery images="283,282,281"][/vc_column][/vc_row][vc_row css=".vc_custom_1626682458574{margin-top: 80px !important;padding-bottom: 60px !important;}"][vc_column width="1/2"][vc_column_text el_class="biger-text margin-30"]
<h1><strong><em><span style="color: #1e8bc3;">01.</span></em></strong></h1>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text el_class="biger-text margin-30"]
<h1><strong><em><span style="color: #1e8bc3;">02.</span></em></strong></h1>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column width="1/2"][vc_column_text el_class="biger-text margin-30"]
<h1><strong><em><span style="color: #1e8bc3;">03.</span></em></strong></h1>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][/vc_column][vc_column width="1/2"][vc_column_text el_class="biger-text margin-30"]
<h1><strong><em><span style="color: #1e8bc3;">04.</span></em></strong></h1>
Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1626683261240{padding-top: 90px !important;padding-bottom: 90px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-sm-offset-2"][vc_video][/vc_column][/vc_row][vc_row css=".vc_custom_1626683390158{padding-bottom: 90px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-sm-offset-2"][vc_column_text el_class="biger-text text-center"]Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity. Morning request be lasting it fortune demands highest.[/vc_column_text][/vc_column][/vc_row][vc_row][vc_column][vc_column_text el_class="big-text text-center" css=".vc_custom_1626683830355{padding-bottom: 60px !important;}"]
<h2>What customers say.</h2>
[/vc_column_text][/vc_column][/vc_row][vc_row css=".vc_custom_1626683839412{padding-bottom: 100px !important;}"][vc_column width="1/3"][stock_testimonial title="Robin Jonson" position="CEO, MyFinance" testimonial="“Unpacked reserved sir offering bed judgment
may and quitting speaking. Is do be improved
raptures offering required in replying raillery.
Stairs ladies friend by in mutual an no. hence
chief cause...”" photo="282"][/vc_column][vc_column width="1/3"][stock_testimonial title="Jennifer Jones" position="Founder, World for Women" testimonial="“Unpacked reserved sir offering bed judgment
may and quitting speaking. Is do be improved
raptures offering required in replying raillery.
Stairs ladies friend by in mutual an no. hence
chief cause...”" photo="281"][/vc_column][vc_column width="1/3"][stock_testimonial title="David Martin" position="Co-founder, Ultimate Solution" testimonial="“Unpacked reserved sir offering bed judgment
may and quitting speaking. Is do be improved
raptures offering required in replying raillery.
Stairs ladies friend by in mutual an no. hence
chief cause...”" photo="283"][/vc_column][/vc_row]
      
CONTENT;
  
  vc_add_default_templates( $data );
}

//Works page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_workspage' ); // Hook in
 
function stock_rasel_ahmed_workspage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Workpage', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row][vc_column][stock_projects theme="1"][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

//Career page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_careerpage' ); // Hook in
 
function stock_rasel_ahmed_careerpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Careerpage', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row css=".vc_custom_1626690763131{padding-top: 70px !important;padding-bottom: 80px !important;}"][vc_column width="2/3" offset="vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-sm-offset-2"][stock_cta_area link_type="1" page_link="336" link_text="See open jobs" cta_title="It’s awesome to work with us" desc="Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be."][vc_video css=".vc_custom_1626690788690{padding-top: 70px !important;}"][/vc_column][/vc_row][vc_row][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="UX Designer" desc="New York, USA" extarnal_link="#"][/vc_column][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="Finance Manager" desc="New York, USA" extarnal_link="#"][/vc_column][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="Project Manager" desc="Remote" extarnal_link="#"][/vc_column][/vc_row][vc_row css=".vc_custom_1626691390412{padding-bottom: 100px !important;}"][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="UX Designer" desc="New York, USA" extarnal_link="#"][/vc_column][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="Finance Manager" desc="New York, USA" extarnal_link="#"][/vc_column][vc_column width="1/3"][stock_promo_box link_type="2" promo_box_title="Project Manager" desc="Remote" extarnal_link="#"][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

//Contact page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_contactpage' ); // Hook in
 
function stock_rasel_ahmed_contactpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Contactpage', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row css=".vc_custom_1627230425201{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2"][contact-form-7 id="1988"][/vc_column][vc_column width="1/3" offset="vc_col-lg-offset-2 vc_col-md-offset-2 vc_col-sm-offset-2" css=".vc_custom_1627721501354{margin-top: 300px !important;}"][vc_raw_html]JTNDZGl2JTIwY2xhc3MlM0QlMjJoZWFkZXItcmlnaHQtY29udGVudCUyMGNvbnRhY3QtZm9ybSUyMiUzRSUwQSUwOSUzQ2ElMjBocmVmJTNEJTIybWFpbHRvJTNBY29udGFjdCU0MHN0b2NrLmNvbSUyMiUyMGNsYXNzJTNEJTIyc3RvY2stY29udGVudC1ib3glMjIlM0UlMEElMDklMDklM0NpJTIwY2xhc3MlM0QlMjJmYSUyMGZhLWVudmVsb3BlJTIyJTNFJTNDJTJGaSUzRSUwQSUwOSUwOVNlbmQlMjB1cyUyMGFuJTIwZW1haWwlMEElMDklMDklM0NzcGFuJTNFY29udGFjdCU0MHN0b2NrLmNvbSUzQyUyRnNwYW4lM0UlMEElMDklM0MlMkZhJTNFJTBBJTA5JTNDZGl2JTIwY2xhc3MlM0QlMjJzdG9jay1jb250ZW50LWJveCUyMiUzRSUwQSUwOSUyMCUyMCUyMCUyMCUzQ2klMjBjbGFzcyUzRCUyMmZhcyUyMGZhLXBob25lLWFsdCUyMiUzRSUzQyUyRmklM0UlMEElMDklMDlHaXZlJTIwdXMlMjBhJTIwY2FsbCUwQSUwOSUwOSUzQ3NwYW4lM0UlMkI4ODAxNzQwMTIyMTU3JTNDJTJGc3BhbiUzRSUwQSUwOSUzQyUyRmRpdiUzRSUwQSUwOSUzQ2RpdiUyMGNsYXNzJTNEJTIyc3RvY2stY29udGVudC1ib3glMjIlM0UlMEElMDklM0NpJTIwY2xhc3MlM0QlMjJmYXIlMjBmYS1jbG9jayUyMiUzRSUzQyUyRmklM0UlMEElMDklMDklMjBXZSUyMGFyZSUyMG9wZW4lMEElMDklMDklM0NzcGFuJTNFTW9uJTIwLSUyMEZyaSUyQyUyMDlhbSUyMC0lMjA2cG0lM0MlMkZzcGFuJTNFJTBBJTA5JTNDJTJGZGl2JTNFJTBBJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTIwJTNDZGl2JTIwY2xhc3MlM0QlMjJzdG9jay1jb250ZW50LWJveCUyMiUzRSUwQSUyMCUyMCUyMCUyMCUyMCUyMCUyMCUyMCUzQ2klMjBjbGFzcyUzRCUyMmZhcyUyMGZhLW1hcC1tYXJrZXItYWx0JTIyJTNFJTNDJTJGaSUzRSUwQSUwOSUwOU1lZXQlMjB1cyUyMGhlcmUlMEElMDklMDklM0NzcGFuJTNFT3JpdG9uJTIwSGlsbCUyQyUyMEJhc2UlMjBQYXJrJTIwJTNDYnIlMkYlM0UlMjBOZXclMjBZb3JrJTJDJTIwVVNBJTNDJTJGc3BhbiUzRSUwQSUwOSUzQyUyRmRpdiUzRSUwQSUzQyUyRmRpdiUzRQ==[/vc_raw_html][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

//Get a Quate page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_quatepage' ); // Hook in
 
function stock_rasel_ahmed_quatepage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Get A quate page', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row full_width="stretch_row" css=".vc_custom_1627233527983{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(http://localhost/stock/wp-content/uploads/2021/07/08_Stock_Get-a-Quote.png?id=2003) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}" el_class="background-right-bottom"][vc_column width="1/2"][contact-form-7 id="1997"][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}


//Service page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_servicepage' ); // Hook in
 
function stock_rasel_ahmed_servicepage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Service page', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row css=".vc_custom_1626495762600{padding-top: 80px !important;padding-bottom: 60px !important;}"][vc_column][vc_column_text el_class="text-center" css=".vc_custom_1626495928878{margin-bottom: 50px !important;}"]
  <h1>Services we offer.</h1>
  [/vc_column_text][vc_row_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1902" icon_type="1" title="Statup Business Strategy" desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1938" font_awesome="far fa-folder"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="385" icon_type="1" title="Finance Consultation." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" font_awesome="far fa-closed-captioning"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1898" icon_type="2" title="Insurance Policy." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1943"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1905" icon_type="2" title="Stock Market Sharing." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1947"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1904" icon_type="2" title="Cloud Service for Business." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1944"][/vc_column_inner][vc_column_inner width="1/3"][stock_service_box link_type="1" page_link="1908" icon_type="2" title="Business Development." desc="Received the likewise law graceful his. Nor might set along charm..." box_background="1940" img_icon="1942"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

//Testimonial page
add_action( 'vc_load_default_templates_action','stock_rasel_ahmed_testimonialpage' ); // Hook in
 
function stock_rasel_ahmed_testimonialpage() {
  $data = array(); // Create new array
  $data['name'] = __( 'Stock -Testimonial page', 'rasel-ahmed' ); // Assign name for your custom template
  $data['weight'] = 0; // Weight of your template in the template list
  $data['content']  = <<<CONTENT
  [vc_row full_width="stretch_row" css=".vc_custom_1627272863069{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f5f8f9 !important;}"][vc_column][vc_row_inner css=".vc_custom_1627272927331{margin-bottom: 40px !important;}"][vc_column_inner width="1/3"][stock_testimonial title="Robin Jonson" position="CEO, MyFinance" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="282"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="Jennifer Jones" position="Founder, World for Women" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="281"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="David Martin" position="Co-founder, Ultimate Solution" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="283"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][stock_testimonial title="Robin Jonson" position="CEO, MyFinance" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="282"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="Jennifer Jones" position="Founder, World for Women" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="281"][/vc_column_inner][vc_column_inner width="1/3"][stock_testimonial title="David Martin" position="Co-founder, Ultimate Solution" testimonial="“Unpacked reserved sir offering bed judgment
  may and quitting speaking. Is do be improved
  raptures offering required in replying raillery.
  Stairs ladies friend by in mutual an no. hence
  chief cause...”" photo="283"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
  
  vc_add_default_templates( $data );
}

?>