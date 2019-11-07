<template>
    <div class="row">
        <h3 class="w-100 text-center mt-5">
            All of users from reqres.in websites
        </h3>
        <div class="table-responsive d-flex justify-content-center mt-5">
            <table class="table table-striped w-75">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Avatar</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users.data">
                        <td class="">{{ user.first_name }} {{ user.last_name }}</td>
                        <td class="">{{ user.email }}</td>
                        <td><img :src=" user.avatar " class="img-fluid rounded" alt=""></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
           'users'
        ],
        mounted() {
            console.log(this.users.data[0])
        }
    }
</script>

<style>
    tbody tr td:nth-of-type(1),
    tbody tr td:nth-of-type(2){
        padding-top: 4.5em;
    }
</style>
