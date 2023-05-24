<template>  
    <div class="product-form-container">
        <form action="" @submit.prevent="create_product">
            <div class="input-container">
                <label for="name">
                    Name of Product
                    <input 
                        type="text" 
                        v-model="form.product_name"
                        placeholder="Enter name of product" 
                        name="product_name" 
                        id="product_name"
                    >
                </label>
            </div>
            <div class="input-container">
                <label for="description">
                    Product Description
                    <textarea v-model="form.product_description" name="product_description" id="product_description"></textarea>
                </label>
            </div>
            <div class="input-container">
                <label for="name">
                    Price of product
                    <input 
                        v-model="product_price"
                        type="text" 
                        placeholder="price" 
                        name="product_price"
                    >
                </label>
            </div>
            <div class="input-container" >
                <label>Category</label>
                <div class="category">
                    <label for="beef">
                        Beef
                        <input v-model="variation" type="radio" name="variation" id="variation" value="beef">
                    </label>
                    <label for="chicken">
                        Chicken
                        <input v-model="variation" type="radio" name="variation" id="variation" value="chicken">
                    </label>
                    <label for="veggies">
                        Veggies
                        <input v-model="variation" type="radio" name="variation" id="variation" value="veggies">
                    </label>
                </div>
            </div>

            <button type="submit" class="add-product-button">Add Product</button>
        </form>
    </div>
</template>

<script setup>

    import { useForm } from '@inertiajs/vue3';

    const props = defineProps({
        product_name: String,
        

    })

    const submit = () => {
        form.post(route('add-products.store'))
    }

</script>