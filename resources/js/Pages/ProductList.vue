<template>
    <div>
        
        <h4>Products</h4>
        
        <Link href="/add-products" class="add-button">+</Link>
        <table>
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
            </thead>
            <tbody>

                <tr>
                    <td>beef burger</td>
                    <td>lorem ipsum</td>
                    <td>P 179</td>
                    <td>Beef</td>
                </tr>

            </tbody>
        </table>
    </div>
    
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';

</script>