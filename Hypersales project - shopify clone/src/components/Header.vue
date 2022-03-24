<script setup>
import "../assets/tailwind.css";
</script>
<template>
<div>
    <div class="flex flex-row px-20 h-20">
        <div class="flex flex-row">
            <img src="../assets/images/shopify-navbar.png" alt="shopify-navbar image" class="h-[150%] -mt-5">
            <ul class="ml-5 mt-7 px-5 w-full flex flex-row">
                <li class="px-2">
                    <div class="">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Start
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                    <div class="bg-white h-36 drop-shadow-lg w-[auto] absolute">
                    <ul class="flex flex-col p-5 px-10 drop-shadow-lg text-lg font-['Arial']">
                        <li>Start your business</li>
                        <hr>
                        <li>Branding</li>
                        <li>Online Presence</li>
                        <li>Store Setup</li>
                    </ul>
                    </div>
                </li>
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Sell
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                </li>
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Market
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                </li>
                <li class="px-2">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Manage
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex flex-row float-right ml-[auto]">
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
                        <button class="font-['Arial'] flex flex-row header-font">
                            Learn
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
                        </button>
                    </div>
                </li>
                <li class="px-3 mt-7">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Login
                        </button>
                    </div>
                </li>
                <li class="px-3 mt-4">
                    <div class="flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font h-12 bg-[#008060] text-white p-3 rounded-md drop-shadow-xl">
                            Get Started
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
</style>