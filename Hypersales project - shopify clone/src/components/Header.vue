<script setup>
import "../assets/tailwind.css";
</script>
<template>
<div>
    <div class="flex flex-row px-20 h-20">
        <div class="flex flex-row">
            <img src="../assets/images/shopify-navbar.png" alt="shopify-navbar image" class="h-[150%] -mt-5">
            <ul class="ml-5 mt-7">
                <li>
                    <div class="px-5 flex flex-row">
                        <button class="font-['Arial'] flex flex-row header-font">
                            Start
                            <img src="../assets/images/d-arrow.svg" alt="d-arrow" class="h-2 mt-2 px-2">
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
    font-weight: bold;
    font-size: 1.1rem;
}
</style>