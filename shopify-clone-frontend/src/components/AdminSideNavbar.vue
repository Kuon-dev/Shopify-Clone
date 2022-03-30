<template>
<div class="AdminSidebar">
    <div class="pt-6">
        <div>
            <ul class="font-['Arial'] text-[0.875rem] ml-4 navlink">
              <li>Home</li>
              <li>Orders</li>
              <li>Products</li>
              <li>Customers</li>
              <li>Analytics</li>
              <li>Marketting</li>
              <li>Discounts</li>
              <li>Apps</li>
            </ul>
        </div>
        <div>

        </div>
        <div class="relative">
            <div class="AdminSidebarSettings">
                <p>Settings</p>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>
.AdminSidebar {
    height: 58rem;
    width: 15rem;
    background-color: white;
    border-right: 1px solid rgb(226, 226, 226);
    position: fixed;
}

.AdminSidebarSettings {
    bottom: 0px;
    margin-top: 40rem;
}

.navlink li {
    padding: 0.2rem 0;
}
</style>