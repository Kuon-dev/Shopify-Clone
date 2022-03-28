<template>
  <section class="footer-container" id="footer">
        <div class="">
          <div class="footer-containerHeader">
              <ul class="container-flex-hor gap-[2rem]">
                  <li>About
                    <br>
                  </li>
                  <li>Career</li>
                  <li>Press and Media</li>
                  <li>Shopify Plus</li>
                  <li>Sitemap</li>
              </ul>
          </div>
          <hr class="footer-headerLB">
        </div>
        <div>
            <div class="footer-containerContent">
                <div class="container-flex-hor text-sm">
                    <h1 class="basis-6/12">ONLINE STORE</h1>
                    <h1 class="basis-2/12">POINT OF SALE</h1>
                    <h1 class="basis-2/12">SUPPORT</h1>
                    <h1 class="basis">SHOPIFY</h1>
                </div>
                <div class="container-flex-hor mt-2">
                    <ul class="grid grid-flow-col grid-cols-3 grid-rows-5 basis-6/12 pb-[8rem]">
                        <li>Sell Online</li>
                        <li>Features</li>
                        <li>Examples</li>
                        <li>Website editor</li>
                        <li>Online retail</li>
                        <li>Ecommerce website</li>
                        <li>Domain name</li>
                        <li>Themes</li>
                        <li>Shopping cart</li>
                        <li>Ecommerce hosting</li>
                        <li>Mobile commerce</li>
                        <li>Ecommerce software</li>
                        <li>Online store builder</li>
                        <li>Drop shipping business</li>
                        <li>Store themes</li>
                    </ul>
                    <ul class="grid grid-cols-1 grid-rows-5 basis-2/12 pb-[8.5rem]">
                        <li>Point of sale</li>
                        <li>Features</li>
                        <li>Hardware</li>
                    </ul>
                    <ul class="grid grid-cols-1 grid-rows-10 basis-2/12">
                        <li>24/7 support</li>
                        <li>Shopify Help Center</li>
                        <li>Shopify Community</li>
                        <li>API documentation</li>
                        <li>Free tools</li>
                        <li>Free stock photos</li>
                        <li>Website for sale</li>
                        <li>Logo maker</li>
                        <li>Business name generator</li>
                        <li>Research</li>
                    </ul>
                    <ul class="grid grid-cols-1 grid-rows-10 basis-2/12 pb-[5.8rem]">
                        <li>Contact</li>
                        <li>Partner program</li>
                        <li>Affiliate program</li>
                        <li>App developers</li>
                        <li>Investors</li>
                        <li>Blog topics</li>
                        <li>Community Events</li>
                    </ul>
                </div>
                <hr class="footer-headerLB mt-5">
            </div>
        </div>
        <div class="container-flex-hor pt-10 pb-8">
            <div class="container-flex-hor gap-6">
                <img src="../assets/images/fb.svg" width="23" height="23" class="svgFill-White">
                <img src="../assets/images/toxic-cesspool.svg" width="23" height="23" class="svgFill-White">
                <img src="../assets/images/yt.svg" width="23" height="23" class="svgFill-White">
                <img src="../assets/images/insta.svg" width="23" height="23" class="svgFill-White">
                <img src="../assets/images/linkedin.svg" width="23" height="23" class="svgFill-White">
                <img src="../assets/images/pintrest.svg" width="23" height="23" class="svgFill-White">
            </div>
            <div class="divRight container-flex-hor footer-containerPolicy">
                <h1>Terms of Service</h1>
                <h1>Privacy Policy</h1>
                <div class="container-flex-hor gap-2">
                    <img src="../assets/images/globe.svg" width="15" height="15" class="svgFill-White">
                    <h2 class="text-white">USA</h2>
                </div>
            </div>
        </div>
  </section>
</template>

<script>
export default {

}
</script>

<style>
.footer-container {
    background-color:#002e25;
    padding: 1rem 7rem;
}

.footer-containerContent {
    margin-top: 1rem;
    color: #fff;
    font-family: "Arial";
}

.footer-containerContent h1{
    font-weight: bold;
    font-size: 0.9rem;
}

.footer-containerContent ul li {
    line-height: 1.8rem;
    font-size: 0.9rem;
    color: #b6babf;
}


.footer-containerHeader ul li {
    color: #fff;
    font-weight: bold;
    padding-bottom: 1.1rem;
    box-sizing: border-box;
}

.footer-containerHeader ul li:hover {
    border-color: white;
    border-style: solid;
    border-bottom: 0.15rem solid;
    position: relative;
    box-sizing: border-box;
    margin-bottom: -0.15rem;
}

.footer-headerLB {
    border-color: rgba(210, 213, 217, 0.1);
    font-weight: bold;
}


.container-flex-hor {
    display: flex;
    flex-direction: row;
}

.container-flex-w {
    display: flex;
    flex-direction: column;
}

.svgFill-White {
    filter: invert(93%) sepia(94%) saturate(0%) hue-rotate(248deg) brightness(106%) contrast(106%);
}

.divRight {
    float: right;
    right: 0;
    margin-left: auto;
}

.footer-containerPolicy {
    gap: 1rem;
    font-family: Arial, Helvetica, sans-serif;
    color: #b6babf;
    font-size: 1.025rem;
}
</style>