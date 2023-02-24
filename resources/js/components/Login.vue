<template lang="">
    <div>
        <h1>Login form</h1>
        <form>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" />
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="" />
            </div>

            <button type="submit" @click=login class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>
<script setup>
import { ref } from "vue";
const email = ref("");
const password = ref("");

setup(props) {
    const form = ref()
    function login(params) {
    }
}

</script>
