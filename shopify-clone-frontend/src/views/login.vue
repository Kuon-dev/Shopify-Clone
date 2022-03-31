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
                    <span><router-link to="/signup">Get started</router-link></span>
                </p>
                </form>

                 <!-- password form -->
                <form id="passwordForm" @submit.prevent="handleSubmitPassword(userinfo)" class="hidden">
                <h1 class="text-2xl font-bold">Log in</h1>
                <p class="mt-1">Continue to Shopify</p>
                <div class="container-flex-hor mt-[2rem]">
                    <p class="text-[0.9rem]">{{userinfo.email}}</p>
                    <button class="signUpLink divRight" @click="handleReEnterEmail">Change email</button>
                </div>
                <div class="loginPanelInputContainer border-[1px] mt-5">
                    <p>Password</p>
                    <input type="password" required v-model="userinfo.password" class="">
                </div>
                <p class="text-red-500 pt-2 text-[0.9rem] hidden" id="incorrectInfoWarn">Incorrect credentials</p>
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
import axios from "axios";
export default {
    name: "login",
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

        },

        async handleSubmitPassword(userinfo) {
            axios.get('http://127.0.0.1:8000/api/users')
            .then((response) => {
                // fetched data
                //console.log(response.data)

                var tcase = []
                // loop within the json 
                for (let i=0; i<response.data.length; i++) {
                    var email = response.data[i].email;
                    var password = response.data[i].password;
                    // console.log(email, password)
                    // console.log(userinfo.password)
                    

                    // direct user when email and password matches
                    if (userinfo.email == email && userinfo.password == password) {
                        console.log("Login successful")
                        // const res = axios.post('http://localhost:8000/login', {
                        //     email: email,
                        //     password: password
                        // });
                        // i want to make a local storage session but I don't know how even after
                        // watching a lot of tutorials 
                        console.log()
                        this.$router.push(({
                            name: 'homepg',
                            params: {
                                items: userinfo
                            },
                        }))
                        //localStorage.setItem(token, response.data.token)
                        break;
                    }
                }

                if (tcase.length < 1) {
                    console.log("Incorrect password")
                    // display output 
                    document.getElementById('incorrectInfoWarn').classList.remove("hidden")
                }

            })
            .catch(error => console.log(error))
        },

        // async userRedirect(email, password) {
        //     const res = await axios.post('http://localhost:8000/login', {
        //         email: email,
        //         password: password
        //     });
        //     console.log(res)
        // }
    }
}
</script>

<style>
.login-bg {
    background-image: url("../assets/images/panel-bg.jpg");
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

.panelCaptions {
    color: #6d7175;
}

.panelCaptions2 {
    color: #6d7175;
    font-size: 0.875rem;
}
</style>