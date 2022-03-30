<script>
import axios from "axios"
import adminheader from '../components/AdminHeader.vue'
import adminsidebar from '../components/AdminSideNavbar.vue'
export default {
    components: {
        adminheader,
        adminsidebar
    },
    async created() {
        const response = await axios.get(userdata)
    }
}
</script>

<template>
<div>
    <div class="">
        <adminheader :data="userinfo"/>
    </div>
    <div class="pt-[2rem]">
        <adminsidebar/>
    </div>
</div>
</template>

<style>

</style>