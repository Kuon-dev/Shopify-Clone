<template>
<div id="login">
    <div id="bg" class="login-bg">
        <div class="loginPanelContainer">
            <div class="loginPanel">
                <button>
                    <router-link to="/">
                    <img src="../assets/images/shopify-navbar.png" alt="shopify-navbar image" class="h-32 -mt-5">
                    </router-link>
                </button>

                <!-- email form -->
                <form id="emailForm" @submit.prevent="handleSubmit(userinfo.email)">
                <h1 class="text-2xl font-bold">Log in</h1>
                <p class="mt-1 text-[#6d7175]">Continue to Shopify</p>
                <div class="loginPanelInputContainer border-[1px] mt-4">
                    <p>Email</p>
                    <input type="email" required v-model="userinfo.email" novalidate class="">
                </div>
                <div class="pt-5">
                    <button class="loginPanelSubmitBtn" type="Submit">Next</button>
                </div>

                <p class="mt-4 text-[0.9rem]">
                    New to Shopify? 
                    <span><a href="#" class="signUpLink">Get started</a></span>
                </p>
                </form>

                 <!-- password form -->
                <form id="passwordForm" @submit.prevent="handleSubmitPassword" class="hidden">
                <h1 class="text-2xl font-bold">Log in</h1>
                <p class="mt-1 text-[#6d7175]">Continue to Shopify</p>
                <div class="container-flex-hor mt-[2rem]">
                    <p class="text-[0.9rem]">{{userinfo.email}}</p>
                    <button class="signUpLink divRight" @click="handleReEnterEmail">Change email</button>
                </div>
                <div class="loginPanelInputContainer border-[1px] mt-5">
                    <p>Password</p>
                    <input type="email" class="">
                </div>
                <div class="pt-5">
                    <button class="loginPanelSubmitBtn" type="Submit">Login</button>
                </div>

                <p class="pt-10 text-[0.9rem]">
                    <a href="#" class="signUpLink">Forgot password?</a>
                </p>
                </form>

                <div class="divRight loginPanelFooter">
                    <ul class="container-flex-hor gap-8">
                        <li>Help</li>
                        <li>Privacy</li>
                        <li>Terms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data () {
        return {
            userinfo: {
                email : '',
                password : '',
            },
        }
    },
    methods: {
        handleSubmit(email) {
            console.log(email);
            var showPw = document.getElementById("passwordForm");
            var hideEm = document.getElementById("emailForm");

            showPw.classList.remove("hidden")
            hideEm.classList.add("hidden")
        },
        handleReEnterEmail() {
            var showPw = document.getElementById("passwordForm");
            var hideEm = document.getElementById("emailForm");

            showPw.classList.add("hidden")
            hideEm.classList.remove("hidden")

        }
    }
}
</script>

<style>
.login-bg {
    background-image: url("../assets/images/login-bg.png");
    background-repeat: no-repeat;
    background-size: cover;
}

.loginPanelContainer {
    height: 60.1rem;
    display: flex;
    margin-left: 10rem; 
    align-items: center;

}

.loginPanel {
    height: auto;
    width: 35rem;
    padding: 3rem;
    background-color: white;
    border-radius: 0.5rem;

}

.loginPanel input {
    width: 100%;
}

.loginPanel input:focus {
    outline: none;
}

.loginPanelInputContainer {
    border-radius: 3px;
    border-color: black;
    padding: 0.1rem 0.5rem;
    box-sizing: border-box;
}

.loginPanelInputContainer p {
    color: rgb(92, 92, 92);
    margin-top: 0.3rem;
    font-size: 0.9rem;
}

.loginPanelInputContainer:focus-within {
    border-radius: 3px;
    border-color: #008060;
    border-width: 0.15rem;
    border-style: solid;
    box-sizing: border-box;
    margin-bottom: -0.2rem;

}

.loginPanelSubmitBtn {
    height: 5rem;
    width: 100%;
    background-color: #008060;
    color: white;
    font-weight: bold;
}

.signUpLink {
    color: #008060;
    font-size: 0.9rem;
}

.signUpLink:hover {
    color: #004c3f;
    text-decoration: underline;
}

.loginPanelFooter {
    font-size: 0.875rem;
    margin-top: 3rem;
    color: #637381;
}
</style>