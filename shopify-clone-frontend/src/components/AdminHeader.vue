<template>
  <div class="">
    <div class="bgWhite AdminHeaderBar container-flex-hor">
        <div class=" basis-1/3 container-flex-hor mt-2 pl-4">
        <div>
            <img src="../assets/images/shopify-icon.svg" width="25" height="25">
        </div>
        <div>
            <p class="text-lg text-[0.9rem] font-[Arial] pl-2">joyaxih</p>
        </div>
            <img src="../assets/images/d-arrow.svg" class="-mt-2 ml-2" width="10" height="10">
        </div>
        <div class="divCenter basis-1/3">
        <div class="container-flex-hor AdminSearchBar">
            <img src="../assets/images/search.png" class="">
            <input type="text" class="AdminSearchBarBg w-full" placeholder="Search..">
        </div>
        </div>
        <div class="basis-1/3">
            <div class="divRight pr-4 items-center mt-2 container-flex-hor">
                <div>
                    <!-- for profile image -->
                    <img src="../assets/images/profile-picture.svg" width="30" height="30">
                </div>
                <div>
                    <h1>joyaxih450</h1>
                </div>
            </div>
        </div>

    </div>   
  </div>
</template>

<script>
import "../assets/tailwind.css";
export default {

}
</script>

<style>
.AdminHeaderBar {
    height: 3rem;
    width: 100%;

}

.AdminSearchBar {
    background-color: rgba(241, 242, 243, 1);
    width: 33rem;
    height: 2.2rem;
    border-radius: 3px;
    border: 2px solid rgb(226, 226, 226);
}

.AdminSearchBarBg:focus-visible {
    outline: none;
}

.AdminSearchBarBg {
    background-color: rgba(241, 242, 243, 1);
}

.AdminSearchBarIcon {
    font: normal normal normal 14px/1 FontAwesome
}
</style>