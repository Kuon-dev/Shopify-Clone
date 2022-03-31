<script>
import axios from "axios"
import adminheader from '../components/AdminHeader.vue'
import adminsidebar from '../components/AdminSideNavbar.vue'
export default {
    components: {
        adminheader,
        adminsidebar
    },
    data () {
        return {
            productData: {
                product_name: '',
                quantity: '',
                description: '',
            },
            products: []
        }
    },
    // async created() {
    //     const response = await axios.get(userdata)
    // }
    methods: {
        handleSubmitProducts(productInfo) {
            axios.post("http://127.0.0.1:8000/api/products", productInfo)
            .then(response => {
                console.log(response)
                alert("Product successfully added")
            })
            .catch(err => console.log(err.message))
        },

        fetchProducts() {
            fetch("http://127.0.0.1:8000/api/products")
            .then(res => res.json())
            .then(data => this.products = data)
            .catch(err => console.log(err.message))
        }
    },
    beforeMount() {
        this.fetchProducts()
    },
}
</script>

<template>
<div>
    <div class="">
        <adminheader/>
    </div>
    <div class="pt-[2rem]">
        <adminsidebar/>
    </div>
    <div class="pt-[1rem] pl-[15rem] flex flex-row">
        <!-- add products here  -->
        <div class="basis-1/2">
            <form class="addProduct" @submit.prevent="handleSubmitProducts(productData)">
                <h1 class="text-3xl pb-5">Add product</h1>
                <label>Product name</label>
                <input type="text" name="product" required v-model="productData.product_name">
                <label>Quantity</label>
                <input type="number" name="quantity" required v-model="productData.quantity">
                <label>Description</label>
                <input type="text" name="description" required v-model="productData.description">
                <button type="submit" name="Submit" class="submitBtn">Submit</button>
            </form>
        </div>
        <!-- Display products here -->
        <div class="basis-1/2 listOfProducts">
            <h1 class="text-3xl pb-5">List of products</h1>
            <div v-for="product in products" :key="product.id" class="">
                <p>ID: {{product.id}}</p>
                <p>Product Name: {{product.product_name}}</p>
                <p>Quantity: {{product.quantity}}</p>
                <p>Description: {{product.description}}</p>
                <br>
            </div>
            <br>
        </div>
    </div>
</div>
</template>

<style>
.addProduct {
    display: flex;
    flex-direction: column;
    padding: 2rem 3rem;
}

.addProduct input {
    background-color: rgb(228, 228, 228);
    width: 20rem;
    height: 1.8rem;
    padding: 1rem
}

.submitBtn {
    background-color:#008060;
    width: 20rem;
    height: 3rem;
    color: white;
    margin-top: 1.5rem;
    font-size: 1.3rem;
}

.listOfProducts {
    padding: 2rem 3rem;
}
</style>