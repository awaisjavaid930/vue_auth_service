<template>
    <v-container>
        <v-row justify="space-around">
            <v-card class="px-5" width="400">
                <h3 class="font-weight-bold text-center pb-5" justify="center" size="meduim">
                    <v-img max-height="150" max-width="250" src="@/assets/cycle.gif"></v-img>
                </h3>
                <form  @submit.prevent="register">
                    <v-text-field v-model="formData.name" :counter="10" label="Name">
                    </v-text-field>
                    <v-text-field v-model="formData.email" label="E-mail">
                    </v-text-field>
                    <v-text-field type="password" dense outlined v-model="formData.password" label="Password">
                    </v-text-field>
                    
                    <v-btn type="submit" color="primary" class="mb-5 mr-4" @click="submit">
                        Register
                    </v-btn>
                    <v-btn to="/login" class="mb-5" depressed color="error">
                        Login
                    </v-btn>
                </form>
            </v-card>
        </v-row>
    </v-container>
</template>

<script>
export default {
    name: 'RegisterView',
    data: () => ({
        formData: {
            name: '',
            email: '',
            password : ''
        }
    }),
    methods: {
        register() {
            console.log(this.formData)
        },
    },
}
</script>