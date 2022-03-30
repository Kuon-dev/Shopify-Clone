<template>
  <div>
      <div class="login-bg">
          <div class="SignUpPanelContainer">
              <div class="loginPanel">
                <button>
                    <router-link to="/">
                    <img src="../assets/images/shopify-navbar.png" alt="shopify-navbar image" class="h-32 -mt-5">
                    </router-link>
                </button>
                <h1 class="text-2xl font-bold">Create a Shopify account</h1>
                <p class="panelCaptions mt-1">The ecommerce platform made for you</p>
                
                <form class="mt-3" @submit.prevent="CreateAccount(userData)"  >
                    <label>Email</label>
                    <input type="email" required v-model="userData.email" class="formContainer" id="emailSignupInput">
                    <p class="text-red-500 text-[0.9rem] hidden -px-2" id="EmailRegisteredWarn">Email is already registered</p>
                    <p class="pt-3">Password</p>
                    <input type="password" 
                    required v-model="userData.password" 
                    class="formContainer" 
                    @click="isWarningHidden = false" 
                    >
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <p class="leading-5 panelCaptions2 pt-5" id="pwSignupInputWarning" :class="{hidden: isWarningHidden}">Your password must be at least 5 characters, and can’t begin or end with a space.</p>
                    <button type="submit" class="createAccBtn AccBtnGray">Create Shopify account</button>
                </form>
                <div class="pt-7">
                    <p class="panelCaptions2">By proceeding, you agree to the <span class="signUpLink">Terms and Conditions</span></p>
                    <p class="panelCaptions2">Already have a Shopify account? <span class="signUpLink"><router-link to="/login">Log in</router-link></span></p>
                </div>

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
import { inject } from 'vue';
import axios from 'axios';

export default {
    data () {
        return {
            isWarningHidden: true,
            userData: {
                email: '',
                username: '',
                password: '',
            },
            csrf_token: document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
            
        }
    },
    
    methods: {
        CreateAccount(userinfo) {
            var usname = userinfo.email // replace username as email but without domain anme
            var name   = usname.substring(0, usname.lastIndexOf("@")); // removeremoves domain name
            userinfo.username = name //assign it

            // post data to database 
            axios.post("http://127.0.0.1:8000/api/users", userinfo)
            .then(response => {
                console.log(response)
                this.$router.push('/') //redirect users
            })
            .catch(error => {
                console.log(error)
                if (error.response.status == 500) {
                    var errorObj = JSON.stringify(error.response.data)
                    var Err = (JSON.parse(errorObj).message)
                    
                    // regex for filtering error codes + violation title
                    var matches = Err.match(/[0-9]+(\s+([a-zA-Z]+\s+)+)/g);
                    console.log(matches)
                    for (let i = 0; i < matches.length; i++) {
                        // email is not unique, raise warn
                        if (matches[i] == "1062 Duplicate entry ") {
                            document.getElementById("EmailRegisteredWarn").classList.remove("hidden")
                        }
                        // other errors can be accessed here
                    }
                // end of if statement for code 500
                }
            // end of catch clause
            })
        // end of create account function
        }
    },
    mounted() {
        //window.addEventListener('mouseover', this.)
    }
}
</script>

<style>
.SignUpPanelContainer {
    height: 60.1rem;
    display: flex;
    align-items: center;
    justify-content: center
}

.formContainer {
    border-radius: 3px;
    padding: 0.8rem 0.8rem;
    margin-top: 0.5rem; 
    box-sizing: border-box;
    border: 1px solid rgb(110, 110, 110);
}

.formContainer:focus-within {
    border: 2px solid #008060;
    margin-bottom: -2px;
}

.createAccBtn {
    border-radius: 3px;
    margin-top: 2rem;
    height: 5rem;
    width: 100%;
    font-weight: bold;   
}

.AccBtnGray:hover {
    background-color: #008060;
    color: white;
}

.AccBtnGray {
    background-color: rgb(219, 219, 219);
    color: rgb(122, 122, 122);
    cursor: default;
}

</style>