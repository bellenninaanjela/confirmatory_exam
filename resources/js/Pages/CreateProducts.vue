<template>  
    <div class="product-form-container">
        <form action="" @submit.prevent="create">
            <div class="input-container">
                <label for="product_name">
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
                        v-model="form.product_price"
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
                        <input v-model="form.variation" type="radio" name="variation" id="variation" value="1">
                    </label>
                    <label for="chicken">
                        Chicken
                        <input v-model="form.variation" type="radio" name="variation" id="variation" value="2">
                    </label>
                    <label for="veggies">
                        Veggies
                        <input v-model="form.variation" type="radio" name="variation" id="variation" value="3">
                    </label>
                </div>
            </div>

            <button type="submit" class="add-product-button">Add Product</button>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    product_name: '',
                    product_description: '',
                    product_price: '',
                    variation: ''
                }
            }
        },

        methods: {
            create() {
                this.$inertia.post('/add-products', this.form);
            }
        }
    }


</script>