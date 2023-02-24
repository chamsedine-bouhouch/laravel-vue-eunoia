<template lang="">
    <div>
        <h1>Login form</h1>
        <form>
            <div class="mb-3">
                <label for="email">Email</label>
                <input v-model="form.email" type="email" name="email" id="email" />
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input v-model="form.password" type="password" name="password" id="" />
            </div>

            <button @click.prevent="login()" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: "",
                password: ""
            },


        }
    },
    methods: {
        login() {
            axios.post('api/login', this.form).then(response => {
                // console.log(response);
                const token = response.data.access_token;
                localStorage.setItem("access_token", token);
                localStorage.setItem(
                "currentUser",
                JSON.stringify(response.data.user)
                );
                    this.$router.push('dashboard')
            })
        }
    },

}
</script>
<!-- <script setup>
import { ref } from "vue";
const email = ref("");
const password = ref("");

setup(props) {
    const form = ref()
    function login(params) {
    }
}

</script> -->
