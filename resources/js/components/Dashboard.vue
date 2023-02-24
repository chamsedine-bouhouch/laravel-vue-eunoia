<template lang="">
    <div>
        Hi dash
        <h1>
            Welcome {{ Username }},
            <a href="" @click.prevent="logout">Logout</a>
        </h1>

        <ul>
            <li v-for="subject in subjects" :key="subject.id">
                {{ subject.name }}
            </li>
        </ul>
    </div>
</template>
<script>
import { useStore } from "vuex";
import { onMounted, computed } from "vue";
export default {
    setup() {
        const store = useStore();

        onMounted(() => {
            store.dispatch("subject/getAllUserSubjects");
        });

        return {
            Username: computed(
                () => JSON.parse(localStorage.getItem("currentUser")).name
            ),
            // access a getter in computed function
            subjects: computed(() => store.getters["subject/getSubjects"]),
            logout:()=>store.dispatch("subject/logout")
        };
    },
};
</script>
<!-- <script>


export default {
    data() {
        return {
            Username: JSON.parse(localStorage.getItem("currentUser")).name
        }
    },
    created() {
        // console.log(JSON.parse(localStorage.getItem("currentUser")).name)
        this.$store.dispatch('subject/getAllUserSubjects')
    },
    methods: {
        logout() {
            axios.post('api/logout');
            localStorage.removeItem("access_token");
            localStorage.removeItem("currentUser");
        }
    },
}
</script> -->
