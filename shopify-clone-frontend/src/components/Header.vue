
<script>
import "../assets/tailwind.css";

export default {
        data () {
        return {
            isStartHidden: true,
            isSellHidden: true,
            isMarketHidden: true,
            isManageHidden: true,
            isLearnHidden: true,

            scrollPosition: null,
        }
        
    },
    methods: {
        toggle: function(event) {
            event.target.classList.toggle('hidden');
        },
        updateBgOnScroll() {
            this.scrollPosition = window.scrollY;
        }
    },
    mounted() {
    window.addEventListener('scroll', this.updateBgOnScroll);
  }
}
</script>
<template>
  
<div v-bind:class="{bgYellow: scrollPosition < 700, bgWhite: scrollPosition > 699}">
    <div class="flex flex-row px-20 h-20">
        <div class="flex flex-row">
            <img src="../assets/images/shopify-navbar.png" alt="shopify-navbar image" class="h-[150%] -mt-5">
            <!-- header contents on left side -->
            <ul class="ml-5 mt-7 px-5 w-full flex flex-row">
                <!-- Start -->
                <li class="px-2">
                    <div class="">
                        <button class="font-['Arial'] flex flex-row header-font" @click="isStartHidden = !isStartHidden">
                            Start
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                    <!-- drop down box -->
                    <div class="bg-white h-48 drop-shadow-lg w-[auto] absolute border-[1px] rounded border-gray-300 mt-2 font-bold"
                     :class="{hidden: isStartHidden}"
                    >
                    <!-- drop down contents -->
                    <ul class="flex flex-col p-3 px-8 drop-shadow-lg text-lg font-['Arial']">
                        <li class="py-1 text-[0.9rem] pr-[3rem]">
                            <div>
                                <button class="font-semibold">Start your business</button>
                            </div>
                        </li>
                        <hr class="py-1 mt-1">
                        
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Branding</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Online Presence</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Store set up</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                    </ul>
                    </div>
                </li>
                 <!-- Sell -->
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font" @click="isSellHidden = !isSellHidden">
                            Sell
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                    <!-- drop down box -->
                    <div class="bg-white h-[25rem] drop-shadow-lg w-[auto] absolute border-[1px] rounded border-gray-300 mt-2 font-bold"
                     :class="{hidden: isSellHidden}"
                    >
                    <!-- drop down contents -->
                    <ul class="flex flex-col p-3 px-8 drop-shadow-lg text-lg font-['Arial']">
                        <li class="py-1 text-[0.9rem] pr-[3rem]">
                            <div>
                                <button class="font-semibold">Sell Everywhere</button>
                            </div>
                        </li>

                        <hr class="py-1 mt-1">
                        
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Online Store</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Point of Sale</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Buy Button</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Checkout</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Sales channels</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Wholesale marketplace</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Custom storefront tools</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">International commerce</button>
                                <img src="../assets/images/r-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2 float-right ml-auto">
                            </div>
                        </li>
                    </ul>
                    </div>
                </li>
                 <!-- Market -->
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font" @click="isMarketHidden = !isMarketHidden">
                            Market
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                    <div class="bg-white h-[17.5rem] drop-shadow-lg w-[auto] absolute border-[1px] rounded border-gray-300 mt-2 font-bold"
                     :class="{hidden: isMarketHidden}"
                    >
                    <!-- drop down contents -->
                    <ul class="flex flex-col p-3 px-8 drop-shadow-lg text-lg font-['Arial']">
                        <li class="py-1 text-[0.9rem] pr-[3rem]">
                            <div>
                                <button class="font-semibold">Market your business</button>
                            </div>
                        </li>
                        <hr class="py-1 mt-1">
                        
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Email Marketting</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Marketting automation</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Customer groups</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Business chat</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Facebook Ads</button>
                            </div>
                        </li>
                    </ul>
                    </div>
                </li>
                 <!-- Manage -->
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font" @click="isManageHidden = !isManageHidden">
                            Manage
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    <div class="bg-white h-[17.5rem] drop-shadow-lg w-[auto] absolute border-[1px] rounded border-gray-300 mt-8 font-bold"
                     :class="{hidden: isManageHidden}"
                    >
                    <!-- drop down contents -->
                    <ul class="flex flex-col p-3 px-8 drop-shadow-lg text-lg font-['Arial']">
                        <li class="py-1 text-[0.9rem] pr-[3rem]">
                            <div>
                                <button class="font-semibold">Manage everything</button>
                            </div>
                        </li>
                        <hr class="py-1 mt-1">
                        
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Payments</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Ecommerce automation</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Balance</button>
                                <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Capital</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Shipping</button>
                            </div>
                        </li>
                    </ul>
                    </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- header contents on right -->
        <div class="w-[30rem]"></div>
        <div class="flex flex-row float-right right-0 ml-[auto]">
             <ul class="ml-5 flex flex-row px-5">
                <li class="px-3 mt-7">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Pricing
                        </button>
                    </div>
                </li>
                <li class="px-3 mt-7">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font" @click="isLearnHidden = !isLearnHidden">
                            Learn
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                    <div class="bg-white h-[27rem] drop-shadow-lg w-[auto] absolute border-[1px] rounded border-gray-300 mt-4 font-bold"
                     :class="{hidden: isLearnHidden}"
                    >
                    <!-- drop down contents -->
                    <ul class="flex flex-col p-3 px-8 drop-shadow-lg text-lg font-['Arial']">
                        <li class="py-1 text-[0.9rem]">
                            <div>
                                <button class="font-semibold">Help Center</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Blog</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Business course</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Guides</button>
                                <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Shopify community</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Free tools</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Podcasts</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Busines encyclopedia</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Community Events</button>
                            </div>
                        </li>
                        <li class="py-1 mt-[0.25rem] text-[0.9rem]">
                            <div class="flex flex-row">
                                <button class="font-semibold">Research</button>
                            </div>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="px-3 mt-7">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            <router-link to="/login">Login</router-link>
                        </button>
                    </div>
                </li>
                <li class="px-3 mt-4">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row text-[1.1rem] text-white h-[3rem] bg-[#008060] text-white p-3 rounded-md drop-shadow-xl font-semibold">
                            <router-link to="/signup">Get Started</router-link>
                        </button>
                    </div>
                </li>
             </ul>
        </div>
    </div>
</div>
</template>



<style>
.header-font {
    color: #42474c;
    font-weight: 550;
    font-size: 1.1rem;
}
.bgYellow {
    background-color: #fbf7ed;
    z-index: 100;
     position: fixed
}

.bgWhite {
    background-color: white;
    z-index: 100;
    position: fixed;
    filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.07));
}

.container-flex-h {
    display: flex;
    direction: row;
}

.container-flex-v {
    display: flex;
    direction: column;
}
</style>
