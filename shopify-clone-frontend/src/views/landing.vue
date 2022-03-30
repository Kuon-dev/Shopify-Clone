<script>
import navbar from "../components/Header.vue";
import Footer from '../components/Footer.vue';

export default {
    components: {
        navbar,
        Footer, 
    },
    data () {
        return {
            ex_section1: {
                header: 'FOOD & DRINK',
                author: 'Alfred',
            },
            ex_section2: {
                header: 'JEWELRY',
                author: 'Corey Moranis',
            },
            ex_section3: {
                header: 'FOOD & DRINK',
                author: 'Detour Coffee',
            },
            ex_section4: {
                header: 'BEAUTY & COSMETICS',
                author: 'Then I met You',
            },
            ex_section5: {
                header: 'HOME & GARDEN',
                author: 'Miss Boon',
            },
        }   
    },
    methods: {

    }
}
</script>

<template>
    <div id="pg-container" class="container_padding">
        <navbar />
        <section class="background-yellow">
            <div class="container-flex-h pt-[3.5rem] pb-[3.2rem] px-[5rem]">
                <div class="basis-5/12 p-5 pr-[5rem] mt-10">
                    <h1 class="text-5xl font-bold leading-[1.4] color-green-80 tracking-tight">The platform commerce is built on</h1>
                    <br>
                    <p class="text-[1.4rem] leading-7 text-[#6b7177] tracking-tight pr-[3rem]">Millions of the world's most successful brands trust Shopify to sell, ship and process payments anywhere.</p>
                    <div class="pr-[3rem] py-7">
                        <input type="text" class="border-[1px] rounded-md border-black focus:border-green-800 h-[3.5rem] w-[17rem] px-5 focus:ring-1 focus:ring-[#004c3f] focus:outline-none" placeholder="Enter your email address">
                        <button class="drop-shadow-xl font-semibold getStartedBtn">
                             <router-link to="/signup">Get Started</router-link>
                        </button>
                    </div>
                    <div>
                        <p class="text-xs pr-[4rem]">Try Shopify free for 14 days, no credit card required. By entering your email, you agree to receive marketing emails from Shopify.</p>
                    </div>
                </div>
                <div class="basis-7/12 mt-10">
                    <img src="../assets/images/hero-product.png" alt="products" class="height-1/2 bg-contain">
                </div>
            </div>
        </section>

        <!-- section title -->
        <section class="background-green-80 py-[10rem] px-[6rem] pt-[5.8rem]">
            <div class="flex flex-col">
                <div>
                    <h1 class="text-white text-4xl font-[Arial]">Bring your business online</h1>
                    <br class="">
                    <p class="text-white -mt-2">Create an ecommerce website backed by powerful tools that help you find customers, drive sales, and manage your day-to-day.</p>
                </div>
                <!-- explore examples -->
                <div class="float-right ml-auto -mt-3 font-bold">
                    <a class="text-white">Explore more examples
                        <span><img src="../assets/images/r-arrow-white.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto"></span>
                    </a>
                </div>
                <!-- context captions -->
                <div class="container-flex-h gap-3 mt-10 pt-5">
                    <div>
                        <img src="../assets/images/home-example1.jpg">
                        <a class="flex flex-col mt-4">
                            <span>
                                <h1 class="text-white font-bold Arial text-sm">{{ex_section1.header}}</h1>
                                <p class="text-white Arial text-lg mt-[0.2rem]">{{ex_section1.author}}</p>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="../assets/images/home-example2.jpg">
                        <a class="flex flex-col mt-4">
                            <span>
                                <h1 class="text-white font-bold Arial text-sm">{{ex_section2.header}}</h1>
                                <p class="text-white Arial text-lg mt-[0.2rem]">{{ex_section2.author}}</p>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="../assets/images/home-example3.jpg">
                        <a class="flex flex-col mt-4">
                            <span>
                                <h1 class="text-white font-bold Arial text-sm">{{ex_section3.header}}</h1>
                                <p class="text-white Arial text-lg mt-[0.2rem]">{{ex_section3.author}}</p>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="../assets/images/home-example4.jpg">
                        <a class="flex flex-col mt-4">
                            <span>
                                <h1 class="text-white font-bold Arial text-sm">{{ex_section4.header}}</h1>
                                <p class="text-white Arial text-lg mt-[0.2rem]">{{ex_section4.author}}</p>
                            </span>
                        </a>
                    </div>
                    <div>
                        <img src="../assets/images/home-example5.jpg">
                        <a class="flex flex-col mt-4">
                            <span>
                                <h1 class="text-white font-bold Arial text-sm">{{ex_section5.header}}</h1>
                                <p class="text-white Arial text-lg mt-[0.2rem]">{{ex_section5.author}}</p>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- title -->
                <div class="mt-32">
                    <h1 class="text-white Arial text-3xl">Take the best path forward</h1>
                </div>
                <div class="container-flex-h gap-1 mt-[3.5rem]">
                    <div class="p-4">
                        <img src="../assets/images/startup-icon1.svg" alt="icon1" class="h-10 icon-fill">
                        <br>
                        <h2 class="text-xl text-white Arial">Start an online business</h2>
                        <p class="text-white Arial mt-3">Create a business, whether you’ve got a fresh idea or are looking for a new way to make money.</p>
                    </div>
                    <div class="p-4">
                        <img src="../assets/images/startup-icon1.svg" alt="icon1" class="h-10 icon-fill">
                        <br>
                        <h2 class="text-xl text-white Arial">Start an online business</h2>
                        <p class="text-white Arial mt-3">Create a business, whether you’ve got a fresh idea or are looking for a new way to make money.</p>
                    </div>
                    <div class="p-4">
                        <img src="../assets/images/startup-icon1.svg" alt="icon1" class="h-10 icon-fill">
                        <br>
                        <h2 class="text-xl text-white Arial">Start an online business</h2>
                        <p class="text-white Arial mt-3">Create a business, whether you’ve got a fresh idea or are looking for a new way to make money.</p>
                    </div>
                    <div class="p-4">
                        <img src="../assets/images/startup-icon1.svg" alt="icon1" class="h-10 icon-fill">
                        <br>
                        <h2 class="text-xl text-white Arial">Start an online business</h2>
                        <p class="text-white Arial mt-3">Create a business, whether you’ve got a fresh idea or are looking for a new way to make money.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-20">
            <div class="flex flex-col">

                <div class="px-[30rem]">
                    <h1 class="text-center Arial text-4xl">With you whenever you're going</h1>
                    <p class="text-center px-[3.2rem] text-xl mt-4 text-gray-500">One platform with all the ecommerce and point of sale features you need to start, run, and grow your business.</p>
                </div>

                <div class="container-flex-h mt-20 px-[5rem] gap-[5rem]">
                    <div class="basis-1/2 ml-[8rem]">
                    <video controls autoplay="autplay" muted loop class="noHover">
                        <source src="../assets/images/sell-animation.webm">
                    </video>
                    </div>
                    <div class="basis-1/2 pr-[10rem]">
                        <h2 class="smm-header">Sell everywhere</h2>
                        <br>
                        <p class="smm-captions">Use one platform to sell products to anyone, anywhere—in person with Point of Sale and online through your website, social media, and online marketplaces.</p>
                        <br>
                        <div class="container-flex-h">
                            <a class="text-green-700 font-bold text-lg">Explore ways to sell
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="svg-right-arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container-flex-h mt-5 px-[5rem] flex-row-reverse">
                    <div class="basis-3/5 ">
                        <img src="../assets/images/market-small.jpg" class="h-[90%]">
                    </div>
                    <div class="basis-2/5 ml-[12rem]">
                        <h2 class="smm-header ">Market your business</h2>
                        <br>
                        <p class="mr-[3rem] smm-captions">Take the guesswork out of marketing with built-in tools that help you create, execute, and analyze digital marketing campaigns.</p>
                        <br>
                        <div class="container-flex-h">
                            <a class="text-green-700 font-bold text-lg">Explore how to market your business
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="svg-right-arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container-flex-h px-[5rem]">
                    <div class="basis-1/2 ml-[6rem]">
                        <img src="../assets/images/sales-summary.png" class="">
                    </div>
                    <div class="basis-1/2">
                        <h2 class="smm-header">Manage everything</h2>
                        <br>
                        <p class="mr-[3rem] pr-[14rem] smm-captions">Gain the insights you need to grow—use a single dashboard to manage orders, shipping, and payments anywhere you go.</p>
                        <br>
                        <div class="container-flex-h">
                            <a class="text-green-700 font-bold text-lg">Explore how to manage your business
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="svg-right-arrow"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- company scale ( i guess? )-->
        <section class="companyScaleSection">
            <div class="container-flex-v">
                <div class="companyScaleSecton-Header">
                    <h1 class="companyScaleHeader pr-32">Empowering independent business owners everywhere</h1>
                    <br>
                    <h2 class="companyScaleHeader2">Millions of businesses in <strong>175 countries</strong> around the world have made over <strong>$200 billion USD</strong> in sales using Shopify.</h2>
                </div>
            </div>
            <div class="mt-20">
                <!-- rotating globe here -->
                <video controls autoplay="autplay" muted loop class="noHover" id="" width="150%" height="150%">
                    <source src="../assets/rotating_globe.mp4">
                </video>
            </div>
        </section>

        <!-- company scale ( i guess? )-->
        <section class="mt-10 reviewMainContainer">
            <div class="container-flex-h">
                <div class="basis-1/2">
                    <img src="../assets/images/review.jpg">
                </div>
                
                <div class="reviewContainer basis-1/2">
                    <div class="container-flex-v">
                        <div class="">
                            <h3>“We’ve been able to build something in 3 years that a lot of brands haven’t actually gotten to in 10 years.”</h3>
                            <br>
                            <br>
                            <div class="divCenter">
                                <img src="../assets/images/logo-cee-cee.png" alt="">
                            </div>
                            <br>
                            <br>
                            <p>Chioma | Cee Cee’s Closet NYC</p>
                            <div class="divCenter pt-5 container-flex-h">
                                <button class="storyBtn container-flex-h mt-1">
                                <span class="mr-3">
                                    <img src="../assets/images/play-button-white.svg" class="svg-playBtn">
                                </span> 
                                Play Chioma and Uchenna's Story
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-flex-h gap-[4.5rem] mt-[3rem]">
                <img src="../assets/images/cee-cee-logo.png">
                <img src="../assets/images/nalata-logo.png">
                <img src="../assets/images/kirrin-logo.png">
                <img src="../assets/images/tokyobike-logo.png">
                <img src="../assets/images/meso-logo.png">
                <img src="../assets/images/coco-logo.png">
                <img src="../assets/images/brooklyn-logo.png">
                <img src="../assets/images/adore-logo.png">
            </div>
        </section>

        <section class="mt-20">
            <div class="container-flex-h">
                <div class="background-yellow basis-1/2 px-[5rem]">
                    <div>
                        <h1 class="helpHeader pt-20">Get the help you need, every step of the way</h1>
                    </div>
                    <div class="grid grid-rows-2 grid-cols-2 pt-20 gap-y-[5rem]">
                        <div class="helpGridInfo pr-10">
                            <h2 class="">Shopify support</h2>
                            <p>Contact support 24/7, whether you’re troubleshooting issues or looking for business advice.</p>
                            <br>
                            <a class="container-flex-h">Contact support
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 ml-auto"></span>
                            </a>
                        </div>
                        <div class="helpGridInfo">
                            <h2>Shopify App Store</h2>
                            <p>Add features and functionality to your business with 6,000+ apps that integrate directly with Shopify.</p>
                            <br>
                            <a class="container-flex-h">Visit the Shopify App Store
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 ml-auto"></span>
                            </a>
                        </div>
                        <div class="helpGridInfo">
                            <h2>Shopify Experts Marketplace</h2>
                            <p>Hire a Shopify expert to help you with everything from store setup to SEO.</p>
                            <br>
                            <a class="container-flex-h">Explore the Shopify Experts Marketplace
                                <span><img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 ml-auto"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="basis-1/2">
                    <img src="../assets/images/help.jpg">
                </div>
            </div>
        </section>

        <section class="mt-10 py-10 px-20">
            <div class="divCenter">
                <div class="container-flex-v">
                    <div>
                        <h1 class="text-3xl text-center">Start your business journey with Shopify</h1>
                        <br>
                    </div>
                    <div class="">
                        <p class="text-center text-lg px-[23rem]">Try Shopify for free, and explore all the tools and services you need to start, run, and grow your business.</p>
                    </div>
                    <div class="divCenter mt-5">
                    <button class="getStartedBtn font-bold">
                         <router-link to="/signup">Get Started</router-link>
                    </button>
                    </div>
                    <div>
                        <h1 class="text-right backToTop">Back to top</h1>
                    </div>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<style>
.svg-right-arrow {
    margin-top: 0.5rem;
    height: 0.75rem;
    padding: 0 0.5rem 0 0.5rem;
    margin-left: auto;
    float: right;
}

.svg-playBtn {
    margin-top: 0.3rem;
    height: 1.1rem;
    padding: 0 0.5rem 0 0.5rem;
    float: left;
    left: 0;
    margin-right: auto;
}

.background-yellow {
  background-color: #fbf7ed;
}

.color-green-80 {
    color: #004c3f;
}

.background-green-80 {
    background-color:#004c3f;
}

.getStartedBtn {
    height: 3.5rem;
    width: 9rem;
    font-family: Arial;
    font-size: 1rem;
    color: white;
    background-color: #008060;
    margin-left: 2rem;
    border-radius: 0.2rem;
}

.Arial {
    font-family: Arial;
}

.icon-fill {
    fill: #c1f0d0;
}

.noHover{
    pointer-events: none;
}

video::-webkit-media-controls-panel {
    display: none !important;
    opacity: 1 !important;
}

.container-flex-h {
    display: flex;
    direction: row;
}

.container-flex-v {
    display: flex;
    flex-direction: column;
}

.smm-header {
    font-size: 1.875rem;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 10rem;
}

.smm-captions {
    font-family: Arial, Helvetica, sans-serif;
    color: #6b7177;
}

.companyScaleSection {
    padding: 0 6rem 0 6rem;
    margin-top: 7rem;
}

.companyScaleSecton-Header {
    padding: 0 36rem 0 6rem;
}

.companyScaleHeader {
    font-size: 1.8rem;
    font-family: Arial;
}

.companyScaleHeader2 {
    font-size: 1.5rem;
    line-height: 2rem;
    font-family: Arial;
}

.reviewMainContainer {
    padding: 0 5rem 0 5rem;
}

.reviewContainer {
    background-color:#002e25;
    color: white;
    padding: 4rem ;

    display: flex;
    justify-content: center;
    align-items: center;
}

.reviewContainer h3 {
    font-size: 2rem;
    color: white;
    font-family: Arial;
    padding: 0 3rem;
}

.reviewContainer p {
    font-size: 1.2rem;
    font-weight: 550;
    color: white;
    font-family: Arial;
    padding: 0 3rem;
}

.storyBtn {
    font-size: 1.1rem;
    font-family: Arial;
    color: white;
    background-color: transparent;
    border-color: white;
    border-radius: 0.3rem;
    border: 0.05rem solid rgb(255, 255, 255);
    padding: 0.7rem 1rem;
    font-weight: 550;
    letter-spacing: -0.05rem;
}

.divCenter {
    display: flex;
    justify-content: center;
    align-items: center;
}

.helpHeader {
    font-family: "Arial";
    font-size: 2.3rem;
    padding-right: 15rem;
    line-height: 3rem;
}

.helpGridInfo h2 {
    font-family: "Arial";
    font-size: 1.2rem;
    font-weight: bold;

}

.helpGridInfo a {
    color: #008060;
    font-weight: bold;
    font-size: 1rem;
    font-family: "Arial";
    letter-spacing: -0.03rem;
}

.backToTop {
    font-size: 1.2rem;
    font-family: "Arial";
    font-weight: bold;
    color: #008060;
}

@media (min-width: 1536px){
  .container_padding {padding: 0 7.5rem 0 7.5rem}
}
</style>